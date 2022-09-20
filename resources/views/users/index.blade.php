@extends('layouts.app')


@section('content')
    @php
        $genderarray = ['male', 'female'];
    @endphp
    <div class="container">

        @if (count($errors) > 0)
        @foreach ($errors->all() as $item)
        <div class="alert alert-danger" role="alert">
         {{$item}}
          </div>
        @endforeach

        @endif
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1"> Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                    value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> Address</label>
                <input type="text" name="province" class="form-control" id="exampleFormControlInput1"
                    value="{{ $user->profile->province }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="text" name="facebook" class="form-control" id="exampleFormControlInput1"
                    value=" {{$user->email}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Gander select</label>
                <select class="form-control" id="exampleFormControlSelect1" name="gander">
                    @foreach ($genderarray as $item)
                        <option value="{{ $item }}"{{($user->profile->gander == $item) ? 'selected':''}} >{{ $item }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Bio textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bio">
                    {!! $user->profile->bio !!}
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">password </label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> confirm password</label>
                <input type="password" name="c_password" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group"  style="margin: 15px;">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" style="margin: 15px;">
            {{ $message }}
        </div>
    @endif
    </div>
@endsection
