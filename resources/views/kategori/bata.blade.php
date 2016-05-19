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
                                    <img class="slide-image" src="{{URL::asset('/image/batako/batako.png')}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{URL::asset('/image/bata_merah/bata_merah.png')}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{URL::asset('/image/batu_kali/batu_kali.png')}}" alt="">
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
  <div class="row">
    <div class="col-sm-10">
      <a href="{{ url('/batukali') }}">
      <img src="{{URL::asset('/image/batu_kali/image02.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Batu Kali</p>
    </div>
  </td>
  <td>
    <div class="col-sm-10">
      <a href="{{ url('/batako') }}"> 
      <img src="{{URL::asset('/image/batako/image01.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Batako</p>    
    </div>
  </td>
  <td>
    <div class="col-sm-10"> 
      <a href="{{ url('/batamerah') }}">
      <img src="{{URL::asset('/image/bata_merah/image02.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Bata Merah</p>    
    </div>
  </td>
  <td>
  </tr>
  <tr>
  <td>
    <div class="col-sm-10">
      <a href="{{ url('/merahoven') }}"> 
      <img src="{{URL::asset('/image/merahoven/image01.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Bata Merah Oven</p>    
    </div>
  </td>
  <td>
    <div class="col-sm-10"> 
      <a href="{{ url('/batuadesit') }}">
      <img src="{{URL::asset('/image/batu_adesit/image02.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Batu Adesit</p>    
    </div>
  </td>
  <td>
    <div class="col-sm-10">
      <a href="{{ url('/batucandi') }}"> 
      <img src="{{URL::asset('/image/batu_candi/image02.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Batu Candi</p>    
    </div>
  </div>
</td>
</tr>
</table>

</div>

@endsection