@extends('layouts.app')
@section('title','Followers')
@section('content')
<div class="container card mt-5 p-4 mb-5">
    @foreach($followers as $follower)
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <a href="/profile/{{$follower->id}}" class="h3 ml-5">
                    <img src="/storage/{{$follower->profile->image}}" class="rounded-circle" width="70" height="70" alt="">
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="/profile/{{$follower->id}}" class="text-decoration-none text-dark font-weight-bold">{{$follower->username}}</a>
            </div>
        </div>
        <hr>
    @endforeach
</div>
@endsection