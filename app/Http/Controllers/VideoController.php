<?php

namespace App\Http\Controllers;

use App\Video;
use App\Multimedia;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Multimedia::where('tipo','video')->get();
        return response()->json($video->toArray());
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
        return "llegaste a store de video";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }


    public function video(Request $request,$id){


        $file = $request->file('video'); //envia la ruta del archivo en el cliente
        $extension = $file->getClientOriginalExtension(); //envia la extension del archivo
        $fileName = $file->getClientOriginalName();
        $size = $file->getClientSize();
        $file->move(public_path('assets/public/content/video/'), $fileName);
        $ruta = 'assets/public/content/video/'. $fileName;

 
        Video::create([
            'multimedia_id'=>$id,
            'name'=>$fileName,
            'size'=>$size,
            'route'=>$ruta        
        ]);



    }

    public function deleteVideo($id){

        $img = Video::find($id);
        \File::delete(public_path($img->route));
        Video::destroy($id);


    }




    public function showVideo($id){
        $videoSlider = Video::where('multimedia_id',$id)->get();
        return response()->json($videoSlider->toArray());
    }








}
