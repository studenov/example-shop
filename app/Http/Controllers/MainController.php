<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFilterRequest;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function index(ProductsFilterRequest $request) {
        $productsQuery = Product::with('category');
        if ($request->filled('price_from')) {
            $productsQuery->priceFrom($request->price_from);
        }
        if ($request->filled('price_to')) {
            $productsQuery->priceTo($request->price_to);
        }
        foreach (['hit', 'new', 'recommend'] as $field) {
            if ($request->has($field)) {
                $productsQuery->$field();
            }
        }

        $products = $productsQuery->paginate(6);
        return view('index', compact('products'));
    }

    public function categories() {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code) {
        $category = Category::code($code)->firstOrFail();
        return view('category', compact('category'));
    }

    public function product($category, $code) {
        $product = Product::withTrashed()->code($code)->firstOrFail();
        return view('product', compact('product'));
    }

}
