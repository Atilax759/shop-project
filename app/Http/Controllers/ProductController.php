<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(16);
        return view('products.index',compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(ProductRequest $request)
    {
        $uploadFile=$request->file('photo');

        $filename=time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            'public/photos',$uploadFile,$filename
        );
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->photo = $filename;
        $product->save();
        return redirect('/admin/products');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }


    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        if ($request->hasFile('photo'))
        {
            $uploadFile=$request->file('photo');

            $filename=time().$uploadFile->getClientOriginalName();
            Storage::disk('local')->putFileAs(
                'public/photos',$uploadFile,$filename
            );
            $product->photo = $filename;
        }

        $product->save();
        return redirect('/admin/products');
    }


    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect('/admin/products');
    }

    public function view()
    {
        $products = Product::paginate(16);
        return view('welcome',compact('products'));
    }

    public function about()
    {
        return view('about');
    }
}

