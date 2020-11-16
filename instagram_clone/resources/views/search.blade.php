@extends('layouts.app')
@section('content')

@foreach($found as $each)
        <div style="box-shadow: 1px 1px 10px 1px black"  class="row pl-5  card-header ml-5 mr-5 mb-5">
            <div class="col-md-1">
                <a href="profile/{{$each->id}}"><img src="/storage/{{$each->profile->image}}" class="w-100 rounded-circle" alt=""></a> 
            </div>
            <div class="col-md-1">
                <a href="profile/{{$each->id}}"  class="text-decoration-none text-dark">{{$each->username}}</a>
            </div>
        </div>


@endforeach

@endsection