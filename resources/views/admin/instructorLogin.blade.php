@extends('components.header')
@section('title')
    Login
@endsection
@section('content')
<a class="navbar-brand ms-0 container container-wd"  href="/">
    <img src="assets/img/brand-dark.svg" class="navbar-brand-img " style="margin-top: 15px !important" alt="...">
    {{-- <img src="images/brand-dark1.png" style="width: 250px; height:250px" class="navbar-brand-img" alt="..."> --}}
</a>
   <!-- Signup -->
   <div class="container my-2">
    <div class="row">
        <div class="col-lg-5 col-xl-6 mb-6 mb-lg-0">
            <!-- Illustrator -->
            <img src="assets/img/illustrations/illustration-5.png" class="img-fluid"  alt="...">
            {{-- <img src="assets/img/illustrations/illustration-11.svg" alt="..." class="img-fluid"> --}}
        </div>

        <div class="col-lg-7 col-xl-6">
            <div >
                <div class="modal-header" style="border-bottom: none; padding-bottom: 0px !important" >
                    <h5 class="modal-title">Admin LogIn</h5>
                </div>
        
                <div class="modal-body">
                    
                    <form action="" method="POST">
                        @csrf
                        <div class="form-label-group">
                          <input type="email" name="email" class="form-control form-control-flush" id="cardEmail" placeholder="Email">
                          <label for="cardEmail">Email</label>
                        </div>
                        <div class="form-label-group">
                          <input type="password" name="password" class="form-control form-control-flush" id="cardPassword" placeholder="Password">
                          <label for="cardPassword">Password</label>
                        </div>
                        <div class="mt-6 mb-2">
                            <button  class="btn btn-pill btn-helio btn-gradient-1 text-white btn-x-wide shadow lift mb-5 mt-1"  type="submit">
                                LOG IN
                            </button>
                        </div>
                      </form>
        
                    <!-- Text -->
                    {{-- <p class="mb-0 font-size-sm text-center">
                        Don't have an account? <a class="text-underline" href="/instructorR" role="button" >Register</a>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</div>



   
</div>
</div>
</div>



@endsection