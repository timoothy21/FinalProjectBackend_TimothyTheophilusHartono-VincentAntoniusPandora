<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    protected $fillable = ['id', 'category_barang', 'nama_barang', 'harga_barang', 'jumlah_barang', ];
    
    protected $hidden = ['created_at', 'updated_at'];
}
