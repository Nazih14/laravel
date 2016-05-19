<html>
<head>
    <title>Bahan Bangunan</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('bahan_bangunan') }}">Bahan Bangunan</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('bahan_bangunan') }}">View All Bahan Bangunan</a></li>
        <li><a href="{{ URL::to('bahan_bangunan/create') }}">Create a bahan_bangunan</a>
    </ul>
</nav>

<h1>Create Bahan Bangunan</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'bahan_bangunan')) }}

    <div class="form-group">
        {{ Form::label('nama_barang', 'Nama Barang') }}
        {{ Form::text('nama_barang', Input::old('nama_barang'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('kategori', 'Kategori') }}
        {{ Form::text('kategori', Input::old('kategori'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('stok', 'Stok') }}
        {{ Form::text('stok', Input::old('stok'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('harga', 'Harga') }}
        {{ Form::text('harga', Input::old('harga'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('diskon', 'Diskon') }}
        {{ Form::text('diskon', Input::old('diskon'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('gambar', 'Gambar') }}
        {{ Form::text('gambar', Input::old('gambar'), array('class' => 'form-control')) }}
    </div>
    <!--
    <div class="form-group">
        {{ Form::label('nerd_level', 'Nerd Level') }}
        {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) }}
    </div>-->

    {{ Form::submit('Create Bahan Bangunan', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>