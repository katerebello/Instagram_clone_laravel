@extends('layouts.app')

<<<<<<< HEAD
@section('profile')
<h1>hey</h1>
@endsection

@section('content')

<div class="container">
    @foreach($posts as $post)
    
    <div class="row">

        <!-- lhs -->
        <div class="col-7 offset-3">
            <a href="/profile/{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-75">
            </a>
        </div>
    </div>
    <!-- rhs -->
    <div class="row">
        <div class="col-7 offset-3">

            <div class="d-flex pt-2 pb-4">
                <span class="font-weight-bold h5">
                    <a href="/profile/{{ $post->user_id }}" style="color:black;text-decoration:none;">{{ $post->user->username }}</a>
                </span>
                <p class="pl-2">{{ $post->caption }}</p>
            </div>
        </div>
    </div>

    @endforeach

    <!-- when paginate is called -->
    <div class="row">
        <div class="col-12  d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

</div>
@endsection

=======
@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class=" col-5 offset-3">
           <a href="/profile/{{ $post->user->id }}"><img class="img-fluid" src="/storage/{{$post -> image}}" alt=""></a><!--in order to set an default image if user didnt provide one include a function in profiles model-->
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3 pt-2 pb-3">
           
            <p>
                <span class="font-weight-bold ">
                    <a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
                </span>
                {{$post->caption}}
            </p>

        </div>
    </div>
    @endforeach
</div>

@endsection
>>>>>>> insta-k
