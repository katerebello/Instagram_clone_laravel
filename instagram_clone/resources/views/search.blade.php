@extends('layouts.app')
@section('content')

@foreach($found as $each)
    <div class="container card mt-5 p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <a href="profile/{{$each->id}}"><img src="/storage/{{$each->profile->image}}" class="rounded-circle" width="80" height="80" alt=""></a> 
            </div>
            <div class="col-4 mt-4">
                <a href="profile/{{$each->id}}"  class="text-decoration-none text-dark font-weight-bold">{{$each->username}}</a>
            </div>
        </div>
    </div>
@endforeach
@endsection