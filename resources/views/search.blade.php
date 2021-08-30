@extends('layouts.app')
@section('title','Search Results')
@section('content')
<div class="container card mt-5 p-4 mb-5">
    @foreach($found as $each)
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <a href="profile/{{$each->id}}" class="ml-5">
                    <img src="/storage/{{$each->profile->image}}" class="rounded-circle" width="70" height="70" alt="">
                </a> 
            </div>
            <div class="col-4 mt-4">
                <a href="profile/{{$each->id}}"  class="text-decoration-none text-dark font-weight-bold">{{$each->username}}</a>
            </div>
        </div>
    @endforeach
</div>
@endsection