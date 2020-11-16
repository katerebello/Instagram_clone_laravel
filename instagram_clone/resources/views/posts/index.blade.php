@extends('layouts.app')

@section('form')

@endsection

@section('content')

<div class="container">
    <!-- search -->
    <div class="text-center mt-3">
        <form action="/search" method="post">
            {{ csrf_field()}}
            <div >
                <input type="text" name="q" placeholder="Search Users" size="80">
                <span class="input-group-btn"></span>
                <button type="submit" class="btn btn-default bg-light text-light">
                    <span>
                        <img style="height:1em" src="https://img.icons8.com/material/24/000000/search--v1.png"/>
                    </span>
                </button>
            </div>
        </form>
    </div>
    <br>

    <!-- posts -->
    @foreach($posts as $post)
    <div class="card m-5"> 

        <div class="card-header">
            <img src="{{ $post->user->profile->profileImage() }}" class=" rounded-circle img-fluid" style="max-width:35px" alt=""> 
            <a  href="/profile/{{$post->user->id}}" class="text-dark font-weight-bold ml-1">{{$post->user->username}}</a>
        </div>
        
        <div class="col-5 offset-3 mt-5">
           <a href="/profile/{{$post->user->id}}">
                <img class="img-fluid" src="/storage/{{$post -> image}}" alt="">
            </a>
            <!--in order to set an default image if user didnt provide one include a function in profiles model-->
        </div>

        <div class="col-6 offset-3 pt-2 pb-3 align-items-center">
            <!-- like button -->
            <like-button user-id="{{ $post->user->id }}" post-id="{{$post->id}}" likes="{{ $likes }}"></like-button> <!--this will refer to the actual component u added in app.js and the like-button.vue-->
            
            Liked by
            @foreach($post->likes as $like) 
            <span>{{ $like->username }}</span>
            @endforeach
            <p>
                <span class="font-weight-bold h6 ">
                    <a  href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
                </span>
                {{$post->caption}}
            </p>
        </div>
    </div>
    @endforeach

    <!-- when paginate is called -->
    <div class="row">
        <div class="col-12  d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>

@endsection