<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all(); 
        return view('products.index', ['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $req){
        //   dd($req);
            $data = $req->validate([
               'name'=> 'required',
               'qty' => 'required',
               'price' => 'required',
               'description' => 'required',
           ]);
           $newProduct = Product::create($data);
          return redirect(route('products.index'));
       } 
    public function edit(Product $product){
        //dd($product);
         return view('products.edit',['product' => $product]);
    }

    public function update(Product $product, Request $request){
    //dd($product);
        $data = $request->validate([
            'name'=> 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $product->update($data);
        return redirect(route('products.index'))->with('success', 'Product  updated successfully!');
    }
    
    public function destroy(Product $product){
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product  Delete successfully!'); 
    }
}
