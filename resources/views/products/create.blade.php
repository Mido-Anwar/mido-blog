@extends('products.layout')


@section('content')

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Product Name</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Product Name" name="product_name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Price</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="Price" name="price">
      </div>
    </div>
    <div class="form-group col-md-6" >
      <label for="inputAddress">detailes</label>
      <textarea type="" class="form-control" id="inputAddress" placeholder="" name="product_info">
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>




@endsection
