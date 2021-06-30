<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function basket()
    {
        return view('basket');
    }

    public function order()
    {
        return view('order');
    }

    public function category($slug)
    {
        $category = Category::where("slug", $slug)->first();
        return view('category', compact("category"));
    }

    public function product($category, $product)
    {
        return view('product');
    }
}
