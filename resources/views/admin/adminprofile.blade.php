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
           @include('admin.admincomponents.banner');
            <!-- top header end  -->

            <!-- dashboard-area start  -->
            <div class="dashboard-profile-area">
                <h5 class="dashboard-title">My Profile</h5>
                <a class="edit-btn" href="/adp_complete" style="color:#0071dc"><i class="fa fa-pencil-alt me-2"></i>Edit</a>
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