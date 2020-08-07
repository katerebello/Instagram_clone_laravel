@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-4 pt-4 pr-5 pl-5 pb-5">
            <img src="{{ $user->profile->profileImage() }}" style="border-radius:50%;" class="w-100">
        </div>
        <div class="col-8 pt-5">
            <!-- username -->
            <div class="d-flex justify-content-between align-items-baseline pt-4">
                <div class="d-flex pb-3">
                    <h1>{{ $user->username }}</h1>

                    <!-- follow button -->
                    <!-- this will create a view for us in FollowButton.vue -->
                    <!-- give the user id through property -->
                    @can('view', $user->profile)
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endcan


                </div>
                <!-- if the user has the authorization to update the only the user will be allowed to add posts -->
                @can('update', $user->profile)
                <a href="/p/create" style="color:black; text-decoration:none;">
                    <i class="fas fa-plus"></i>
                    Add New Post
                </a>
                @endcan



            </div>

            <!-- info -->
            <div class="d-flex">
                <div class="pr-4"><strong class="pr-2">{{ $postsCount }}</strong>posts</div>
                <div class="pr-4"><strong class="pr-2">{{ $followersCount }}</strong>followers</div>
                <div class="pr-4"><strong class="pr-2">{{ $followingCount }}</strong>following</div>
            </div>

            <!-- edit profile -->
            @can('update', $user->profile)
            <div class="pt-3 d-flex justify-content-end">
                <i class="fas fa-user-edit pt-1 pr-1"></i>
                <a href="/profile/{{ $user->id }}/edit" style="color:black; text-decoration:none;">Edit Profile</a>
            </div>
            @endcan

            <!-- title -->
            <div class=" font-weight-bold">{{ $user->profile->title }}</div>

            <!-- description -->
            <div>{{ $user->profile->description }}</div>

            <!-- url -->
            <div><a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <!-- posts and tagged  -->
    <div class="row">
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

