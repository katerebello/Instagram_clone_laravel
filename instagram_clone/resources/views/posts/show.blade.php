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
                    <img src="/images/dot.png" alt="" style="width:8px;" class="pb-1">
                    <a href="#">Follow</a>
                </div>

            </div>

            <hr>
            <div class="d-flex ">
                <span class="font-weight-bold h5">
                    <a href="/profile/{{ $post->user_id }}" style="color:black;text-decoration:none;">{{ $post->user->username }}</a>
                </span>
                <p class="pl-2">{{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endsection