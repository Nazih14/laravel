<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = 'barang';

    protected $fillable = ['kodekategori', 'nama_barang', 'harga', 'stok', 'diskon'];

    //function category (){
    //	return $this->hasMany('App/Kategori', 'kodekategori');
    //}
}
