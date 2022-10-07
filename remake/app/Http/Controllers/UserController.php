<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\Rules;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user_email = Auth::user()->email;
        $viewData = User::select('name', 'email', 'password',  'phone', 'address', 'cep', 'cpf', 'facebook', 'instagram')->where('email', '=', $user_email)->get();
        return view('user.update')->with("viewData", $viewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (Auth::guard('web')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            $user = User::select('*')->where('email', '=', $request->email)->first();
            $user->cpf = $request->cpf;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->cep = $request->cep;
            $user->facebook = $request->facebook;
            $user->instagram = $request->instagram;
            $user->save();
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Senha não válida');
        }
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
}
