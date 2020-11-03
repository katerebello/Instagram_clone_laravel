@extends('layouts.app')
@section('content')

@foreach($found as $each)
<div class="row pl-5 block" >
<div class="col-md-1">
    <img src="/storage/{{$each->profile->image}}" class="w-100 rounded-circle" alt="">
</div>
<div class="col-md-1">
    <a style="display:'inline';" href="profile/{{$each->id}}">{{$each->username}}</a>
</div>
</div>

@endforeach
@endsection