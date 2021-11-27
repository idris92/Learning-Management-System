<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class pageController extends Controller
{
    function welcome()
    {
       
        return view('index');
    }

    function course()
    {
       
        return view('course');
    }
    function courses()
    {
       
        return view('courses');
    }

    function register()
    {
       
        return view('register');
    }
    function login()
    {
       
        return view('login');
    }
    function instructorRegister(){
        return view('instructorRegister');
    }
    

}
