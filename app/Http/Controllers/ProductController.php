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
        return view('pages.product.index');
    }

    public function detail()
    {
        return view('pages.product.detail');
    }

    public function list_category($id)
    {
        $kode_kategori = Category::where('nama_kategori_seo', $id)->first()->kode_kategori;
        $data = Product::getProductByCategory($kode_kategori);
        return view('pages.product_category', compact('data'));
    }
}
