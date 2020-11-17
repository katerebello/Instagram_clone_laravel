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

                    @can('view', $user->profile)
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    <!--will refer to the FollowButton.vue-->
                    <!--the user-id here is passed to the .vue file-->
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
                    <a href="#posts" style="text-decoration: none; color:black;">
                        <strong class="pr-1">{{ $postsCount }}</strong>Posts</a>
                </div>
                <div class="pr-3">
                    <a href="/profile/{{ $user->id }}/followers" style="text-decoration: none; color:black;">
                        <strong class="pr-1">
                            {{ $followersCount }}</strong>followers
                    </a>
                </div>
                <div class="pr-3">
                    <a href="/profile/{{ $user->id }}/following" style="text-decoration: none; color:black;">
                        <strong class="pr-1">
                            {{ $followingCount }}</strong>following
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

            <!-- url -->
            <div>
                <a href="{{ $user->profile->url }}" style="text-decoration:none">{{ $user->profile->url ?? 'N/A' }}</a>
            </div>
        </div>
    </div>
    
    <!--user posts-->
    <div class="row pt-5" id="posts">
        @foreach($user->posts as $post)
        <div class="each_post_div col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100 pt-4 profile_each_post">
            </a>
            <!-- on hover this will be visible -->
            <div class="middle">
                <div class="text">
                    <i class="fas fa-heart mr-2" style="color:white;"></i>
                    {{ $post->likes->count() }}
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection