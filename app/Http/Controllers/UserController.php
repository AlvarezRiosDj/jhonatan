<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::All();
        return response()->json($user->toArray());
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
  

        //validamos la informacion ingresada
        $this->validate($request, [
            'name-user' => 'required',
            'last-name-user' => 'required',
            'email-user' => 'required|unique:users,email',
            'password-user'=>'required',
            'privilege-user'=>'required'
            ]);

        // consultamos si el campo avatar tiene alguna imagen
            if (($request['user-avatar'])!=null) {
                $file = $request->file('user-avatar'); //envia la ruta del archivo en el cliente
                $extension = $file->getClientOriginalExtension(); //envia la extension del archivo
                $fileName = time() . '.' . $extension;
                $file->move(public_path('assets/admin/images/users/'),$fileName);
                $ruta = 'assets/admin/images/users/'.$fileName;


                User::create([
                'first_name'=>$request['name-user'],
                'last_name'=>$request['last-name-user'],
                'email'=>$request['email-user'],
                'password'=>bcrypt($request['password-user']),
                'privilege'=>$request['privilege-user'],
                'img'=>$ruta
            ]);


            }else{
                  User::create([
                'first_name'=>$request['name-user'],
                'last_name'=>$request['last-name-user'],
                'email'=>$request['email-user'],
                'password'=>bcrypt($request['password-user']),
                'privilege'=>$request['privilege-user'],
                'img'=>'null'
            ]); 
            }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  
        //validamos si se ingresaron los datos
         $this->validate($request, [
            'name-user-edit' => 'required',
            'last-name-user-edit' => 'required',
            'password-user-edit'=>'required',
            'privilege-user-edit'=>'required'
            ]);


        //recuperamos el usuario de la base de datos
      $user = User::find($id);
      
      //consultamos si el usuario ingreso una imagen
      if (($request['user-avatar-edit'])!=null) {
      if (\File::exists(public_path($user->img))) {
          \File::delete(public_path($user->img));
      }
      $file = $request->file('user-avatar-edit');
      $extension = $file->getClientOriginalExtension();
      $fileName = time().'.'.$extension;
      $file->move(public_path('assets/admin/images/users/'),$fileName);
      $ruta = 'assets/admin/images/users/'.$fileName;


      $user->fill([
        'first_name'=>$request['name-user-edit'],
        'last_name'=>$request['last-name-user-edit'],
        'password'=>bcrypt($request['password-user-edit']),
        'privilege'=>$request['privilege-user-edit'],
        'img'=>$ruta
      ]);


   }else{
         $user->fill([
        'first_name'=>$request['name-user-edit'],
        'last_name'=>$request['last-name-user-edit'],
        'password'=>bcrypt($request['password-user-edit']),
        'privilege'=>$request['privilege-user-edit'],
        ]);
   }

   $user->save();



    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       

        if ($user->privilege != 'administrador') {
            $user->delete();
        }
        
    }
}
