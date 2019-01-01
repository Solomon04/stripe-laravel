@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}} </h1>
        <p>This is a tutorial on how to use <b>Stripe</b> with <b>Laravel</b>. </p>
        <img class="img-square" width="50%" src="https://i0.wp.com/dotdev.co/wp-content/uploads/2017/05/laravel-leader.png?fit=1024%2C576&ssl=1">
        <p>
            <a class="btn btn-primary" href="/login" role="button"> Login </a>
            <a class="btn btn-success btn-lg" href="/register" rile="button"> Register </a>
        </p>
    </div>
@endsection