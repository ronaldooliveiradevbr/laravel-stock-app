@extends('main')

@section('content')
<h1>Add Product</h1>

<form method="post" action="/products">
  @include('products._form')
</form>
@endsection
