@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="" class="rounded-circle" alt="">
        </div>
        <div class="col-9">
            <div><h1>{{ $user->username}}</h1></div>
            <div class="d-flex">
            <div class="pr-5"><strong>23k</strong>followers</div>
            <div class="pr-5"><strong>24k</strong>posts</div>
            <div><strong>45</strong>tags</div>
            </div>
            <div class="pt-3 font-weight-bold">instagram.com</div>
            <div>rbfhgrughhrgitfgrn resuvyr tndry tyidyir tir</div>
            <a href="#">instagram.com</a>
        </div>
    </div>
</div>
@endsection
