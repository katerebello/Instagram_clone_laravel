@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt=""><!--here profileImage is a method we wrote in profiles model to get default image if not provided oresle the one provided-->
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex pb-3">
                    <h3>{{ $user->username }}</h3>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button><!--will refer to the FollowButton.vue--><!--the user-id here is passed to the .vue file-->
                </div>

                @can ('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
               
            </div>
          

            @can ('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">edit profile</a>
            @endcan

            <div class="d-flex">
            <div class="pr-5"> <a href="#posts"><strong>{{$user->posts->count()}}</strong>Posts</a> </div>
            <div class="pr-5"> <a href="/profile/{{ $user->id }}/followers"><strong>{{ $user->profile->followers->count()}}</strong>followers</a> </div>
            <div> <a href="/profile/{{ $user->id }}/following"><strong>{{ $user->following->count()}}</strong>following</a> </div>
            </div>
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <a href="{{ $user->profile->url }}">{{ $user->profile->url ?? 'N/A' }}
            </a>
        </div>
    </div>
    <!--user posts-->
    <div class="row pt-5" id="posts">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image }}" alt="post" class="w-100">
            </a>
            </div>

        @endforeach
    </div>
</div>
@endsection


