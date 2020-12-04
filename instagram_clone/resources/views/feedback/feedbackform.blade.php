@extends('layouts.app')
<!--@section('title','Add new post')-->
@section('content')

<div class="container card p-5 mt-5">
    <form action="/storefeedback" id="feedback" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row offset-3">

            <div class="col-8 ">
                <div class="row">
                    <h3 class="pt-4 ml-3 h3" style="font-weight: bold;">FEEDBACK FORM</h3>
                </div>
                <!--q1-->
                <div class="form-group row  ml-2">
                    <label class="label" for="look" class="col-md-12 col-form-label ">Are You satisfied with the
                        look and feel of the app?</label>
                </div>
                <div class=" form-group row">
                    <div class="col-md-6 ">
                        <input id="" type="radio" class="radio" name="look" caption="look" value="yes"
                            autocomplete="caption" autofocus required><span>YES</span>
                    </div>
                    <div class="col-md-6">
                        <input id="look" type="radio" class="radio" name="look" caption="look" value="no"
                            autocomplete="caption" autofocus>NO
                    </div>
                </div>
                <!--q2-->
                <div class="form-group row ml-3">
                    <div class="row">
                        <label class="label" for="found" class="col-md-12 col-form-label">How did you find out
                            about
                            the app?</label>
                    </div>

                </div>
                <div class="row">
                    <select class="col-md-8" name="found" id="">
                        <option value="friends">Friends</option>
                        <option value="colleague">colleague</option>
                        <option value="internet">On the Internet</option>
                    </select>
                </div>
                <!--3-->
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="ui" class="label col-form-label">How would you rate the overall UI of the
                            app?</label>
                    </div>
                    <div>
                        <input type="range" name="ui" min="1" max="10">
                    </div>
                </div>

                <!--q4-->
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="label col-form-label " for="recommend" name="recommend">How likely are you to
                            recommend
                            this app to a friend or colleague?</label>
                    </div>
                    <div>
                        <input type="range" name="recommend" min="1" max="10">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="label col-form-label " for="" name="comments">Drop In Your Additional Comments
                            Here!</label>
                    </div>
                    <div>
                        <textarea rows="4" cols="50" name="comments"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- to submit -->
        <div class="row pt-4 offset-3">
            <button class="ml-3 btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection