<div class="dashboard-left-menu">
    <div class="row">
        <span class="header-user col-lg-12" >
            @if (Auth::User()->profileimage == null)
                <a href="#"><img src="assets/img/author/02.png" alt="img"></a>
            @else
                <a href="#"><img style="width: 5rem; height:5rem; border-radius: 100% !important" src="images/{{Auth::User()->profileimage}}" alt="admin image"></a>
            @endif
            
            {{-- <span class="col-lg-6">Hello,
                <h5>{{Auth::User()->firstname}} {{Auth::User()->lastname}}</h5>
            </span> --}}
        </span>
    </div>
    <ul>
        <li class="nav-item" style="padding-right: 1rem !important">
            <a class="dashboard-item-menu"  href="/dashboard2"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>
        <li class="nav-item" style="padding-right: 1rem !important">
            <a class="dashboard-item-menu"  href="/adminprofile"><i class="fa fa-user"></i> My Profile</a>
        </li>
        <li class="nav-item" style="padding-right: 1rem !important">
            <a class="dashboard-item-menu"  href="/admin_allcourses"><i class="fas fa-graduation-cap"></i>All Courses</a>
        </li>
        @if (Auth::User()->status == 'superadmin')
         <li class="nav-item" style="padding-right: 1rem !important">
            <a class="dashboard-item-menu"  href="/all_instructor"><i class="fas fa-bookmark"></i>Instructors</a>
        </li>
        <li class="nav-item" style="padding-right: 1rem !important">
            <a class="dashboard-item-menu"  href=""><i class="fas fa-star"></i>Income</a>
        </li>
        @endif
        {{--<li class="nav-item">
            <a class="dashboard-item-menu"  href="#"><i class="fab fa-buffer"></i>My Quiz Attempts</a>
        </li>
        <li class="nav-item">
            <a class="dashboard-item-menu"  href="#"><i class="fa fa-shopping-cart"></i>Purchase History</a>
        </li>
        <li class="nav-item">
            <a class="dashboard-item-menu"  href="#"><i class="fa fa-rocket"></i>My Courses</a>
        </li>
        <li class="nav-item">
            <a class="dashboard-item-menu"  href="#"><i class="fas fa-money-check"></i>Earnings</a>
        </li>
        <li class="nav-item">
            <a class="dashboard-item-menu"  href="#"><i class="fas fa-wallet"></i>Withdrawal</a>
        </li>
        <li class="nav-item">
            <a class="dashboard-item-menu"  href="#"><i class="fas fa-question-circle"></i>Quiz Attempts</a>
        </li>
        <li class="nav-item">
            <a class="dashboard-item-menu"  href="#"><i class="fas fa-user-graduate"></i>Question & Answer</a>
        </li>
        <li class="nav-item">
            <a class="dashboard-item-menu"  href="#"><i class="fas fa-book"></i>Assignments</a>
        </li>
        <li class="nav-item">
            <a class="dashboard-item-menu"  href="#"><i class="fas fa-cog"></i>Settings</a>
        </li> --}}
        <li class="nav-item">
            <a class="dashboard-item-menu"  href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </li>
    </ul>
</div>
</section> 

{{-- <div class=" vertical-scroll" id="courseSidebar" >
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
            @if (Session::get('status')=="superadmin")
                <h4 class="mb-0"style="padding: 1rem !important">
                    <a href=""><span><i class="fas fa-book"></i></span> Instructor</a>
                </h4>
                <h4 class="mb-0 " style="padding: 1rem !important">
                    <a href=""> <span><i class="fas fa-users"></i></span> Earnings</a>
                </h4>
            @endif
            <h4 class="mb-0"style="padding: 1rem !important">
                <a href="/logout"><span><i class="fas fa-sign-out-alt"></i></span> Logout</a>
            </h4>
        </div>

        
    </div>

</div> --}}