<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'Kategori';

    protected $fillable = ['nama_kategori', 'profit_margin'];

    function category (){
    	return $this->belongsTo('App/Kategori', 'kodekategori');
    }
}
