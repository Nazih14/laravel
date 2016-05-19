@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Saya {{ Auth::user()->name }} 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
