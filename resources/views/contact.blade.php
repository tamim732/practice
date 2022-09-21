@extends('master')

@section('content')
    {{-- <h1>contact page</h1> --}}

        <h1>{{ $page_name }}</h1>

        {{-- <p>{{ $mobile }}</p> --}}

    @if($product_quantity <=10 )
    <p> Your product quantity under 10</p>

@else
<p>product quantity: {{$product_quantity}}</p>

    @endif

@switch($color)
    @case("red")
        <p>red color is available</p>
        @break
    @case("blue")
        <p>Blue color is available</p>
        @break
    @case("green")
        <p>green color is available</p>
        @break
    @case("yellow")
        <p>yellow color is available</p>
        @break
    @default
        <p>stock out</p>
@endswitch

@empty($product)
    <p>No product here</p>
@endempty


@foreach ($products as $key => $product)
@include('partial.product')
{{-- <ul>
    <li>{{$key}}</li>
    <li>{{$product['name']}}</li>
    <li>{{$product['color']}}</li>
    <li>{{$product['price']}}</li>
</ul> --}}

@endforeach

@endsection
