@extends('layouts.app')
@section('content')

    <div class="container card mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-2">
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
            <div class="col-4">
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
