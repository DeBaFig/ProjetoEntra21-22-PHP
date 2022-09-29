<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function Index()
    {
        return view('admin.admin_login');
    }

    public function Dashboard()
    {
        return view('admin.index');
    }

    public function Login(Request $request)
    {
        // dd($request->all());
        $check = $request->all();

        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard')->with('error', 'Você está logado como Administrador!');
        } else {
            return back()->with('error', 'Credenciais invalidas');
        }
        // return view();

    }

    public function AdminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error', 'Tchau! Você deslogou com sucesso!');
    }
}
