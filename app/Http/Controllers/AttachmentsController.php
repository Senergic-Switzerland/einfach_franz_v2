<?php

namespace App\Http\Controllers;
use App\Models\Attachments;
use App\Models\Lessons;

use Illuminate\Http\Request;

class AttachmentsController extends Controller
{
  
    function createAudio(){
        $lessons=Lessons::get();
        return view('forms/audio',[
            'lessons'=>$lessons
        ]);
        $audios=Attachments::get();
        
        return view('forms/audio',[
            'attachments'=>$audios
        ]);

    }
    function createAudioHandle(Request $request){
        $fileName="";
        if ($request->hasFile('audio')) {
        $file = $request->file('audio');
        $name = 'route_'.time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/assets');
        $file->move($destinationPath, $name);
       $fileName='assets/'.$name;
        }
        $attachment=new Attachments();
        $attachment->name=$request->name;
        $attachment->audio= $fileName;
        // add lesson to attachments
        $lessons=Lessons::find($request->lesson);
        $attachment->lessons()->attach($lessons);
        
        $attachment->save();
        return redirect('/audio');}
        function download($audio){
            $audio=Attachments::find($audio);

            return redirect('audio/download/',[
                'audio'=>$audio
            ]);
        }
}

