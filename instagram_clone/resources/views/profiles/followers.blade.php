@extends('layouts.app')


@section('content')
@foreach($followers as $follower)
<div class="text-center">
    <a href="/profile/{{$follower->id}}" class="h3">
        <img src="/storage/{{$follower->profile->image}}" class="w-25" alt="">
    </a>
    <a href="/profile/{{$follower->id}}" class="h3">{{$follower->username}}</a>
</div>

@endforeach
@endsection