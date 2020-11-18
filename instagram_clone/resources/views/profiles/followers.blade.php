@extends('layouts.app')


@section('content')
@foreach($followers as $follower)
    <div class="container card mt-5 p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <a href="/profile/{{$follower->id}}">
                    <img src="/storage/{{$follower->profile->image}}" class="rounded-circle" width="80" height="80" alt="">
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="/profile/{{$follower->id}}" class="text-decoration-none text-dark font-weight-bold">{{$follower->username}}</a>
            </div>
        </div>
    </div>

@endforeach
@endsection