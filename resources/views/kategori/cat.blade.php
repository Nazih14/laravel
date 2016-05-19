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
                                    <img class="slide-image" src="{{URL::asset('/image/dulux/dulux.png')}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{URL::asset('/image/catylac/catylac.png')}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{URL::asset('/image/nippon/nippon.png')}}" alt="">
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
      <a href="{{ url('/dulux') }}">
      <img src="{{URL::asset('/image/dulux/image01.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Dulux</p>
    </div>
</td>
<td>
    <div class="col-sm-10">
      <a href="{{ url('/catylac') }}"> 
      <img src="{{URL::asset('/image/catylac/image03.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Catylac</p>    
    </div>
</td>
<td>
    <div class="col-sm-10">
      <a href="{{ url('/nippon') }}">
      <img src="{{URL::asset('/image/nippon/image03.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Nippon Paint</p>
    </div>
</td>
</tr>
<tr>
<td>
    <div class="col-sm-10">
      <a href="{{ url('/metrolite') }}"> 
      <img src="{{URL::asset('/image/metrolite/image03.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Metrolite</p>    
    </div>
</td>
<td>
    <div class="col-sm-10"> 
      <a href="{{ url('/danacryl') }}">
      <img src="{{URL::asset('/image/danacryl/image02.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Danacryl</p>    
    </div>
</td>
<td>
    <div class="col-sm-10">
      <a href="{{ url('/property') }}"> 
      <img src="{{URL::asset('/image/property/image02.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Property</p>    
    </div>
</td></tr>
</table>
</div> 
@endsection 