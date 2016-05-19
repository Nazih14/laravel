<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class MaterialController extends Controller
{
    public function __construct(bahan_bangunan $bahan_bangunan)
    {
        $this->bahan_bangunan = $bahan_bangunan;
    }
    
    public function index()
    {
    	$bahan_bangunan = DB::table('bahan_bangunan')-> get();
    	return view('bahan_bangunan.index', ['bahan_bangunan'=>$bahan_bangunan]);
    		
    }

    public function create()
    {
    	//
    }

    public function store()
    {
    	//
    }
    public function show($id)
    {
    	//
    }
    public function edit($id)
    {
    	//
    }
    public function update($id)
    {
    	//
    }
    public function destroy($id)
    {
    	//
    }
}
