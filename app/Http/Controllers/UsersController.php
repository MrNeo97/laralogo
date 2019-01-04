<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = new User;
        $user = $user->all();
        return view('users.list')->with('users', $user);
    }

    public function users()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = ['jefe' => 'jefe', 'empleado' => 'empleado'];
        return view('users.create')->with('rol', $rol);
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->rol = $request->input('rol');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return redirect('/dashboard')->with('success', 'User Added');

    }

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
        $user = new User;
        $user = $user::find($id);

        $rol = ['jefe', 'empleado'];

        return view('users.edit')->with(['user' => $user, 'roles' => $rol]);
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

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $user = new User;
        $user = $user::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->rol = $request->input('rol');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return redirect('/dashboard')->with('success', 'User Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = new User;
        $user = $user::find($id);

        $user->delete();
        return redirect('/dashboard')->with('success', 'User Removed');
    }
}
