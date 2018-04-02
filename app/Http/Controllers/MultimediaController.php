<?php

namespace App\Http\Controllers;

use App\Multimedia;

use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       // $multimedia = Multimedia::where('tipo','slider')->get();
       // return response()->json($multimedia->toArray());
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
            'name' => 'required|unique:multimedia,name',
            'description' => 'required',
            'tipo' => 'required'
            ]);

        $multimedia = Multimedia::create([
            'name'=>$request['name'],
            'description'=>$request['description'],
            'tipo'=>$request['tipo']
        ]);

        return $multimedia->id;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function show(Multimedia $multimedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function edit(Multimedia $multimedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
                    'name' => 'required',
                    'description' => 'required',
                     ]);

        
        $multimedia = Multimedia::find($id);
        
        $multimedia->fill([
            'name'=>$request['name'],
            'description'=>$request['description']
        ]);

        $multimedia->save();
    }

    /**
     * Remove the specified resource from storage.
     *s
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multimedia $multimedia)
    {
        //
    }
}
