@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt=""><!--here profileImage is a method we wrote in profiles model to get default image if not provided oresle the one provided-->
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>
                    
                    @can('view', $user->profile)
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button><!--will refer to the FollowButton.vue--><!--the user-id here is passed to the .vue file-->
                    @endcan
                </div>

                @can ('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
               
            </div>
          
            <div class="d-flex">
                <div class="pr-3"> 
                    <a href="#posts" class="text-decoration-none text-dark"><strong class="pr-1">{{ $postsCount }}</strong>Posts</a> 
                </div>
                <div class="pr-3"> 
                    <a href="/profile/{{ $user->id }}/followers" class="text-decoration-none text-dark"><strong class="pr-1">
                        {{ $user->profile->followers->count()}}</strong>followers
                    </a> 
                </div>
                <div class="pr-3">
                    <a href="/profile/{{ $user->id }}/following" class="text-decoration-none text-dark"><strong class="pr-1">  
                        {{ $user->following->count()}}</strong>following
                    </a> 
                </div>
            </div>

            @can ('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">edit profile</a>
            @endcan

            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <a href="{{ $user->profile->url }}" class="text-decoration-none text-dark">{{ $user->profile->url ?? 'N/A' }}
            </a>
        </div>
    </div>
    <!--user posts-->
    <div class="row pt-5" id="posts">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" style="object-fit: cover; max-width:100%; height:auto;" class="w-100 pt-4">
            </a>
            </div>

        @endforeach
    </div>
</div>
@endsection