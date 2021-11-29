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
            <div class="dashboard-area">
                <h5 class="dashboard-title">Dashboard</h5>
                <div class="row">
                    {{-- <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>12</h4>
                                <p>Enrolled Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>6</h4>
                                <p>Active Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>1</h4>
                                <p>Completed Courses</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>12,273</h4>
                                <p>Total Student</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>10</h4>
                                <p>Total Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>$1,232</h4>
                                <p>Total Earnings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- dashboard-area end  -->
            <div class="dashboard-course">
                <h5 class="dashboard-title">All Courses</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Course Name</th>
                            <th scope="col">Total Enrolled</th>
                            <th scope="col">Rating </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Java (Beginner) Programming Tutorials
                            </th>
                            <td>10</td>
                            <td>
                                <span class="user-rating">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        4.9
                                    </span>
                                </span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Java (Beginner) Programming Tutorials
                            </th>
                            <td>10</td>
                            <td>
                                <span class="user-rating">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        4.9
                                    </span>
                                </span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Java (Beginner) Programming Tutorials
                            </th>
                            <td>10</td>
                            <td>
                                <span class="user-rating">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        4.9
                                    </span>
                                </span>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
        <!-- dashboard-left-menu start  -->
       
@endsection
@include('admin.admincomponents.sidebar')