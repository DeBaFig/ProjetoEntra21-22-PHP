<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Photo;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create()
    {
        return view('products.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $product = Product::create($request->all());
        Photo::create([
            'product_id' => $product->id,
            'photo_url' => $request->photo_url
        ]);
        return redirect()->back();
    }


    public function edit($id)
    {
        $viewData = Product::select('*')->where('id',$id)->get();
        $photoData = Photo::select('*')->where('product_id',$id)->get();
        return view('products.edit')->with('viewData', $viewData)->with('photoData', $photoData);
    }


    public function update(Request $request, $id)
    {
        $product = Product::select('*')->where('id', $id)->first();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->address = $request->address;
        $product->reference_link = $request->reference_link;
        $product->min_price = $request->min_price;
        $product->max_price = $request->max_price;
        $product->quantity = $request->quantity;
        $product->isNew = $request->isNew;
        $product->isNegotiable = $request->isNegotiable;
        $product->isActive = $request->isActive;
        $product->save();
        $photos = Photo::where('product_id', $id)->first();
        $photos->photo_url = $request->photo_url;
        $photos->save();
        return redirect()->route('user.detalhes' , ['id' => $id]);
    }

    public function destroy(Product $product)
    {


    }

    public function detalhes($id)
    {
        $viewData = Photo::select('products.id', 'users.id','users.email', 'users.facebook','users.instagram','users.twitter','users.whatsapp', 'products.title', 'photos.photo_image' ,'photos.photo_url' ,'products.isNew' , 'products.min_price','products.max_price', 'products.isNegotiable', 'products.description', 'products.address')
            ->join('products', 'photos.id', '=', 'products.id')
            ->join('users', 'products.user_id', '=', 'users.id')
            ->where('products.id', '=', $id)->get();
        return view('home.detalhes')->with("viewData", $viewData);
        
    }
  
}
