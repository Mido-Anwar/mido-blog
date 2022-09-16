@extends('products.layout')



@section('content')

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $product->product_name }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $product->price }}</h6>
      <p class="card-text">{{ $product->product_info }}</p>

    </div>
  </div>
  @endsection
