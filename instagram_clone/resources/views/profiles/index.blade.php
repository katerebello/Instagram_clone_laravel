@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 pt-4 pr-5 pl-5 pb-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt="">
            <!--here profileImage is a method we wrote in profiles model to get default image if not provided oresle the one provided-->
        </div>
        <div class="col-8 pt-5">
            <!-- username -->
            <div class="d-flex justify-content-between align-items-baseline pt-4">
                <div class="d-flex pb-3">
                    <h1>{{ $user->username }}</h1>

                    <!--will refer to the FollowButton.vue-->
                    <!--the user-id here is passed to the .vue file-->
                    @can('view', $user->profile)
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endcan
                </div>

                <!-- if the user has the authorization to update the only the user will be allowed to add posts -->
                @can('update', $user->profile)
                    <a href="/p/create" style="color:black; text-decoration:none;">
                        <i class="fas fa-plus" style="font-size: 15px;"></i>
                        Add New Post
                    </a>
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

            <!-- edit profile -->
            @can('update', $user->profile)
            <div class="pt-1 d-flex justify-content-end">
                <i class="fas fa-user-edit pt-1 pr-1" style="font-size: 15px;"></i>
                <a href="/profile/{{ $user->id }}/edit" style="color:black; text-decoration:none;">Edit Profile</a>
            </div>
            @endcan

            <!-- title -->
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>

            <!-- description -->
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