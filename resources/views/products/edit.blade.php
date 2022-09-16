@extends('products.layout')


@section('content')
<div class="container">
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
</div>
    <div class="container">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Product Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="{{ $product->product_name }}"
                        name="product_name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Price</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="{{ $product->price }}" name="price">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">detailes</label>
                <textarea type="" class="form-control" id="inputAddress" placeholder="" name="product_info">
                    {{ $product->product_info }}
        </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
