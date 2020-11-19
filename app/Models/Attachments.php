<?php

namespace App\Models;
use App\Models\Lessons;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{

    use HasFactory;
    function lessons(){
        return $this->belongsToMany('App\Models\Lessons','attachments_lessons','audio_id','lesson_id');

    }

}
