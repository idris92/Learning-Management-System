@extends('admin.admincomponents.adminskeleton')

@section('title')
    Add Course
@endsection

@section('content')

<section class="admin-dashboard-section">
<div class="admin-dashboard-right-side"style="padding:50px 0px 30px 320px !important">
            <div class="col-xl-12" >
                <div class="row row-cols-md-2 mb-3 ">
                    <div class="card" style="background-color:transparent !important; border:1px solid rgba(0,0,0,0.1) !important; width:80% !important">
                        <div class="card-body" >
                            <h4 style="color: #0071dc; text-align:center; padding-bottom:8px;">Upload a course</h4>
                        <form action=""  id="form" method="post">
                            @csrf
                            <div class="form-group mb-4 col-lg-12" >
                                <label for="exampleInputEmail1">Module Name</label>
                                <input type="text" name="module" class="form-control"  >
                            </div>
                            {{-- <input type="button" value="Click" href="#" onClick="GFG_Fun()">
                            <p id="GFG_DOWN"></p> --}}
                           
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-5">
                                    <label for="exampleInputEmail1">Lesson 1</label>
                                    <input type="text" name="video_name1" class="form-control" id="exampleInputEmail1" placeholder="Video Name">
                                </div>
                                <div class="form-group mb-4 col-lg-5" style=" margin-left:2px !important" >
                                    <label for="exampleInputEmail1">Lesson 1</label>
                                    <input type="text" name="video_url1" class="form-control" id="exampleInputEmail1" placeholder="Video URL">
                                </div>
                                <div class="form-group mb-4 col-lg-2" style=" margin-left:2px !important">
                                    <label for="exampleInputEmail1">Lesson 1</label>
                                    <input type="number" name="video_duration1" class="form-control" id="exampleInputEmail1" placeholder="Duration">
                                </div>
                                
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-5">
                                    <label for="exampleInputEmail1">Lesson2</label>
                                    <input type="text" name="video_name2" class="form-control" id="exampleInputEmail1" placeholder="Video Name">
                                </div>
                                <div class="form-group mb-4 col-lg-5"style=" margin-left:2px !important" >
                                    <label for="exampleInputEmail1">Lesson2</label>
                                    <input type="text" name="video_url2" class="form-control" id="exampleInputEmail1" placeholder="Video URL">
                                </div>
                                <div class="form-group mb-4 col-lg-2" style=" margin-left:2px !important">
                                    <label for="exampleInputEmail1">Lesson2</label>
                                    <input type="number" name="video_duration2" class="form-control" id="exampleInputEmail1" placeholder="Duration">
                                </div>
                                
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-5">
                                    <label for="exampleInputEmail1">Lesson 3</label>
                                    <input type="text" name="video_name3" class="form-control" id="exampleInputEmail1" placeholder="Video Name">
                                </div>
                                <div class="form-group mb-4 col-lg-5"style=" margin-left:2px !important" >
                                    <label for="exampleInputEmail1">Lesson 3</label>
                                    <input type="text" name="video_url3" class="form-control" id="exampleInputEmail1" placeholder="Video URL">
                                </div>
                                <div class="form-group mb-4 col-lg-2" style=" margin-left:2px !important">
                                    <label for="exampleInputEmail1">Lesson 3</label>
                                    <input type="number" name="video_duration3" class="form-control" id="exampleInputEmail1" placeholder="Duration">
                                </div>
                                
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-5">
                                    <label for="exampleInputEmail1">Lesson 4</label>
                                    <input type="text" name="video_name4" class="form-control" id="exampleInputEmail1" placeholder="Video Name">
                                </div>
                                <div class="form-group mb-4 col-lg-5"style=" margin-left:2px !important" >
                                    <label for="exampleInputEmail1">Lesson 4</label>
                                    <input type="text" name="video_url4" class="form-control" id="exampleInputEmail1" placeholder="Video URL">
                                </div>
                                <div class="form-group mb-4 col-lg-2" style=" margin-left:2px !important">
                                    <label for="exampleInputEmail1">Lesson 4</label>
                                    <input type="number" name="video_duration4" class="form-control" id="exampleInputEmail1" placeholder="Duration">
                                </div>
                                
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-5">
                                    <label for="exampleInputEmail1">Lesson 5</label>
                                    <input type="text" name="video_name5" class="form-control" id="exampleInputEmail1" placeholder="Video Name">
                                </div>
                                <div class="form-group mb-4 col-lg-5" style=" margin-left:2px !important" >
                                    <label for="exampleInputEmail1">Lesson 5</label>
                                    <input type="text" name="video_url5" class="form-control" id="exampleInputEmail1" placeholder="Video URL">
                                </div>
                                <div class="form-group mb-4 col-lg-2" style=" margin-left:2px !important">
                                    <label for="exampleInputEmail1">Lesson 5</label>
                                    <input type="number" name="video_duration5" class="form-control" id="exampleInputEmail1" placeholder="Duration">
                                </div>
                                
                            </div>
                            <div class="col-lg-12 " style="display: flex; justify-content:space-between">
                                
                                <div class="col-lg-6">
                                    <a href="/add_course"><input style="padding:0.5rem 1rem ; border:none ; background-color: #0071dc; color:#fff; margin-top:8px;  border-radius:5px"type="Submit" name="Done" value="Done"></a>
                                </div>
                                <div class="col-lg-6" style="margin-left:35%">
                                    <button style="padding:0.5rem 1rem ; border:none ; background-color: #0071dc; color:#fff; margin-top:8px;  border-radius:5px">Submit</button>
                                </div>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
