    
@extends('components.header')
@section('title')
    Courses
@endsection
@section('content')
@include('admin.navbar')
 <!-- PAGE TITLE
    ================================================== -->
    {{-- <header class="py-8 py-md-11" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">All Courses</h1>
            
        </div>
       
    </header> --}}


    <!-- CONTROL BAR
    ================================================== -->
    <div class="position-absolute top-0 right-0">
        <img src="assets/img/illustrations/illustration-7.svg" class="img-fluid" alt="...">
    </div>
    <!--================================================== -->
    <div class="container" >
        <div class="row">
            <div class="col-xl-4 mb-5 mb-xl-0">
                <!-- SIDEBAR FILTER
                ================================================== -->
                <div class=" vertical-scroll" id="courseSidebar" >
                    <div class="border rounded mb-6 @@widgetBG" style="height:100% !important; width:70% !important" >
                        <div>
                            <h4><i class="fas fa-profile"></i>Welcome <span>Student</span></h4>
                        </div>
                        <!-- Heading -->
                        <div id="coursefilter1 align-items-center" class="" >
                            <h4 class="mb-0"style="padding: 3rem 1rem 1rem !important">
                                <a href="/courses1"><span><i class="fas fa-book"></i></span> All Courses</a>
                            </h4>
                            <h4 class="mb-0 " style="padding: 1rem !important">
                                  <a href="/profile1"> <span><i class="fas fa-users"></i></span> Profile</a>
                            </h4>
                            
                            <h4 class="mb-0"style="padding: 1rem !important">
                                <a href=""><span><i class="fas fa-sign-out-alt"></i></span> Logout</a>
                            </h4>
                        </div>

                        
                    </div>

                </div>

            </div>

            <div class="col-xl-8" >
                <div class="row row-cols-md-2 mb-3 ">
                    <div class="card" style="background-color:transparent !important; border:1px solid rgba(0,0,0,0.1) !important">
                        <div class="card-body">
                            <h4 style="margin-bottom: 3rem !important">Please complete your profile</h4>
                          <form >
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-6">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                </div>
                                <div class="form-group mb-4 col-lg-6" style=" margin-left:2px !important">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-6">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">
                                </div>
                                <div class="form-group mb-4 col-lg-6" style=" margin-left:2px !important">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Bio">
                                </div>
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-6">
                                    <label for="exampleInputEmail1">Profile Picture</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">
                                </div>
                                <div class="form-group mb-4 col-lg-6" style=" margin-left:2px !important">
                                    <label for="exampleInputEmail1">Bio</label>
                                    <textarea type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Bio"></textarea>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
          
                        </div>
                      </div>
                </div>
            </div>

                <!-- PAGINATION
                ================================================== -->
                

            </div>
        </div>
    </div>


@include('components.footer')
@endsection