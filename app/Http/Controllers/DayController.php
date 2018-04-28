<?php

namespace App\Http\Controllers;

use App\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "llegaste aqui";
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
            'itinerary_id'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);

        $dia = Day::create([
            'itinerary_id'=>$request['itinerary_id'],
            'title'=>$request['title'],
            'day'=>$request['day'],
            'description'=>$request['description']
        ]);

        return $dia->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dias = Day::where('itinerary_id',$id)->get();
        return response()->json($dias->toArray());
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function edit(Day $day)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Day $day)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);


        $day->fill([
            'title'=>$request['title'],
            'description'=>$request['description']
        ]);

        $day->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function destroy(Day $day)
    {

 

        $day->delete();

    }
}
