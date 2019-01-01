@extends('layouts.app')

@section('content')
    <div class="container-fluid  text-center">
        <img class="img-square" width="50%" src="https://cdn.shopify.com/s/files/1/0124/0042/7108/products/mockup-3d829ee8_1024x1024@2x.jpg?v=1545758844" alt="...">
        <div class="col-12">
            <form action="/charge" method="post">
                @csrf
                <input type="submit" value="Buy $10" class="btn btn-primary btn-lg btn-block">
            </form>
        </div>
    </div>

@endsection