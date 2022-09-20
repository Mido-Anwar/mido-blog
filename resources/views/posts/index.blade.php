@extends('posts.layout')

@section('content')
    <div class="container">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create</a>
        <a href="{{ route('trash') }}" class="btn btn-danger">Trash</a>

    </div>
    <div class="container">
        <h1>Posts</h1>
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
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr>

                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->content }} </td>
                        <td> <img src="{{ $item->image }}" alt=""> </td>

                        <td>

                            <div class="form-group ">

                                <a href="{{route('posts.show',$item->slug)}}"class="btn btn-success">Show</a>

                                <a href="{{route('posts.edit',$item->id)}}"class="btn btn-primary">
                                    Edit</a>

                                <a href=""class="btn btn-warning">
                                    soft delete</a>
                                {{-- <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form> --}}

                            </div>
                        </td>




                </tr>
  @endforeach
            </tbody>
        </table>

        <div id="app">


            <example-component> </example-component>


        </div>
    </div>
@endsection
