@extends('main')

@section('content')
<h1>Edit {{ $product->name }}</h1>

<form method="post" action="/products/{{ $product->id }}">
  @method('PUT')
  @include('products._form')
</form>
@endsection
