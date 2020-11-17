@extends('layouts.app')

@section('content')

<div class="row mx-5">
@foreach($posts as $post)
    <div class=" each_post_div col-4 mb-4" >
        <a href="/profile/{{$post->user_id}}"><img src="storage/{{$post->image}}"  class="w-100" alt="pic"></a>
        <div class="middle">
        <div class="text">
            <i class="fas fa-heart mr-2" style="color:white;"></i>
                {{ $post->likes->count() }}
        </div>
        </div>
    </div>
    
@endforeach
</div>


@endsection

