@extends('main')

@section('content')
<h1>{{ $product->name }}</h1>
<br>
<ul>
  <li>
    <strong>Description: </strong>{{ $product->description }}
  </li>
  <li>
    <strong>Price: </strong>$ {{ $product->price }}
  </li>
  <li>
    <strong>Quantity in stock: </strong>{{ $product->quantity }}
  </li>
</ul>
@stop

