<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('miembros.index', compact('usuarios'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($miembro)
    {
        $usuario = User::findOrFail($miembro);
        return view('miembros.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($miembro)
    {
        $user = Auth::user();
        if ($miembro != $user->id) {
            return abort(403, 'Acceso no autorizado');
        }
        $usuario = User::findOrFail($miembro);
        return view('auth.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterRequest $request, User $miembro)
    {
        $miembro->name = $request->get('name');
        $miembro->email = $request->get('email');
        $miembro->birthday = $request->get('birthday');
        $miembro->twitter = $request->get('twitter');
        $miembro->instagram = $request->get('instagram');
        $miembro->twitch = $request->get('twitch');
        $miembro->save();
        $usuario = $miembro;
        return view('auth.account', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function cuenta()
    {
        $user_id = auth()->user()->id;
        $usuario = User::findOrFail($user_id);
        return view('auth/account', compact('usuario'));
    }

    public function editarCuenta($usuario)
    {
        return view('auth.edit', compact('usuario'));
    }
}
