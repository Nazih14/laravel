@extends('layouts.master')

@section('content')
	<h1>Tambah Data</h1>
	<hr>
 
	{!! Form::open(['url' => 'barang', 'class' => 'form-horizontal']) !!}
			{!! Form::label('kodekategori','Kode kategori :') !!}
			{!! Form::text('kodekategori',null, ['class' => 'form-control']) !!}

			{!! Form::label('nama_barang','Nama Barang :') !!}
			{!! Form::text('nama_barang',null, ['class' => 'form-control']) !!}

			{!! Form::label('harga','Harga :') !!}
			{!! Form::text('harga',null, ['class' => 'form-control']) !!}

			{!! Form::label('stok','Stok :') !!}
			{!! Form::text('stok',null, ['class' => 'form-control']) !!}
			
			{!! Form::label('diskon','Diskon :') !!}
			{!! Form::text('diskon',null, ['class' => 'form-control']) !!}
							
		<div class="form-group">
        <div class="col-sm-3">
           	{!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    		
			{!! Form::close() !!}				
		</div>


	
@stop