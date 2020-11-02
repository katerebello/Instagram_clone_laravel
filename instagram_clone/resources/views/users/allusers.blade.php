@extends('layouts.app')
@section('content')

<!-- <h1>{{ $all_profiles }}</h1> -->
    <div class="container">
        <div class="row">
            <div class="col-3">
                <ol>
                @foreach($all_profiles as $all_profile)
                    <li>
                        <a href="/profile/{{ $all_profile->id }}">
                            <img src="/storage/{{ $all_profile->image }}" alt="" width="50" height="50" style="border-radius: 50px;" class="m-3" >
                        </a>
                    </li>
                @endforeach
                </ol>
            </div>
            <div class="col-9">
                <ol>
                    @foreach($all_users as $all_user)
                        <li class="mt-3 mb-5 p-2">
                            <a href="/profile/{{ $all_user->id }}" >{{ $all_user->name}}</a>
                        </li>
                    @endforeach
                </ol>
            </div>
                
        </div>
    </div>


@endsection
