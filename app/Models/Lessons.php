<?php

namespace App\Models;
use App\Models\Attachments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{

    use HasFactory;
    function attachments(){
        return $this->belongsToMany('App\Models\Attachments','attachments_lessons','lesson_id','audio_id');
    }

}
