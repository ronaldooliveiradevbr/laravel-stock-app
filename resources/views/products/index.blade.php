@extends('main')

@section('content')
<h1>Products in stock</h1>

<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($products as $product)
    <tr class="{{ $product->quantity <= 1 ? 'alert-danger': '' }}">
      <td>{{ $product->name }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->quantity }}</td>
      <td>
        <a href="/{{ $product->id }}">
          <span class="glyphicon glyphicon-search" aria-hidden="true">show</span>
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection

