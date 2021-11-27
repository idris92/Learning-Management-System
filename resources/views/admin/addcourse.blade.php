@extends('admin.admincomponents.adminskeleton')

@section('title')
    Add Course
@endsection

@section('content')

<section class="admin-dashboard-section">
<div class="admin-dashboard-right-side"style="padding:50px 0px 30px 320px !important">
            <div class="col-xl-12" >
                <div class="row row-cols-md-2 mb-3 ">
                    <div class="card" style="background-color:transparent !important; border:1px solid rgba(0,0,0,0.1) !important; width:80% !important">
                        <div class="card-body" >
                            <h4 style="color: #0071dc; text-align:center; padding-bottom:8px;">Upload a course</h4>
                        <form >
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="exampleInputEmail1">Course title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course title">
                                </div>
                                
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-6" >
                                    <label for="exampleInputEmail1">Course subtitle</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Course subtitle"></textarea>
                                </div>
                                <div class="form-group mb-4 col-lg-6" style=" margin-left:8px !important">
                                    <label for="exampleInputEmail1">Course description</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Course description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-6">
                                    <label for="exampleInputEmail1">What you will learn</label>
                                    <input  type="text" class="form-control" id="exampleInputEmail1" placeholder="What you will learn">
                                    <button style="padding:0.3rem 0.5rem ; border:none ; background-color: #0071dc; color:#fff; margin-top:8px; border-radius:5px">Add</button>
                                </div>
                                <div class="form-group mb-4 col-lg-6" style=" margin-left:8px !important">
                                    <label for="exampleInputEmail1">Requirements</label>
                                    <input  type="text" class="form-control" id="exampleInputEmail1" placeholder="Requirements">
                                    <button style="padding:0.3rem 0.5rem ; border:none ; background-color: #0071dc; color:#fff; margin-top:8px; border-radius:5px">Add</button>
                                </div>
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                
                                <div class="form-group mb-4 col-lg-6" >
                                    <label for="exampleInputEmail1">Modules</label>
                                    <input  type="text" class="form-control" id="exampleInputEmail1" placeholder="Modules">
                                    <button style="padding:0.3rem 0.5rem ; border:none ; background-color: #0071dc; color:#fff; margin-top:8px; border-radius:5px">Add</button>
                                </div>
                                <div class="form-group mb-4 col-lg-6" style=" margin-left:8px !important">
                                    <label for="exampleInputEmail1">Categories</label>
                                    <select name="Categories" class="form-control">
                                            <option>Art</option>
                                            <option>Exercise</option>
                                            <option>Material Design</option>
                                            <option>System Development</option>
                                            <option>Music</option>
                                            <option>Photography</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <button style="padding:0.5rem 1rem ; border:none ; background-color: #0071dc; color:#fff; margin-top:8px; margin-left:90%; border-radius:5px">Next</button>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
</div>
</section>
@endsection
@include('admin.admincomponents.sidebar')