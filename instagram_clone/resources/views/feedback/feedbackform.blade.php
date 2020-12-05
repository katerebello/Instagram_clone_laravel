@extends('layouts.app')
@section('title','Feedback')
@section('content')

<div class="container card p-2 mt-5">
    <form action="/storefeedback" id="feedback" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row offset-3">
            <div class="col-8">
                <div class="row">
                    <b class="pt-4 ml-5 h1 colorh">FEEDBACK FORM</b>
                </div>
                <hr>
                <ul>
                    <!--q1-->
                    <div class="form-group row  ml-2  color">
                        <li>
                            <label class="label" for="look" class="col-md-12 col-form-label" style="font-size: 18px;">Are You satisfied with the look and feel of the app?</label>
                        </li>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <input id="look" type="radio" class="mr-2" name="look" caption="look" value="yes" autocomplete="caption" autofocus required><span class="">YES</span>
                        </div>
                        <div class="col-md-6">
                            <input id="look" type="radio" class="" name="look" caption="look" value="no" autocomplete="caption" autofocus><span class="ml-2">NO</span>
                        </div>
                    </div>
                    <!--q2-->
                    <div class="form-group row ml-3 color ">
                        <div class="row">
                            <li>
                                <label class="label" for="found" class=" col-md-12 col-form-label" style="font-size: 18px;">How did you find out about the app?</label>
                            </li>
                        </div>
                    </div>
                    <div class="row ml-1">
                        <select class="col-md-8" name="found" required>
                            <option value="">Select an option</option>
                            <option value="friends">Friends</option>
                            <option value="colleague">Colleague</option>
                            <option value="internet">From the Internet</option>
                        </select>
                    </div>
                    <!--3-->
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <li>
                                <label for="ui" class="label col-form-label color" style="font-size: 18px;">How would you rate the overall UI of the app?</label>
                            </li>
                        </div>
                        <div>
                            <input class="ml-3" type="range" name="ui" min="1" max="10" value="5" required>
                        </div>
                    </div>

                    <!--q4-->
                    <div class="form-group row">
                        <div class="col-md-12">
                            <li> <label class="label col-form-label color " for="recommend" name="recommend" style="font-size: 18px;">How likely are you to recommend this app to a friend or colleague?</label></li>
                        </div>
                        <div>
                            <input class="ml-3" type="range" name="recommend" min="1" max="10" value="5" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <li><label class="label col-form-label color" name="comments" style="font-size: 18px;">Drop in your additional comments here!</label></li>
                        </div>
                        <div>
                            <textarea class="ml-3" rows="4" cols="50" name="comments" required></textarea>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <!-- to submit -->
        <div class="row pt-4 offset-3">
            <button class="ml-5 btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection