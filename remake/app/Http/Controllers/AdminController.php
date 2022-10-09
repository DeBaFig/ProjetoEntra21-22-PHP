<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    //login blade only for admin 
    public function index()
    {
        return view('admin.login');
    }
    //login logic using the middleware('admin') 
    public function login(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.index')->with('error', 'Você está logado como Administrador!');
        } else {
            return back()->with('error', 'Credenciais invalidas');
        }
    }
    //after login blade only for admin showing some data 
    public function adminHome()
    {
        return view('admin.index');
    }
    public function adminRegister()
    {
        return view('admin.register');
    }

    public function adminUsersShow($id){
        $viewData = Product::select('*')
        ->join('users', 'users.id', '=', 'products.user_id')
        ->where('users.id', '=', $id)
        ->get();
        $userData = User::where('id','=', $id)->get();
        // dd($viewData);
        return view('admin.user_show')
        ->with('viewData', $viewData)
        ->with('user', $userData);
    }

    //Show all users table in a blade allowing edit
    public function adminUsers()
    {
        // $viewData = Product::select('products.id', 'users.name', 'users.isActive', 'users.last_login', 'users.id')
        // ->join('users', 'products.id', '=', 'users.id')
        $viewData = User::select('name', 'isActive', 'last_login', 'id')
            ->withCount('product')
            ->paginate(6);
        return view('admin.users')->with('viewData', $viewData);
    }

    //Show all products table in a blade allowing edit
    public function adminProducts()
    {
        return view('admin.products');
    }

    //Admin logout 
    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error', 'Tchau! Você deslogou com sucesso!');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
