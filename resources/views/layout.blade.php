<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Al ventures | @yield('title', '')</title>

        <link href="/img/favicon.ico" rel="SHORTCUT ICON" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link href="/{{ URL::asset('css/default.css') }}" rel="stylesheet">
        <link href="/{{ URL::asset('css/default.date.css') }}" rel="stylesheet">

        <!-- Calendar -->
        

        @yield('extra-css')
    </head>


<body class="@yield('body-class', '')">
    @include('partials.nav')

    @yield('content')

    @include('partials.footer')

    @yield('extra-js')
    <script src="/{{ URL::asset('js/jquery.1.7.0.js') }}"></script>
<script src="/{{ URL::asset('js/legacy.js') }}"></script>
<script src="/{{ URL::asset('js/picker.date.js') }}"></script>
<script src="/{{ URL::asset('js/picker.js') }}"></script>


<script>
     $( document ).ready(function() {
    var $input = $( '.datepicker' ).pickadate({
            formatSubmit: 'yyyy-mm-dd',
             hiddenName: true,
            // min: [2015, 7, 14],
            container: '#container',
            // editable: true,
            closeOnSelect: true,
            closeOnClear: false,
        })
        var picker = $input.pickadate('picker')
    });
  </script>
</body>
</html>
