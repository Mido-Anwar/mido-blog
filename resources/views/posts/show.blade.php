@extends('products.layout')



@section('content')
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">{{ $posts->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $posts->content }}</h6>

            <img src="{{ URL::asset($posts->image) }}" alt="" style="width: 200px;height:200px; " >
        </div>
    </div>
@endsection
