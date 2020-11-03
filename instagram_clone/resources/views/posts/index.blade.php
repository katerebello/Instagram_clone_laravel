@extends('layouts.app')

@section('form')

@endsection

@section('content')

<div class="container">
    <div  class="text-center">
        <form action="/search" method="post">
            {{ csrf_field()}}
            <div >
                <input type="text" name="q" placeholder="Search users"><span class="input-group-btn"></span>
                <button type="submit" class="btn btn-default bg-light text-light">
                    <span><img style="height:1em" src="https://img.icons8.com/material/24/000000/search--v1.png"/></span>
                </button>
            </div>
        </form>

    </div><br>
    @foreach($posts as $post)
    <div class="row">
        <div class=" col-5 offset-3">
           <a href="/profile/{{ $post->user->id }}"><img class="img-fluid" src="/storage/{{$post -> image}}" alt=""></a><!--in order to set an default image if user didnt provide one include a function in profiles model-->
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3 pt-2 pb-3 align-items-center">
            <like-button></like-button><!--this will refer to the actual component u added in app.js and the like-button.vue-->
            <p>
                <span class="font-weight-bold h6 ">
                    <a  href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
                </span>
                {{$post->caption}}
            </p>

        </div>
    </div>
    @endforeach
</div>

@endsection