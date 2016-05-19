@extends('layouts.master')

@section('content')
	<h1>Edit Data <small>{{ $barang->kodebarang }}</small></h1>
	<hr>
 
{!! Form::model($barang, ['method' => 'PATCH', 'action' => ['BarangController@update', $barang->id]]) !!}
    <div class="form-group">
        {!! Form::label('kodekategori', 'kode kategori :') !!}
        {!! Form::text('kodekategori', null, array('class' => 'form-control')) !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('nama_barang', 'nama barang :') !!}
        {!! Form::text('nama_barang', null, array('class' => 'form-control')) !!}
    </div>
 
    {!! Form::submit('Edit data', array('class' => 'btn btn-primary')) !!}
 
{!! Form::close() !!}
 
@stop