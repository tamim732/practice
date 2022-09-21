<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset("build/assets/app.c090eeea.css")}}">
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    {{-- @include('include.style') --}}

    <title>Hello, world!</title>
  </head>
  <body>

@include('include.navbar')
<div class="container">

    @if (session('status'))
    {{session('status')}}

    @endif
  @yield('content')
</div>

<script src="{{ asset('build/assets/app.aac2dc08.js')}}"></script>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
   {{-- @include('include.script') --}}
  </body>
</html>
