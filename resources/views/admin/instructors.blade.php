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
            
            <!-- dashboard-area end  -->
            <div class="dashboard-course">
                <h5 class="dashboard-title">Instructors</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                
                            
                          <tr>
                            {{-- <th scope="row">Java (Beginner) Programming Tutorials
                            </th> --}}
                            <td>{{$item->id}}</td>
                            <td>{{$item->firstname}}</td>
                            <td>{{$item->lastname}}</td>
                            <td>{{$item->email}}</td>
                            <form action="" method="post">
                                @csrf
                            <td hidden ><input type="text" name="id" value="{{$item->id}}"></td>
                            <td>
                                <select name="status">
                                    <option selected disabled>{{$item->type_of_user}}</option>
                                    <option value="active" >active</option>
                                    <option value="suspended">suspended</option>
                                </select>
                            </td>
                            <td><button type="submit" style="border:none; padding:6px; background-color:#0071dc; color: #fff;border-radius: 3px">Update</td>
                            </form>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
        <!-- dashboard-left-menu start  -->
       
@endsection
@include('admin.admincomponents.sidebar')