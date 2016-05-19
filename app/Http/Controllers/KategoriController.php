<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KategoriController extends Controller

{
	public function showGenteng(){
		return view('kategori.genteng');		
	}
    public function showBata(){
		return view('kategori.bata');		
	}
	public function showCat(){
		return view('kategori.cat');		
	}
	public function showLantai(){
		return view('kategori.lantai');		
	}
	public function showSemen(){
		return view('kategori.semen');		
	}
	public function showKayu(){
		return view('kategori.kayu');		
	}
	public function showBesi(){
		return view('kategori.besi');		
	}
	public function showPerkakas(){
		return view('kategori.perkakas');		
	}
	public function gentengKodok(){
		return view('kategori.genteng-kodok');		
	}
	public function gentengMagas(){
		return view('kategori.genteng-magas');		
	}
	public function gentengPlentongbulat(){
		return view('kategori.genteng-plentongbulat');		
	}
	public function gentengPlentongpapak(){
		return view('kategori.genteng-plentongpapak');		
	}
	public function gentengMorando(){
		return view('kategori.genteng-morando');		
	}
	public function gentengMorandoglazur(){
		return view('kategori.genteng-morandoglazur');		
	}
	public function batako(){
		return view('kategori.batako');		
	}
	public function bataMerah(){
		return view('kategori.batamerah');		
	}
	public function merahOven(){
		return view('kategori.merahoven');		
	}
	public function batuAdesit(){
		return view('kategori.batuadesit');		
	}
	public function batuCandi(){
		return view('kategori.batucandi');		
	}
	public function batuKali(){
		return view('kategori.batukali');		
	}
	public function dulux(){
		return view('kategori.dulux');		
	}
	public function catylac(){
		return view('kategori.catylac');		
	}
	public function nippon(){
		return view('kategori.nippon');		
	}
	public function metrolite(){
		return view('kategori.metrolite');		
	}
	public function danacryl(){
		return view('kategori.danacryl');		
	}
	public function property(){
		return view('kategori.property');		
	}

}
