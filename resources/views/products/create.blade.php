@extends('main')

@section('content')
<h1>Add Product</h1>

@if ($errors->any())
  <ul class="alert alert-danger">
  @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif
<form method="post" action="/products">
  @include('products._form')
</form>
@endsection
