@extends('layouts.app')


@section('content')
@foreach($followings as $following)
<div class="text-center pb-5">
    <a href="/profile/{{$following->user->id}}" class="h3">
        <img src="/storage/{{$following->image}}" class="w-25" alt="">
    </a>
    <a href="/profile/{{$following->user->id}}" class="h3">{{$following->user->username}}</a>
</div>

@endforeach
@endsection