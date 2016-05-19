@extends('layouts.master')

@section('content')
    <h1>Daftar barang <a href="{{ url('post/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Barang</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID Barang</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Tgl Update</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($post as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('post', $item->id) }}">{{ $item->title }}</a></td>
                    <td>{{ $item->body }}</td>
                    <td><br></td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ url('post/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['post', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $post->render() !!} </div>
    </div>

@endsection
