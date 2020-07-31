@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="" class="rounded-circle" alt="">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
           
            <div class="d-flex">
            <div class="pr-5"><strong>{{$user->posts->count()}}</strong>Posts</div>
            <div class="pr-5"><strong>24k</strong>followers</div>
            <div><strong>45</strong>tags</div>
            </div>
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <a href="{{ $user->profile->url }}">{{ $user->profile->url ?? 'N/A' }}
            </a>
        </div>
    </div>
    <!--user posts-->
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{ $post->image }}" alt="post" class="w-100">
            </div>

        @endforeach
    </div>
</div>
@endsection
