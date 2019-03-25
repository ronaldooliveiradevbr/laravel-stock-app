@extends('main')

@section('content')
<h1>Edit {{ $product->name }}</h1>

<form method="post" action="/products/{{ $product->id }}">
  @method('PUT')
  @csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" class="form-control">{{ $product->description }}</textarea>
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" name="price" class="form-control" value="{{ $product->price }}">
  </div>
  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}">
  </div>
  <div class="form-group">
    <label for="size">Size:</label>
    <input type="text" name="size" class="form-control" value="{{ $product->size }}">
  </div>
    
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
@endsection
