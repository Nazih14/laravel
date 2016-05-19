@extends('layouts.master')

@section('content')

@include('kategori.menu-kategori')
<div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <br>

  <div class="row">
    <div class="col-sm-4">
      <a href="{{ url('/kategori/gentengkodok') }}">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Genteng Kodok</p>
    </div>
    <div class="col-sm-4">
      <a href="{{ url('/kategori/gentengmagas') }}"> 
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Genteng Magas</p>    
    </div>
    <div class="col-sm-4">
      <a href="{{ url('/kategori/gentengplentongbulat') }}">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Genteng Plentong Bulat</p>
    </div>
    <div class="col-sm-4">
      <a href="{{ url('/kategori/batako') }}"> 
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Batako</p>    
    </div>
    <div class="col-sm-4"> 
      <a href="{{ url('/kategori/batamerah') }}">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Bata Merah</p>    
    </div>
    <div class="col-sm-4">
      <a href="{{ url('/kategori/merahoven') }}"> 
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Bata Merah Oven</p>    
    </div> 
    <div class="col-sm-4"> 
      <a href="{{ url('/kategori/batuadesit') }}">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Batu Adesit</p>    
    </div>
    <div class="col-sm-4">
      <a href="{{ url('/kategori/batucandi') }}"> 
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Batu Candi</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 9</p>    
    </div>   
  </div>
</div><br>
@endsection