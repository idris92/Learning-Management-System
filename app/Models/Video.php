<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public $fillable=[
        'video_url',
        'video_name',
        'video_duration',
        'course_id',
        'module',
       
    ];

    public function course(){
        return $this->hasMany(Course::class);
    }
}
