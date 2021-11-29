@extends('components.header')
@section('title')
    Register
@endsection
@section('content')
@include('components.navbar')   
   <!-- Signup -->
   <div class="container my-12">
    <div class="row">
        <div class="col-lg-5 col-xl-6 mb-6 mb-lg-0">
            <!-- Illustrator -->
            <img src="assets/img/illustrations/illustration-5.png" class="img-fluid"  alt="...">
            {{-- <img src="assets/img/illustrations/illustration-11.svg" alt="..." class="img-fluid"> --}}
        </div>

        <div class="col-lg-7 col-xl-6">
            <div >
                <div class="modal-header" style="border-bottom: none; padding-bottom: 0px !important">
                    <h5 class="modal-title">Sign Up and Start Earning!</h5>
                </div>
        
                <div class="modal-body">
                    
                    <form action="" method="post">
                        @csrf
                        <div class="form-label-group">
                          <input type="text" name="firstname" class="form-control form-control-flush" id="cardName" placeholder="Firstname">
                          <label for="cardName">Firstname</label>
                        </div>
                        <div class="form-label-group">
                            <input type="text" name="lastname" class="form-control form-control-flush" id="cardName" placeholder="Lastname">
                            <label for="cardName">Lastname</label>
                          </div>
                        <div class="form-label-group">
                          <input type="email" name="email" class="form-control form-control-flush" id="cardEmail" placeholder="Email">
                          <label for="cardEmail">Email</label>
                        </div>
                        <div class="form-label-group">
                          <input type="password" name="password" class="form-control form-control-flush" id="cardPassword" placeholder="Password">
                          <label for="cardPassword">Password</label>
                        </div>
                        <div class="mt-6 mb-2">
                            <button class="btn btn-pill btn-helio btn-gradient-1 text-white btn-x-wide shadow lift mb-5 mt-1" data-aos="fade-up" data-aos-duration="200" type="submit">
                                SIGN UP
                            </button>
                        </div>
                      </form>
        
                    <!-- Text -->
                    {{-- <p class="mb-0 font-size-sm text-center ml-0">
                        Already have an account? <a class="text-underline"  href="/instructorL" role="button" >Log In</a>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</div>



   
</div>
</div>
</div>


@include('components.footer')
@endsection