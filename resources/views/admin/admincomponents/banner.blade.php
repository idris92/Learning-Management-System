<div class="main-header">
    <div class="header-wraper">
        <div class="row">
            <div class="col-xl-6">
                <span class="header-user">
                    @if (Auth::User()->profileimage == null)
                        <a href="#"><img src="assets/img/author/02.png" alt="img"></a>
                        <span>Hello,
                            <h5>{{Auth::User()->firstname}} {{Auth::User()->lastname}}</h5>
                        </span>
                    @else
                        <a href="#"><img style="width: 5rem; height:5rem;" src="images/{{Auth::User()->profileimage}}" alt="img"></a>
                        <span>Hello,
                            <h5>{{Auth::User()->firstname}} {{Auth::User()->lastname}}</h5>
                        </span>
                    @endif
                    
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
                        <a class="header-btn btn btn-white" href="/add_course" style="color: #0071dc">Create a new course</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>