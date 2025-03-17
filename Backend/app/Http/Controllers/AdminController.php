<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class AdminController extends Controller{
    public function dashboard(){
        $products = Product::all();

        return view('admin.dashboard', compact('products'));
    }
}