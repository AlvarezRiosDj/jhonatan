<?php

namespace App\Http\Controllers;

use DB;
use App\Tour;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;

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


                $file = $request->file('input-img-tour'); //envia la ruta del archivo en el cliente
                $extension = $file->getClientOriginalExtension(); //envia la extension del archivo
                $fileName = time() . '.' . $extension;
                $file->move(public_path('assets/public/content/img/'),$fileName);
                $ruta = 'assets/public/content/img/'.$fileName;

        Tour::create([
            'img'=>$ruta,
            'categorie_id'=>$request['input-categorie-tour'],
            'meta_description'=>$request['input-meta-description-tour'],
            'meta_keywords'=>$request['input-meta-keywords-tour'],
            'name'=>$request['input-title-tour'],
            'price'=>$request['input-price-tour'],
            'slider'=>$request['input-slider-tour'],
            'slug'=>Str::slug($request['input-slug-tour']),
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
    public function update(Request $request, $id)
    {

        $tour = Tour::find($id);
 

        if ($tour->slug == $request['input-slug-tour-edit']) {
               $this->validate($request,[
                        'input-title-tour-edit'=>'required',
                        'input-price-tour-edit'=>'required',
                        'input-short-description-edit'=>'required',
                        'input-description-tour-edit'=>'required',
                        'input-categorie-tour-edit'=>'required',
                        'input-status-tour-edit'=>'required',
                       ]);
            
        }else{

                $this->validate($request,[
                        'input-title-tour-edit'=>'required',
                        'input-price-tour-edit'=>'required',
                        'input-short-description-edit'=>'required',
                        'input-description-tour-edit'=>'required',
                        'input-categorie-tour-edit'=>'required',
                        'input-status-tour-edit'=>'required|unique:tours,slug',
                        'input-slug-tour-edit'=>'required'
                ]);
        }


       if ($request['input-img-tour-edit'] != null ) {
             if (\File::exists(public_path($tour->img))) {
                  \File::delete(public_path($tour->img));
              }

              $file = $request->file('input-img-tour-edit');
              $extension = $file->getClientOriginalExtension();
              $fileName = time().'.'.$extension;
              $file->move(public_path('assets/public/content/img/'),$fileName);
              $ruta = 'assets/public/content/img/'.$fileName;

                     $tour->fill([
                        'meta_description'=>$request['input-meta-description-tour-edit'],
                        'meta_keywords'=>$request['input-meta-keywords-tour-edit'],
                        'name'=>$request['input-title-tour-edit'],
                        'img'=>$ruta,
                        'slug'=>$request['input-slug-tour-edit'],
                        'description_short'=>$request['input-short-description-edit'],
                        'description_complete'=>$request['input-description-tour-edit'],
                        'status'=>$request['input-status-tour-edit'],
                        'price'=>$request['input-price-tour-edit'],
                        'slider'=>$request['input-slider-tour-edit']      
                       ]);

       }else{

            $tour->fill([
                        'meta_description'=>$request['input-meta-description-tour-edit'],
                        'meta_keywords'=>$request['input-meta-keywords-tour-edit'],
                        'name'=>$request['input-title-tour-edit'],
                        'slug'=>$request['input-slug-tour-edit'],
                        'description_short'=>$request['input-short-description-edit'],
                        'description_complete'=>$request['input-description-tour-edit'],
                        'status'=>$request['input-status-tour-edit'],
                        'price'=>$request['input-price-tour-edit'],
                        'slider'=>$request['input-slider-tour-edit']      
                       ]);

       }

       $tour->save();

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
