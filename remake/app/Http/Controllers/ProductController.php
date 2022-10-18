<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Photo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.add');
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
            'title' => 'required',
        ]);
        $product = Product::create($request->all());
        if ($request->images) {
            foreach ($request->images as $image) {
                $filename = $image->store('images');
                $image->move(public_path('images'), $filename);
                Photo::create([
                    'product_id' => $product->id,
                    'photo_image' => $filename
                ]);
            }
        }else{
            Photo::create([
                'product_id' => $product->id,
                'photo_image' => 'assets/logo/venha_vender.jpg'
            ]);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $product)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function detalhes($id)
    {
        $viewData = Photo::select('products.id', 'users.id','users.email', 'users.facebook','users.instagram','users.twitter','users.whatsapp', 'products.title', 'photos.photo_image' ,'products.isNew' , 'products.max_price', 'products.isNegotiable', 'products.description', 'products.address')
            ->join('products', 'photos.id', '=', 'products.id')
            ->join('users', 'products.user_id', '=', 'users.id')
            ->where('products.id', '=', $id)->get();
        return view('home.detalhes')->with("viewData", $viewData);
        
    }
  
}
