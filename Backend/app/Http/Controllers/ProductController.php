<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{
    public function index(){
        return Product::all();
    }

    public function store(Request $request){
        $images = [];

        if($request->hasfile('images')){
            foreach($request->file('images') as $image){
                $path = $image->store('product_images', 'public');

                $images[] = $path;
            }
        }

        $product= Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'images' => json_encode($images),
        ]);

        return response()->json($product);
    }

    public function show(Product $product){
        return response()->json($product);
    }

    public function update(Request $request, Product $product){
        $product->update($request->all());

        return response()->json($product);
    }

    public function destroy(Product $product){
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
