@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<<<<<<< HEAD

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
=======
        <div class="col-3">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt=""><!--here profileImage is a method we wrote in profiles model to get default image if not provided oresle the one provided-->
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex pb-3">
                    <h3>{{ $user->username }}</h3>

                    <follow-button user-id="{{ $user->id }}"></follow-button><!--will refer to the FollowButton.vue--><!--the user-id here is passed to the .vue file-->
                </div>

                @can ('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
               
            </div>
          

            @can ('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">edit profile</a>
            @endcan

            <div class="d-flex">
            <div class="pr-5"><strong>{{$user->posts->count()}}</strong>Posts</div>
            <div class="pr-5"><strong>{{ $user->profile->followers->count()}}</strong>followers</div>
            <div><strong>{{ $user->following->count()}}</strong>following</div>
>>>>>>> insta-k
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
<<<<<<< HEAD
=======
    <!--user posts-->
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image }}" alt="post" class="w-100">
            </a>
            </div>
>>>>>>> insta-k

    <!-- posts and tagged  -->
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" style="object-fit: cover;" class="w-100 pt-4">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

