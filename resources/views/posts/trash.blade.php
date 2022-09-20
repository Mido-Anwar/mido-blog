@extends('products.layout')

@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-primary">Home</a>
    </div>
    <div class="container">
        <h1>Trash</h1>
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

                            <div class="form-group flex">

                                <a href="{{ route('restore', $product->id) }}" class="btn btn-success">Restore
                                </a>


                                <a href="{{ route('harddelete', $product->id) }}" class="btn btn-danger">
                                    DELETE
                                </a>

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
