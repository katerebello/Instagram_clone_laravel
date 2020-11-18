@extends('layouts.app')
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
                <input id="check" type="checkbox" onclick="validate();">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <script>
    function validate(){
        if(check.checked == 1){
            //alert('checked!');
            document.body.style.backgroundColor = "dark";
            document.nav.classlist.add = 'bg-dark';
        }
        else{
            document.body.style.backgroundColor = "white";
        }
    }
    </script>
</div>


@endsection