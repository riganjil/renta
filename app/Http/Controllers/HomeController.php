<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::getProduct();
        $category = Category::getCategory();
        return view('welcome', compact('product', 'category'));
    }
}
