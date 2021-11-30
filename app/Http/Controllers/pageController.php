<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class pageController extends Controller
{
    function welcome(Request $request)
    {
        // if($request->action == 'categories'){
        //     echo "categories";
        // }
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

    function register( Request $request)
    {
        if ($request->isMethod('post')){
                $request->validate([
                    'firstname'=>'required',
                    'lastname'=>'required',
                    'email'=>'required',
                    'password'=>'required',
                ]);
            $studentreg = $request->all();
            $studentreg['status'] = 'student';
            $studentreg['password']= Hash::make($request->password);
            $response= User::create($studentreg);
            if($response){
                    echo 'success';
            }else{
                    echo 'fail';
            }
        }
        return view('register');
    
    }   
    function login()
    {
       
        return view('login');
    }
    function instructorRegister(Request $request){
        if ($request->isMethod('post')){
            $request->validate([
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]);
            $instructorreg = $request->all();
            $instructorreg['status'] = 'instructor';
            $instructorreg['type_of_user'] = 'active';
            $instructorreg['password']= Hash::make($request->password);
            $response = User::create($instructorreg);
      
        if($response){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
        return view('instructorRegister');
   
    }
    

}
