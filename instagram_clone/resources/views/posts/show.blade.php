@extends('layouts.app')

@section('content')

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

            

        </div>
    </div>
</div>

@endsection
