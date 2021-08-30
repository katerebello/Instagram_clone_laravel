@extends('layouts.app')
@section('title','Feedback Submitted')
@section('content')

<div class="feedback container">
    <img src="https://img.icons8.com/fluent/250/000000/checked-2.png" />
    <h1 class="text-light">THANKYOU ! </h1>
    <h2 class="text-light"> {{ $message }}</h2>
    <a href="/profile/{{ auth()->user()->id }}"> <button class="btn btn-primary">Back</button></a>
    <!--<a href="/allreviews"><button class="btn btn-primary">All Reviews</button> </a>-->
</div>
@endsection