<!DOCTYPE html>
<html>
    <head>
        <title>Toko Bangunan</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/starter-template.css')}}" >
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Inventory Management</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>
                            Daftar Barang Material bangunan
                            <a href="{{route('inventory.form')}}" class="pull-right"><button class="btn btn-primary">Tambah</button></a>
                        </h2>
                    </div>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th>ID.</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Gambar</th>
                            <th>Tgl. Input</th>
                            <th>Tgl. Update Data</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <tr>
				@foreach($inventories as $inventory => $value)
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->nama_barang }}</td>
                                <td>{{ $value->kategori }}</td>
                                <td>{{ $value->stok }}</td>
                                <td>{{ $value->harga }}</td>
                                <td>{{ $value->diskon }}</td>
                                <td>{{ $value->gambar }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>{{ $value->update_at }}</td>
                                <td>
                                    <a href="{{ URL::to('inventory/' . $value->id . '/edit') }}"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="{{ URL::to('inventory/' . $value->id . '/delete') }}"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container -->
        <script type="text/javascript" src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
@endforeach
    </body>
</html>
