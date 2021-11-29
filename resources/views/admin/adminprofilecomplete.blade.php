@extends('admin.admincomponents.adminskeleton')

@section('title')
    Dashboard
@endsection

@section('content')
    


    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div id="wave1">
            </div>
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <section class="admin-dashboard-section">
        <div class="admin-dashboard-right-side">
            <!-- top header start  -->
            <div class="main-header">
                <div class="header-wraper">
                    <div class="row">
                        <div class="col-xl-6">
                            <span class="header-user">
                                <a href="#"><img src="assets/img/author/02.png" alt="img"></a>
                                <span>Hello,
                                    <h5>{{Auth::User()->firstname}} {{Auth::User()->lastname}}</h5>
                                </span>
                            </span>
                        </div>
                        <div class="col-xl-6 align-self-center text-lg-end">
                            <div class="d-lg-flex align-items-center">
                                {{-- <div class="user-rating text-center d-inline-block">
                                    <span class="d-block">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    4.0 (172 Ratings)
                                </div> --}}
                                @if (Auth::User()->status == 'instructor')
                                    <a class="header-btn btn btn-white" href="/add_course">Create a new course</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top header end  -->

            <!-- dashboard-area start  -->
            <div class="dashboard-profile-area">
                <h5 class="dashboard-title">Profile Update</h5>
                {{-- <a class="edit-btn" href="#"><i class="fa fa-pencil-alt me-2"></i>Edit</a> --}}
                <ul>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12 " style="display: flex;">
                            <div class="form-group mb-4 col-lg-6">
                                <label for="exampleInputEmail1">Firstname</label>
                                <input type="text" name= "firstname" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->firstname}}">
                            </div>
                            <div class="form-group mb-4 col-lg-6" style=" margin-left:2px !important">
                                <label for="exampleInputEmail1">Lastname</label>
                                <input type="text" name= "lastname" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->lastname}}">
                            </div>
                        </div>
                        <div class="col-lg-12 " style="display: flex;">
                            <div class="form-group mb-4 col-lg-6">
                                <label for="exampleInputEmail1">Skill/Occupation</label>
                                <input type="text" name="skill" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->skill}}">
                            </div>
                            <div class="form-group mb-4 col-lg-6" style=" margin-left:2px !important">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" name= "phonenumber" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->phonenumber}}">
                            </div>
                        </div>
                        <div class="col-lg-12 " style="display: flex;">
                            <div class="form-group mb-4 col-lg-6">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group mb-4 col-lg-6">
                                <label for="exampleInputEmail1">Profile Picture</label>
                                <input type="file" name= "profileimage" class="form-control" id="exampleInputEmail1" >
                            </div>
                            
                        </div>
                        <div class="col-lg-12 " style="display: flex;">
                            <div class="form-group mb-4 col-lg-12" style=" margin-left:2px !important">
                                <label for="exampleInputEmail1">Bio</label>
                                <textarea type="text" name="bio" class="form-control" id="exampleInputEmail1" placeholder="Enter Bio">{{Auth::user()->bio}}"</textarea>
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Update</button>
                      </form>
                </ul>
            </div>
        </div>
        <!-- dashboard-left-menu start  -->
       
@endsection
@include('admin.admincomponents.sidebar')