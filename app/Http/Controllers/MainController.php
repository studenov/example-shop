<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function categories() {
        return view('categories');
    }

    public function product($product) {
        return view('product', ['product' => $product]);
    }

    public function category($category) {
        dd($category);
    }

}
