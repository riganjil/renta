<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::getProduct();
        return view('pages.product.index', compact('data'));
    }

    public function detail($id)
    {
        $data = Product::getProductDetail($id);
        return view('pages.product.detail', compact('data'));
    }

    public function list_category($id)
    {
        $kode_kategori = Category::where('nama_kategori_seo', $id)->first()->kode_kategori;
        $data = Product::getProductByCategory($kode_kategori);
        return view('pages.product_category', compact('data'));
    }
}