</div>
</section>
@endsection
<script>
    //var_down = document.getElementById("GFG_DOWN");
    //Create a brake line element
    // var br = document.createElement('br');
    // var down = document.getElementById("GFG_DOWN"); 

            

    // Create a break line element 

    // var br = document.createElement("br");  

    // function GFG_Fun() { 

    //             $count = 0;


    // Create a form synamically 

    // var div = document.createElement("div"); 
  
    // div.setAttribute("class", "col-lg-12"); 

    

 

    // Create an input element for Full Name 

    // var div1 = document.createElement("div"); 

    // div1.setAttribute("class", "form-group mb-4 col-lg-12"); 
    // div.setAttribute("style", "display: flex !important"); 

    // FN.setAttribute("name", "FullName"); 

    // FN.setAttribute("placeholder", "Full Name"); 
    
    //create label
    // var label = document.createElement("label"); 

    // label.setAttribute("value", "Video Name"); 
  

     // Create an input element for date of birth 

    //  var video  = document.createElement("input"); 

    //  video.setAttribute("type", "text"); 

    //  video.setAttribute("name", "video_name+{$count}"); 

    //  video.setAttribute("placeholder", "Video_name"); 
    //  video.setAttribute('class', "form-control col-lg-4");

    //     var video1  = document.createElement("input"); 

    //     video1.setAttribute("type", "text"); 

    //     video1.setAttribute("name", "video_name+{$count}"); 

    //     video1.setAttribute("placeholder", "Video_url"); 
    //     video1.setAttribute('class', "form-control col-lg-4");
    //         var video2  = document.createElement("input"); 

    //         video2.setAttribute("type", "number"); 

    //         video2.setAttribute("name", "video_name+{$count}"); 

    //         video2.setAttribute("placeholder", "Video_duration"); 
    //         video2.setAttribute('class', "form-control col-lg-4");
    //   div1.appendChild(label); 
    //   label.appendChild(br.cloneNode());  
    //   div1.appendChild(video);
    // div1.append('Video');
    // div1.appendChild(video);
    // div1.appendChild(video1);
    // div1.appendChild(video2);

    // div.appendChild(div1);
     // Create an input element for emailID 

    //  var EID = document.createElement("input"); 

    //  EID.setAttribute("type", "text"); 

    //  EID.setAttribute("name", "emailID"); 

    //  EID.setAttribute("placeholder", "E-Mail ID"); 

  

      // Create an input element for password 

    //   var PWD = document.createElement("input"); 

    //   PWD.setAttribute("type", "password"); 

    //   PWD.setAttribute("name", "password"); 

    //   PWD.setAttribute("placeholder", "Password"); 

  

       // Create an input element for retype-password 

    //    var RPWD = document.createElement("input"); 

    //    RPWD.setAttribute("type", "password"); 

    //    RPWD.setAttribute("name", "reTypePassword"); 

    //    RPWD.setAttribute("placeholder", "ReEnter Password"); 

  

                // create a submit button 

                // var s = document.createElement("input"); 

                // s.setAttribute("type", "submit"); 

                // s.setAttribute("value", "Submit"); 

                  

                // Append the full name input to the form 

                // form.appendChild(FN);  

                  

                // Inserting a line break 

                // form.appendChild(br.cloneNode());  

                  

                // Append the DOB to the form 

                // form.appendChild(DOB);  

                // form.appendChild(br.cloneNode());  

                  

                // Append the emailID to the form 

                // form.appendChild(EID);  

                // form.appendChild(br.cloneNode());  

                  

                // Append the Password to the form 

                // form.appendChild(PWD);  

                // form.appendChild(br.cloneNode());  

                  

                // Append the ReEnterPassword to the form 

                // form.appendChild(RPWD);  

                // form.appendChild(br.cloneNode());  

                  

                // Append the submit button to the form 

                // form.appendChild(s);  

  

            //     document.getElementsByTagName("body")[0] 

            //    .appendChild(form); 
//             document.getElementsByTagName("form")[$count] 

//                .appendChild(div); 
//             $count++;
//             } 
// </script>
@include('admin.admincomponents.sidebar')