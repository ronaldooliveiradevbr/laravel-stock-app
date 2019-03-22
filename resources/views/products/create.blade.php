@extends('main')

@section('content')
<form method="post" action="/products">
  @csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" name="price" class="form-control">
  </div>
  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="text" name="quantity" class="form-control">
  </div>
  <div class="form-group">
    <label for="size">Size:</label>
    <input type="text" name="size" class="form-control">
  </div>
    
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
@endsection
