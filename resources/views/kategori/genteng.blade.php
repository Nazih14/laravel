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
                                    <img class="slide-image" src="{{URL::asset('/image/genteng_morando_glazur/genteng_morando_glazur01.jpg')}}" width="800" height="300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{URL::asset('/image/genteng_kodok/genteng_kodok04.jpg')}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{URL::asset('/image/genteng_morando/genteng_morando05.jpg')}}" alt="">
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


<table>
  <tr>
  <td>
    <div class="col-sm-10">
      <a href="{{ url('/gentengkodok') }}">
      <img src="{{URL::asset('/image/genteng_kodok/genteng_kodok01.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Genteng Kodok</p>
    </div>
  </td>
  <td>
    <div class="col-sm-10">
      <a href="{{ url('/gentengmagas') }}"> 
      <img src="{{URL::asset('/image/genteng_magas/genteng_magas02.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Genteng Magas</p>    
    </div>
  </td>
  <td>

    <div class="col-sm-10">
      <a href="{{ url('/gentengplentongbulat') }}">
      <img src="{{URL::asset('/image/genteng_plentong_bulat/genteng_plentong_bulat03.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Genteng Plentong Bulat</p>
    </div>
  </td>
  </tr>
  <tr>
  <td>
    <div class="col-sm-10"> 
      <a href="{{ url('/gentengmorando') }}">
      <img src="{{URL::asset('/image/genteng_morando/genteng_morando03.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Genteng Morando</p>    
    </div>
  </td>
  <td>
    <div class="col-sm-10">
      <a href="{{ url('/gentengmorandoglazur') }}"> 
      <img src="{{URL::asset('/image/genteng_morando_glazur/genteng_morando_glazur03.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Genteng Morando Glazur</p>    
    </div>
  </td>
  <td>
    <div class="col-sm-10">
      <a href="{{ url('/gentengplentongpapak') }}"> 
      <img src="{{URL::asset('/image/genteng_plentong_papak/genteng_plentong_papak01.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Genteng Plentong Papak</p>    
    </div>
  </td>
  </tr>
</table>
</div> 
@endsection