<?php
namespace App\Http\Controllers;
use App\Categorie;
use App\Language;
use DB;
use Illuminate\Support\Str as Str;
use Illuminate\Http\Request;
class CategorieController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
$lang = Language::All();
$categorie = DB::select('select categories.*,languages.name as idioma from categories INNER JOIN languages ON languages.id=categories.language_id WHERE categories.language_id='.$request['id']);
return response()->json(array(
'lang'=>$lang,
'categorie'=>$categorie
));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{



$this->validate($request, [
'input-img-categorie'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
'input-language-categorie' => 'required',
'input-name-categorie' => 'required',
'input-principal-categorie' => 'required',
'input-description-categorie'=>'required',
'input-slug-categorie'=>'required|unique:categories,slug'
]);

$abbrLanguage = DB::table('languages')->where('id',$request['input-language-categorie'])->value('abbreviated');
$file = $request->file('input-img-categorie'); //envia la ruta del archivo en el cliente
$extension = $file->getClientOriginalExtension(); //envia la extension del archivo
$fileName = time() . '.' . $extension;
$file->move(public_path('assets/public/content/lang/'.$abbrLanguage.'/categories/'), $fileName);
$ruta = 'assets/public/content/lang/'.$abbrLanguage.'/categories/'.$fileName;
Categorie::create([
'language_id'=>$request['input-language-categorie'],
'name'=>$request['input-name-categorie'],
'img'=>$ruta,
'categorie_principal'=>$request['input-principal-categorie'],
'description'=>$request['input-description-categorie'],
'slug'=>Str::slug($request['input-slug-categorie'])
]);

}
/**
* Display the specified resource.
*
* @param  \App\Categorie  $categorie
* @return \Illuminate\Http\Response
*/
public function show(Categorie $categorie)
{
return $categorie;
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Categorie  $categorie
* @return \Illuminate\Http\Response
*/
public function edit(Categorie $categorie)
{
//
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Categorie  $categorie
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Categorie $categorie)
{   

$abbrLanguage = DB::table('languages')->where('id',$request['input-language-categorie'])->value('abbreviated');


if ($categorie['slug'] == $request['edit-slug-categorie']){
    $this->validate($request,[
        'edit-name-categorie'=>'required',
        'edit-description-categorie'=>'required'
    ]);
}else{
    $this->validate($request,[
        'edit-name-categorie'=>'required',
        'edit-description-categorie'=>'required',
        'edit-slug-categorie'=>'required|unique:categories,slug'
    ]);
}


if(($request['edit-img-categorie'])!=null){
        if(\File::exists(public_path($categorie->img))){
          \File::delete(public_path($categorie->img));
          
        }

        $file = $request->file('edit-img-categorie'); //envia la ruta del archivo en el cliente
                $extension = $file->getClientOriginalExtension(); //envia la extension del archivo
                $fileName = time() . '.' . $extension;
                $file->move(public_path('assets/public/content/lang/'.$abbrLanguage.'/flag/'), $fileName);
                $ruta = 'assets/public/content/lang/'.$abbrLanguage.'/flag/'.$fileName;

                    $categorie->fill([
                    'name'=>$request['edit-name-categorie'],
                    'description'=>$request['edit-description-categorie'],
                    'img'=>$ruta,
                    'slug'=>Str::slug($request['edit-slug-categorie'])
                ]);
        }else{
        $categorie->fill([
            'name'=>$request['edit-name-categorie'],
            'description'=>$request['edit-description-categorie'],
            'slug'=>Str::slug($request['edit-slug-categorie'])
        ]); 
        }


$categorie->save();


}
/**
* Remove the specified resource from storage.
*
* @param  \App\Categorie  $categorie
* @return \Illuminate\Http\Response
*/
public function destroy(Categorie $categorie)
{
//
}
}