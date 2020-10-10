@extends('layouts.app')

@section('content')
<<<<<<< HEAD

<div class="container">
    <div class="row">

        <!-- lhs -->
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-75">
        </div>

        <!-- rhs -->
        <div class="col-4">

        <!-- <div class="">
                            <a href="/profile/{{ $post->user_id }}">
                                <img src="{{ $post->user->profile->profileImage() }}" alt="" class="" style="border-radius:50%; width:45px">
                            </a>
                        </div> -->

            <div class="d-flex align-items-center">
                <!-- profile-pic -->
                <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-25" style="border-radius:50%;">

                <div class="pl-4">
                    <div class="font-weight-bold h3">
                        <a href="/profile/{{ $post->user_id }}" style="color:black;text-decoration:none;">
                            {{ $post->user->username }}
                        </a>
                    </div>

                </div>
                <div class="pl-3">

                    <!-- follow-link -->
                    @can('view', $post->user->profile)
                    <img src="/images/dot.png" alt="" style="width:8px;" class="">

                    <div style="display: inline-block;">
                        <follow-link user-id="{{ $post->user->id }}" follows="{{ $follows ?? '' }}">

                        </follow-link>
                    </div>
                    @endcan

                </div>

            </div>

            <hr>
            <div class="d-flex ">
                <span class="font-weight-bold h5">
                    <a href="/profile/{{ $post->user_id }}" style="color:black;text-decoration:none;">{{ $post->user->username }}</a>
                </span>
                <p class="pl-2">{{ $post->caption }}</p>
            </div>
            
            <!-- likes -->
            <!-- <div>
                <likes user-id="{{ $post->user->id}}" likes="{{ $likes ?? '' }}" ></likes>
            </div> -->

            
=======
<div class="container">
    <div class="row">
        <div class=" col-7">
            <img class="img-fluid"  src="/storage/{{$post -> image}}" alt=""><!--in order to set an default image if user didnt provide one include a function in profiles model-->
        </div>
        <div class="col-5">
            <div class="d-flex align-items-center">
                <div>
                    <img src="{{ $post->user->profile->profileImage() }}" class=" rounded-circle img-fluid pr-3" style="max-width:50px" alt="">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}" ><span class="text-dark">{{$post->user->username}}</span></a>
                        
                        <a href="#" class="pl-3">follow</a>
                    </div>
                </div>
            </div>
            <hr>
            <p>
                <span class="font-weight-bold ">
                    <a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
                </span>
                {{$post->caption}}
            </p>
>>>>>>> insta-k

        </div>
    </div>
</div>

<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> insta-k
