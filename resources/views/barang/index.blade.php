@extends('layouts.master')

@section('content')
<h3>Daftar Barang <a href="{{ url('barang/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Barang</a></h3>
<div class="table">
    <table class="table table-bordered table-striped table-hover">
    	<thead>
    	<th>No</th>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Diskon</th>
		<th>Data Update</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		{{-- */$x=0;/* --}}
		@foreach ($barang as $data)
 		{{-- */$x++;/* --}}
		<tr>
			<td>{{ $x }}</td>
			<td><a href="{{ url('barang/'. $data->id . '/edit') }}">{{ $data->kodekategori }}</a></td>
			<td>{{ $data->nama_barang}}</td>
			<td>{{ $data->harga}}</td>
			<td>{{ $data->stok}}</td>
			<td>{{ $data->diskon}}</td>
			<td>{{ $data->updated_at }}</td>				
			<td>
				<a href="{{ url('barang/' . $data->id . '/edit') }}">
                <button type="submit" class="btn btn-primary btn-xs">Update</button></a> 
                {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['barang', $data->id],
                            'style' => 'display:inline'
                ]) !!}
                {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
            </td>
			</tr>
		</tbody>
		@endforeach
	</table>
 
 
@stop