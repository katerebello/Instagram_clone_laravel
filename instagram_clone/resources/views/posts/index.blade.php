@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class=" col-5 offset-3">
           <a href="/profile/{{ $post->user->id }}"><img class="img-fluid" src="/storage/{{$post -> image}}" alt=""></a><!--in order to set an default image if user didnt provide one include a function in profiles model-->
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3 pt-2 pb-3">
           
            <p>
                <span class="font-weight-bold ">
                    <a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
                </span>
                {{$post->caption}}
            </p>

        </div>
    </div>
    @endforeach
</div>

@endsection