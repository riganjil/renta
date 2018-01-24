<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produk';

    public function scopeSelectMain($query)
    {
        return $query->selectRaw('produk.kode_produk, nama_produk, nama_produk_seo, deskripsi, gambar');
    }

    public function scopeJoinGambar($query)
    {
        return $query->join('produk_gambar', 'produk_gambar.kode_produk', '=', 'produk.kode_produk');
    }

    public function scopeJoinCategory($query)
    {
        $query->JoinGambar()->join('produk_kategori', 'produk_kategori.kode_kategori', '=', 'produk.kode_kategori');
    }

    public static function getProduct()
    {
        return self::SelectMain()
            ->JoinGambar()
            ->where('is_available', 'Y')
            ->groupBy('produk.kode_produk')
            ->get();
    }


    public static function getProductDetail($id)
    {
        return self::SelectMain()
            ->JoinGambar()
            ->where('is_available', 'Y')
            ->where('nama_produk_seo', $id)
            ->groupBy('produk.kode_produk')
            ->first();
    }


    public static function getProductByCategory($id)
    {
        return self::SelectMain()
            ->JoinCategory()
            ->where('is_available', 'Y')
            ->where('produk_kategori.kode_kategori', $id)
            ->groupBy('produk.kode_produk')
            ->get();
    }
}
