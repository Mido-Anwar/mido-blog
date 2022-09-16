@extends('products.layout')

@section('content')
    <div class="container">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
        <a href="{{ route('trash') }}" class="btn btn-danger">Trash</a>

    </div>
    <div class="container">
        <h1>Product</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                {{ $message }}
            </div>
        @endif
    </div>

    <div class="table-responsive">
        <table class="table">


            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Prodect Price</th>
                    <th scope="col">Prodect info</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->product_name }}</td>
                        <td> {{ $product->price }}</td>
                        <td>{{ $product->product_info }}</td>

                        <td>

                            <div class="form-group ">

                                <a
                                    href="{{ route('products.show', $product->id) }}"class="btn btn-success">Show</a>

                                <a href="{{ route('products.edit', $product->id) }}"class="btn btn-primary">
                                    Edit</a>

                                    <a href="{{ route('softdelete', $product->id) }}"class="btn btn-warning">
                                        soft delete</a>
                              {{--  <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>--}}

                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $products->links() !!}
        <div id="app">


            <example-component> </example-component>


        </div>
    </div>
@endsection
