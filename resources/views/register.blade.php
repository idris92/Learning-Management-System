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
            <img src="assets/img/illustrations/illustration-11.svg" alt="..." class="img-fluid">
        </div>

        <div class="col-lg-7 col-xl-6">
            <div >
                <div class="modal-header" style="border-bottom: none; padding-bottom: 0px !important">
                    <h5 class="modal-title">Sign Up and Start Learning!</h5>
                </div>
        
                <div class="modal-body">
                    
                    <form>
                        <div class="form-label-group">
                          <input type="text" class="form-control form-control-flush" id="cardName" placeholder="Name">
                          <label for="cardName">Name</label>
                        </div>
                        <div class="form-label-group">
                          <input type="email" class="form-control form-control-flush" id="cardEmail" placeholder="Email">
                          <label for="cardEmail">Email</label>
                        </div>
                        <div class="form-label-group">
                          <input type="password" class="form-control form-control-flush" id="cardPassword" placeholder="Password">
                          <label for="cardPassword">Password</label>
                        </div>
                        <div class="mt-6 mb-2">
                            <button class="btn btn-block btn-primary" type="submit">
                                SIGN UP
                            </button>
                        </div>
                      </form>
        
                    <!-- Text -->
                    <p class="mb-0 font-size-sm text-center">
                        Already have an account? <a class="text-underline"  href="/login" role="button" >Log In</a>
                    </p>
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