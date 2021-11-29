<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Learn;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{
    //
    function instructorLogin(Request $request){
        // if(session()->has('status')){
        //     return redirect()->route('profile_complete');
        // }
        if($request->isMethod('post')){
            $request->validate([
                'email'=>'required',
                'password'=>'required',
            ]);
            
            if (Auth::attempt(['email'=> $request->email, 'password'=>$request->password, 'status'=>'superadmin'])) {
                    $request->session()->put('status','superadmin');
                    $login_id = User::where('email', $request->email)->get('id');
                    $request->session()->put('id',$login_id);

                   return redirect()->route('instructordashboard');
            }else if(Auth::attempt(['email'=> $request->email, 'password'=>$request->password, 'status'=>'instructor', 'type_of_user'=>'active'])){
                    $request->session()->put('status','instructor');
                    $login_id = User::where('email', $request->email)->get('id');
                    $request->session()->put('id',$login_id);
                    return redirect()->route('instructordashboard');
            }
        }
        return view('admin.instructorLogin');
    }
    function dashboard1(){
        return view('admin.courses');
    }
    function profile(){
        // if()
        return view('admin.profile');
    }
    function courses1(){
        return view('admin.courses');
    }
    function profile_complete(){
        return view('admin.profile_complete');
    }
    function adminprofile(Request $request){
       
            return view('admin.adminprofile');
        
    }
    function adminprofilecomplete(Request $request){
        if($request->isMethod('post')){
           $request->validate([
                    'firstname'=>'required',
                    'lastname'=>'required',
                    'skill'=>'required',
                    'phonenumber'=>'required',
                    'email'=>'required',
                    'profileimage'=>'required',
                    'bio'=>'required',
           ]);
            $profile_name = $request->file('profileimage')->getClientOriginalName();
            $file = $request->file('profileimage');
            $destination = 'images';
            $file->move($destination,$file->getClientOriginalName());
            // $data['profileimage']=$name;
           $user_id = Auth::user()->id;
          $response = User::where('id',$user_id)->update(['firstname'=>$request->firstname, 'lastname'=>$request->lastname,'email'=>$request->email,'skill'=>$request->skill,'phonenumber'=>$request->phonenumber,'bio'=>$request->bio,'profileimage'=>$profile_name]);
          if ($response){
              return redirect()->route('adminprofile')->with('successupdate', 'updated successfully');
          }else{
            return redirect('/adp_complete');
          }
        }
        // if (Auth::user()->bio == null){
        //     return redirect('/adp_complete');
        // }
            return view('admin.adminprofilecomplete');
    }
    function instructordashboard(){
        return view('admin.profile2');
    }
    function addcourse(Request $request){
       if($request->isMethod('post')){
           $request->validate([
                'course_title'=>'required',
                'course_subtitle'=>'required',
                'course_description'=>'required',
                'category'=>'required',
           ]);
           $login_id = $request->session()->get('id');
           $id='';
           foreach($login_id as $login){
                $id = $login['id'];
           }
          
           $data = $request->all();
           $data['user_id']= $id;
           $data['category']= $request->category;
        //    dd($data);
           
           $response = Course::create($data);
           if($response){
               $get_id = Course::where('course_title', $request->course_title)->get('id');
               $request->session()->put('course_id',$get_id);
               return redirect('/add_course1');
           }else{
               echo "fail";
           }
           
       }
       
       
        return view('admin.addcourse');
    }
    function addcourse1(Request $request){
        if ($request->isMethod('post')){
            $course_id = $request->session()->get('course_id');
            $id='';
           foreach($course_id as $login){
                $id = $login['id'];
           }
        
           
            $count=1;
            $user_req =$request->all();
            $all_request = array_filter($user_req);
            $all_count = count($all_request);
            $counter = ($all_count - 2 )/3;
            while( $count <= $counter ) {
                
                $data=[];
                $video_url = 'video_url'.$count;
                $video_name = 'video_name'.$count;
                $video_duration = 'video_duration'.$count;
                $data['video_url']= $all_request[$video_url];
                $data['video_name']= $all_request[$video_name];
                $data['video_duration']= $all_request[$video_duration];
                $data['module']= $all_request['module'];
                $data['course_id'] = $id;
                $response = Video :: create($data);
                if ($response){
                    $count++;
                }
                
            }
         
            return redirect('/add_course1');
          
           
        }
        return view('admin.addcourse1');
    }

    function all_instructor(Request $request){
        
        //post section
        if($request->isMethod('post')){
            $response= User::where('id', $request->id)->update(['type_of_user'=>$request->status]);
            if ($response){
                return redirect()->route('instructors')->with('successupdate', 'updated successfully');
            }else{
                return redirect()->route('instructors')->with('errorupdate', 'not updated');
            }

        }
        //extracting data from database on the get side
        $data = User::where('status','instructor')->get();
        return view("admin.instructors", compact('data'));
    }
}
