@extends('layouts.app')
@section('content')

    <div class="container card mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                @foreach($all_profiles as $all_profile)
                    <div class="p-4">
                        <a href="/profile/{{ $all_profile->id }}" class="p-5">
                            <img src="/storage/{{ $all_profile->image }}" 
                            alt="" width="50" height="50" style="border-radius: 50px;" 
                            class="">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="col-4">
                @foreach($all_users as $all_user)
                    <div class="p-4 mt-2">
                        <a href="/profile/{{ $all_user->id }}" style="font-size:16px; 
                        color:black; display:block; text-decoration:none;"
                        class="font-weight-bold mb-3">
                        {{ $all_user->name}}</a>
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>


@endsection