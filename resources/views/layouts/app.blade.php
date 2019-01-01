<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ridin Heavy is a content aggregation site of Urban Car Culture and Music.">
    <meta name="keywords" content="Urban Cars, Worldstar, Cars, Ridin Heavy, Music Videos, ">
    <meta name="author" content="Solken Technologies LLC. ">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stripe  </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <style>
        body {
            font-family: "Helvetica Neue", Helvetica, sans-serif;
        }

        form {
            padding: 30px;
            height: 120px;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 600px;
        }

        label {
            font-weight: 500;
            font-size: 14px;
            display: block;
            margin-bottom: 8px;
        }

        #card-errors {
            height: 20px;
            padding: 4px 0;
            color: #fa755a;
        }

        .token {
            color: #32325d;
            font-family: 'Source Code Pro', monospace;
            font-weight: 500;
        }

        .wrapper {
            width: 90%;
            margin: 0 auto;
            height: 100%;
        }

        #stripe-token-handler {
            position: absolute;
            top: 0;
            left: 25%;
            right: 25%;
            padding: 20px 30px;
            border-radius: 0 0 4px 4px;
            box-sizing: border-box;
            box-shadow: 0 50px 100px rgba(50, 50, 93, 0.1),
            0 15px 35px rgba(50, 50, 93, 0.15),
            0 5px 15px rgba(0, 0, 0, 0.1);
            -webkit-transition: all 500ms ease-in-out;
            transition: all 500ms ease-in-out;
            transform: translateY(0);
            opacity: 1;
            background-color: white;
        }

        #stripe-token-handler.is-hidden {
            opacity: 0;
            transform: translateY(-80px);
        }

        .form-row {
            width: 70%;
            height: 100px;
            float: left;
        }

        #card-element {
            background-color: white;
            width: 400px;
            height: 20px;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .btn-Stripe {
            border: none;
            border-radius: 4px;
            outline: none;
            text-decoration: none;
            color: #fff;
            background: #32325d;
            white-space: nowrap;
            display: inline-block;
            height: 40px;
            line-height: 40px;
            padding: 0 14px;
            box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
            border-radius: 4px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.025em;
            text-decoration: none;
            -webkit-transition: all 150ms ease;
            transition: all 150ms ease;
            float: left;
            margin-left: 12px;
            margin-top: 28px;
        }

        .btn-Stripe:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 14px rgba(50, 50, 93, .10), 0 3px 6px rgba(0, 0, 0, .08);
            background-color: #43458b;
        }

        #card-element--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        #card-element--invalid {
            border-color: #fa755a;
        }

        #card-element--webkit-autofill {
            background-color: #fefde5 !important;
        }

    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="app">
    @include('inc.navbar')
    <div style="margin: 2%"></div>
    {{-- <main class="py-4"> --}}
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
    {{-- </main> --}}
    <div style="margin: 2%"></div>
    @include('inc.footer')
</div>
</body>
</html>
