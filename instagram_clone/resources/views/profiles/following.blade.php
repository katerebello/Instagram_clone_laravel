@extends('layouts.app')


@section('content')
@foreach($followings as $following)
    <div class="container card mt-5 p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <a href="/profile/{{$following->user->id}}">
                    <img src="/storage/{{$following->image}}"  class="rounded-circle" width="80" height="80" alt="">
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="/profile/{{$following->user->id}}" class="text-decoration-none text-dark font-weight-bold">{{$following->user->username}}</a>
            </div>
        </div>
    </div>


@endforeach
@endsection