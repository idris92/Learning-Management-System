<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $fillable =[
        'course_title',
        'course_subtitle',
        'course_description',
        'What_you_will_learn',
        'requirement',
        'category_id',
        'user_id',
    ];
}
