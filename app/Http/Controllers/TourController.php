<?php

namespace App\Http\Controllers;

use DB;
use App\Tour;
use App\Categorie;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tour = Tour::All();
        return response()->json($tour->toArray());
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
  

        $this->validate($request,[

                'input-img-tour'=>'required',
                'input-title-tour'=>'required',
                'input-price-tour'=>'required',
                'input-short-description'=>'required',
                'input-description-tour'=>'required',
                'input-categorie-tour'=>'required',
                'input-status-tour'=>'required',
                'input-slug-tour'=>'required'
        ]);

$abbrLanguage = DB::table('languages')->where('id',$request['input-lang-tour'])->value('abbreviated');
                $file = $request->file('input-img-tour'); //envia la ruta del archivo en el cliente
                $extension = $file->getClientOriginalExtension(); //envia la extension del archivo
                $fileName = time() . '.' . $extension;
                $file->move(public_path('assets/public/content/lang/'.$abbrLanguage.'/tour'),$fileName);
                $ruta = 'assets/public/content/lang/'.$abbrLanguage.'/tour'.$fileName;

        Tour::create([
            'img'=>$ruta,
            'categorie_id'=>$request['input-categorie-tour'],
            'meta_description'=>$request['input-meta-description-tour'],
            'meta_keywords'=>$request['input-meta-keywords-tour'],
            'name'=>$request['input-title-tour'],
            'price'=>$request['input-price-tour'],
            'slider'=>$request['input-slider-tour'],
            'slug'=>$request['input-slug-tour'],
            'description_short'=>$request['input-short-description'],
            'description_complete'=>$request['input-description-tour'],
            'status'=>$request['input-status-tour']
            ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($tour)
    {
        $recuperando = Tour::where('id',$tour)->get();
        return response()->json($recuperando->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }

    public function showCategoria($id){

        $categoria = Categorie::All();
        return response()->json($categoria->toArray());

    }
}
