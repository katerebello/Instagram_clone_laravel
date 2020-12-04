<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;
use DB;
class feedbackController extends Controller
{


    public function index(){
        if(auth()->user()->id)
            $done = feedback::where('user_id','=',Auth()->User()->id)->count();
            //checks if user has already submitted feedback
            if($done !=0){
                $message = 'Your Feedback is already Submitted';
                return view('/feedback/feedbacksuccess',compact('message'));
            }
            return view('/feedback/feedbackform');
    }
    public function store(){
        //dd(request()->all());
        $data = request()->validate([
            'look'=>['required'],
            'found'=>['required'],
            'ui'=>['required'],
            'recommend'=>['required'],
            'comments'=>[],
        ]);

        auth()->user()->feedback()->create($data);
        $message = 'For Your valuable Feedback';
        return view('/feedback/feedbacksuccess',compact('message'));
    }


    public function allreviews(){
        //dd(DB::table('feedback')->pluck('user_id','comments','found'));
    }
}