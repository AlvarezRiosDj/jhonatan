<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Country;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $country = Country::All();
        return response()->json($country->toArray());
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
        //

        //validamos la informacion ingresada
        $this->validate($request, [
            'countryName' => 'required',
            'countryDescription' => 'required'
            ]);

        // consultamos si el campo avatar tiene alguna imagen
            if (($request['countryImage'])!=null) {
                $file = $request->file('countryImage'); //envia la ruta del archivo en el cliente
                $extension = $file->getClientOriginalExtension(); //envia la extension del archivo
                $fileName = time() . '.' . $extension;
                $file->move(public_path('assets/admin/images/country/'),$fileName);
                $ruta = 'assets/admin/images/country/'.$fileName;


                Country::create([
                'name'=>$request['countryName'],
                'description'=>$request['countryDescription'],
                'image'=>$ruta
            ]);


            }else{
                Country::create([
                'name'=>$request['countryName'],
                'description'=>$request['countryDescription'],
                'image'=>'null'
            ]);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //validamos si se ingresaron los datos
         $this->validate($request, [
            'countryNameEdit' => 'required',
            'countryDescriptionEdit' => 'required'
            ]);


        //recuperamos el usuario de la base de datos
        $country = Country::find($id);

        //consultamos si el usuario ingreso una imagen
        if (($request['countryImageEdit'])!=null) {
        if (\File::exists(public_path($country->image))) {
            \File::delete(public_path($country->image));
        }
        $file = $request->file('countryImageEdit');
        $extension = $file->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $file->move(public_path('assets/admin/images/country/'),$fileName);
        $ruta = 'assets/admin/images/country/'.$fileName;


        $country->fill([
          'name'=>$request['countryNameEdit'],
          'description'=>$request['countryDescriptionEdit'],
          'image'=>$ruta
        ]);


     }else{
           $country->fill([
          'name'=>$request['countryNameEdit'],
          'description'=>$request['countryDescriptionEdit']
          ]);
     }

     $country->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
