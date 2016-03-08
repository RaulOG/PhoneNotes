@extends('layouts.app')

@section('title', 'Home Page')
@section('body-background-img', URL::asset('img/home.png'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">This is Raul phone call app!</div>

                <div class="panel-body">
                    Please, register or log in
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
