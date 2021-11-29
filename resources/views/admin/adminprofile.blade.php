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
                                <a href="#" ><img style="width: 5rem; height:5rem; border-radius: 100% !important" src="images/{{Auth::User()->profileimage}}" alt="admin image"></a>
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
                <h5 class="dashboard-title">My Profile</h5>
                <a class="edit-btn" href="/adp_complete"><i class="fa fa-pencil-alt me-2"></i>Edit</a>
                <ul>
                    <li><span>Registration Date</span>{{Auth::user()->created_at}}</li>
                    <li><span>First Name</span>{{Auth::user()->firstname}}</li>
                    <li><span>Last Name</span>{{Auth::user()->lastname}}</li>
                    <li><span>Email</span>{{Auth::user()->email}}</li>
                    <li><span>Phone Number</span>{{Auth::user()->phonenumber}}</li>
                    <li><span>Skill/Occupation</span>{{Auth::user()->skill}}</li>
                    <li><span>Bio</span>{{Auth::user()->bio}}</li>
                </ul>
            </div>
        </div>
        <!-- dashboard-left-menu start  -->
       
@endsection
@include('admin.admincomponents.sidebar')