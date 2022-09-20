@extends('products.layout')

@section('content')
    <div class="container">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Home</a>
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
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td> {{ $post->content }}</td>
                        <td></td>

                        <td>

                            <div class="form-group flex">

                                <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-success">Restore
                                </a>


                                <a href="{{ route('posts.harddelete', $post->id) }}" class="btn btn-danger">
                                    DELETE
                                </a>

                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
   {{--  {!! $products->links() !!} --}}
        <div id="app">


            <example-component> </example-component>


        </div>
    </div>
@endsection
