@extends('products.layout')



@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $posts->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $posts->content }}</h6>

            <img src="{{ $posts->image }}" alt="">
        </div>
    </div>
@endsection
