@extends('main')

@section('content')
<h1>Products in stock</h1>

@if (Session::has('message'))
  <div class="alert alert-success">
    {{ Session::get('message') }}
  </div>    
@endif

<div class="row">
  <div class="col-md-12">
    <a href="/products/create" class="btn btn-primary">Add product</a>
  </div>
</div>
<br>

<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
	<tr>
	  <th>Name</th>
	  <th>Price</th>
	  <th>Quantity</th>
	  <th>Size</th>
	  <th>Actions</th>
	</tr>
      </thead>
      <tbody>
      @foreach ($products as $product)
        <tr class="{{ $product->quantity <= 1 ? 'alert-danger': '' }}">
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->quantity }}</td>
          <td>{{ $product->size }}</td>
          <td>
	    <form method="post" action="/products/{{ $product->id }}" class="form-inline">
              @csrf
              @method('DELETE')
              <a href="/products/{{ $product->id }}" class="btn btn-link">show</a>
              <a href="/products/{{ $product->id }}/edit" class="btn btn-link">edit</a>
              <button type="submit" class="btn btn-link">delete</button>
            </form>
          </td>
	</tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

