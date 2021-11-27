<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    //
    function instructorLogin(){
        return view('admin.instructorLogin');
    }
    function dashboard1(){
        return view('admin.courses');
    }
    function studentprofile(){
        return view('admin.profile');
    }
    function courses1(){
        return view('admin.courses');
    }
    function profile_complete(){
        return view('admin.profile_complete');
    }
    function instructorprofile(){
        return view('admin.profile2');
    }
    function addcourse(){
        return view('admin.addcourse');
    }
    function addcourse1(){
        return view('admin.addcourse1');
    }
}
