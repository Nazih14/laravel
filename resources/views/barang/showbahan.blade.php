<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Daftar Produk</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><a href="{{ URL::to('crud/create') }}" class="btn btn-primary" role="button">Tambah Produk Baru</a></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Diskon</th>
                                        <th>Gambar</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kategori as $value)
                                    <tr>
                                        <td>{{{ $value->id_barang }}}</td>
                                        <td>{{{ $value->nama_barang }}}</td>
                                        <td>{{{ $value->kategori }}}</td>
                                        <td>{{{ $value->stok }}}</td>
                                        <td>{{{ $value->harga }}}</td>
                                        <td>{{{ $value->diskon }}}</td>
                                        <td>{{{ $value->Gambar }}}</td>
                                        <td>
                                            <div class="btn-group">
                        <a href="{{ URL::to('crud/edit/'.$value->id_barang) }}" class="btn btn-primary">Ubah</a>
                        <a href="{{ URL::to('crud/destroy/'.$value->id_barang) }}" class="btn btn-primary">Hapus</a>
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            {{$categories->links()}}
 
    </div>
</div>
@stop