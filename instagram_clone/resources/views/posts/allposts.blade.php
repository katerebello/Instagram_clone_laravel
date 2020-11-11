@extends('layouts.app');

@section('content')

<div class="text-center">
@foreach($posts as $post)
    <div class="" style="display:inline">
        <!-- <a href="/profile/{{$post->user->id}}"> -->
            <img src="storage/{{$post->image}}" class="w-25" alt="pic">
        <!-- </a> -->
    </div>
@endforeach
</div>


@endsection

