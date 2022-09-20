@extends('posts.layout')


@section('content')
    <div class="container">
        <form action="{{ route('posts.store') }}" method="POST" style="margin: 20px;"  enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Post
                        title
                    </label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="title" name="title">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="formFile" class="form-label">images upload</label>
                    <input class="form-control" type="file" id="formFile" enctype="multipart/form-data" name="image">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">detailes</label>
                    <textarea type="" class="form-control" id="inputAddress" placeholder="" name="content" cols="5">
        </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
