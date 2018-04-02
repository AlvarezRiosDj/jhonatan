<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = Language::All();
        return response()->json($lang->toArray());
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
            'img-lang' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'name-lang' => 'required',
            'abbr-lang' => 'required|unique:languages,abbreviated',
            ]);

        $file = $request->file('img-lang'); //envia la ruta del archivo en el cliente
        $extension = $file->getClientOriginalExtension(); //envia la extension del archivo
        $fileName = time() . '.' . $extension;
        $file->move(public_path('assets/public/content/lang/'.$request['abbr-lang'].'/flag/'), $fileName);
        $ruta = 'assets/public/content/lang/'.$request['abbr-lang'].'/flag/'.$fileName;

        Language::create([
                'name'=>$request['name-lang'],
                'abbreviated'=>$request['abbr-lang'],
                'image'=>$ruta,
                'status'=>$request['status-lang']
                 ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    

        //validamos si ingresaron los datos
        $this->validate($request,[
                'name-lang-edit'=>'required'
            ]);
        //recuperamoes el lenguaje de la base de datos
        $lang = Language::find($id);

     

        //consultamos si se ingreso una imagen
        if (($request['img-lang-edit'])!=null) {
            if(\File::exists(public_path($lang->image))){
                \File::delete(public_path($lang->image));
               
            }

            $file = $request->file('img-lang-edit'); //envia la ruta del archivo en el cliente
            $extension = $file->getClientOriginalExtension(); //envia la extension del archivo
            $fileName = time() . '.' . $extension;
            $file->move(public_path('assets/public/content/lang/'.$lang['abbreviated'].'/flag/'), $fileName);
            $ruta = 'assets/public/content/lang/'.$lang['abbreviated'].'/flag/'.$fileName;

            $lang->fill([
                'name'=>$request['name-lang-edit'],
                'image'=>$ruta,
                'status'=>$request['status-lang-edit']
            ]);


        }else{
           
            $lang->fill([
                'name'=>$request['name-lang-edit'],
                'status'=>$request['status-lang-edit']
                ]);
        }

        $lang->save();




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        //
    }
}
