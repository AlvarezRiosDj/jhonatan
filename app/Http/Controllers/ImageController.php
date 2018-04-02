<?php

namespace App\Http\Controllers;

use App\Image;
use App\Multimedia;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $multimedia = Multimedia::where('tipo','slider')->get();
       return response()->json($multimedia->toArray());
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
       return "llegaste a store de image";
    }

    public function slider(Request $request,$id)
    {
       
        $file = $request->file('slider'); //envia la ruta del archivo en el cliente
        $extension = $file->getClientOriginalExtension(); //envia la extension del archivo
        $fileName = $file->getClientOriginalName();
        $size = $file->getClientSize();
        $file->move(public_path('assets/public/content/img/'), $fileName);
        $ruta = 'assets/public/content/img/'. $fileName;
        Image::create([
            'multimedia_id'=>$id,
            'name'=>$fileName,
            'size'=>$size,
            'route'=>$ruta        
        ]);
        
    }
    public function showSlider($id){
        $imgSlider = Image::where('multimedia_id',$id)->get();
        return response()->json($imgSlider->toArray());
    }


    public function deleteSlider(Request $request,$id){
    

        $img = Image::find($id);
        \File::delete(public_path($img->route));
        Image::destroy($id);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        return "llegaste a eliminar";
    }
}
