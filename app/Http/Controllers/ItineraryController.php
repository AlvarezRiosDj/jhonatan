<?php

namespace App\Http\Controllers;

use App\Itinerary;
use App\Day;
use Illuminate\Http\Request;

class ItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itinerary = Itinerary::All();
        


        return response()->json($itinerary->toArray());
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

            'title-itinerary'=>'required',
            'tour-itinerary'=>'required|unique:itinerary,tour_id'
        ]);

        $itinerario = Itinerary::create([
          
            'tour_id'=>$request['tour-itinerary'],
            'name'=>$request['title-itinerary']
        ]);

        return $itinerario->id;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Itinerary  $itinerary
     * @return \Illuminate\Http\Response
     */
    public function show(Itinerary $itinerary)
    {
        

        $idItinerary = $itinerary->id;

        $dias = Day::where('itinerary_id',$idItinerary)->get();

        return response()->json(array(
            'itinerario'=>$itinerary,
            'dias'=>$dias
        ));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itinerary  $itinerary
     * @return \Illuminate\Http\Response
     */
    public function edit(Itinerary $itinerary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itinerary  $itinerary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itinerary $itinerary)
    {
       





        if ($request['tour-itinerary-edit']==$itinerary->id) {
           $this->validate($request,[
            'title-itinerary-edit'=>'required',
            ]); 
        }else{
            $this->validate($request,[
            'title-itinerary-edit'=>'required',
            'tour-itinerary-edit'=>'required|unique:itinerary,tour_id'
            ]); 
        }


        $itinerary->fill([
            'name'=>$request['title-itinerary-edit'],
            'tour_id'=>$request['tour-itinerary-edit']
        ]);

        $itinerary->save();




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itinerary  $itinerary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itinerary $itinerary)
    {
        $idItinerary = $itinerary->id;

        Day::where('itinerary_id',$idItinerary)->delete();
        $itinerary->delete();
    }
}
