<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $query = Photo::select('products.title', 'product_id', 'products.user_id', 'photos.photo_image', 'photos.photo_url', 'products.isNew', 'products.max_price', 'products.isNegotiable')
            ->join('products', 'photos.id', '=', 'products.id')
            ->where('isActive', '=', 1)
            ->where('user_id', '!=', $user->id)
            ->get();
        $viewData = collect($query)->unique('product_id');
        return view('user.index')->with("viewData", $viewData);
    }


    public function create()
    {
        $user = auth()->user();
        $query = Photo::select('*')
            ->join('products', 'photos.id', '=', 'products.id')
            ->where('status', '=', '1')
            ->where('products.user_id', '=', $user->id)
            ->get();
        $draftNumber = collect($query)->where('isActive','=','0')->count('isActive');
        $activeNumber = collect($query)->where('isActive','=','1')->sum('isActive');
        $viewData = collect($query)->unique('product_id');
        return view('user.product')
        ->with("viewData", $viewData)
        ->with("draftNumber", $draftNumber)
        ->with("activeNumber", $activeNumber);
    }

    public function editPassword()
    {
        $viewData = User::select('password')->where('email', '=', Auth::user()->email)->get();
        return view('user.update_password')->with("viewData", $viewData);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Senha atual inválida!");
        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("error", "Senha alterada!");
    }



    public function edit()
    {
        $user_email = Auth::user()->email;
        $viewData = User::select('name', 'email', 'password',  'whatsapp', 'twitter', 'phone', 'user_address', 'user_cep', 'cpf', 'facebook', 'instagram', 'avatar')->where('email', '=', $user_email)->get();
        return view('user.update')->with("viewData", $viewData);
    }


    public function update(Request $request)
    {
        if (Auth::guard('web')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            $user = User::select('*')->where('email', '=', $request->email)->first();
            $user->name = $request->name;
            $user->cpf = $request->cpf;
            $user->phone = $request->phone;
            $user->user_address = $request->user_address;
            $user->user_cep = $request->user_cep;
            $user->facebook = $request->facebook;
            $user->instagram = $request->instagram;
            $user->whatsapp = $request->whatsapp;
            $user->twitter = $request->twitter;
            $user->save();
            return redirect()->back()->with('error', 'Dados atualizados com sucesso');
        } else {
            return redirect()->back()->with('error', 'Senha inválida');
        }
    }
    public function detalhes($id)
    {
        $viewData = Photo::select('*')
            ->join('products', 'photos.id', '=', 'products.id')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->where('products.id', '=', $id)->get();
        return view('user.detalhes')->with("viewData", $viewData);
    }
}
