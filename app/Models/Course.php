<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    use HasFactory;
    public $fillable =[
        'course_title',
        'course_subtitle',
        'course_description',
        'course_price',
        'What_you_will_learn',
        'requirement',
        'videoimage',
        'category',
        'user_id',
        
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function videos(){
        return $this->belongsTo(Video::class);
    }
}
