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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $query = Photo::select('products.title', 'product_id','products.publish_at', 'products.user_id', 'photos.photo_image', 'products.isNew', 'products.max_price', 'products.isNegotiable')
            ->join('products', 'photos.id', '=', 'products.id')
            ->where('isActive', '=', 1)
            ->where('user_id', '!=', $user->id)
            ->get();
        $viewData = collect($query)->unique('product_id');
        return view('user.index')->with("viewData", $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $query = Photo::select('products.title','isActive', 'photos.photo_image', 'photos.product_id','products.isNew', 'products.max_price', 'products.isNegotiable')
            ->join('products', 'photos.id', '=', 'products.id')
            ->where('isActive', '=', '1')
            ->where('products.user_id', '=', $user->id)
            ->get();
        $viewData = collect($query)->unique('product_id');
        if ($query->count() == 0) {
            return view('user.product')->with("error", 'Você ainda não tem nenhum anúncio, que tal comprar algo?')->with('viewData', $viewData);
        }
        return view('user.product')->with("viewData", $viewData);
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



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function edit()
    {
        $user_email = Auth::user()->email;
        $viewData = User::select('name', 'email', 'password',  'whatsapp','twitter','phone', 'address', 'cep', 'cpf', 'facebook', 'instagram')->where('email', '=', $user_email)->get();
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
            $user->name = $request->name;
            $user->cpf = $request->cpf;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->cep = $request->cep;
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
            ->join('products', 'photos.id', '=', 'products.id')->where('products.id', '=', $id)->get();
        return view('user.detalhes')->with("viewData", $viewData);
        
    }
}
