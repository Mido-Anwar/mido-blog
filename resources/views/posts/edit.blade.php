@extends('posts.layout')


@section('content')
    <div class="container">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="container">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Post Title</label>
                    <input type="text" class="form-control" id="inputEmail4" value="{{ $post->title }}"
                        name="title">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">image</label>

                    <input type="file" name="image" id="">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">detailes</label>
                <textarea type="" class="form-control" id="inputAddress" placeholder="" name="content">
                    {{ $post->content }}
        </textarea>
            </div>
            <img src="{{ $post->image }}" alt="" >

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
