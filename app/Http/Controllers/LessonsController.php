<?php

namespace App\Http\Controllers;
use App\Models\Lessons;
use App\Models\Attachments;

use Illuminate\Http\Request;

class LessonsController extends Controller
{
    //
    function lessons(){
        
        //select data 
        $alllessons=lessons::get();
        return view('downloads',[
            'lessons'=>$alllessons,
        ]);
    }
    function createform(){

        return view ('forms/createLesson');
    }
    function createhandle(Request $request){

        $lesson=new Lessons();
        $lesson->lesson_name=$request->lesson_name;
        $lesson->save();
     
        
        return redirect('/downloads');
    }
    function show($id)
    {
        
        $lesson=lessons::find($id);
        
        return view('show',[
            'lesson'=>$lesson
        ]);
        
    }
 
}
