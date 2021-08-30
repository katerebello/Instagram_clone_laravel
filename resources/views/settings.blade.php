@extends('layouts.app')
@section('title','Settings')

@section('content')
<div class="container card mt-5" >
    <div class="row p-5">
        <div class="col-lg-1">
            <p class="mt-2 font-weight-bold">
                Theme
            </p>
        </div>
        <div class="col-lg-6">
            <label class="switch">
                <input id="check" name="check" type="checkbox" onclick="validate()">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <script type="text/javascript">
    function validate(){
        var remember = document.getElementById('check');
        if(remember.checked == 1){
            window.alert("checked!");
            //document.body.style.backgroundColor = "black";
        }
    }
    </script>
</div>
@endsection