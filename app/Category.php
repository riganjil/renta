<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'produk_kategori';

    public static function getCategory()
    {
        return self::get();
    }
}
