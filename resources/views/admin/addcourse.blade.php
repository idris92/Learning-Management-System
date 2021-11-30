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
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-6">
                                    <label for="exampleInputEmail1">Course title</label>
                                    <input type="text" name="course_title" class="form-control" id="exampleInputEmail1" placeholder="Course title">
                                </div>
                                <div class="form-group mb-4 col-lg-6">
                                    <label for="exampleInputEmail1">Course price</label>
                                    <input type="number" name="course_price" class="form-control" id="exampleInputEmail1" placeholder="Course price">
                                </div>
                                
                            </div>
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-6" >
                                    <label for="exampleInputEmail1">Course subtitle</label>
                                    <textarea type="text" name="course_subtitle" class="form-control" id="exampleInputEmail1" placeholder="Course subtitle"></textarea>
                                </div>
                                <div class="form-group mb-4 col-lg-6" style=" margin-left:8px !important">
                                    <label for="exampleInputEmail1">Course description</label>
                                    <textarea type="text" name="course_description" class="form-control" id="exampleInputEmail1" placeholder="Course description"></textarea>
                                </div>
                            </div>
                           
                            <div class="col-lg-12 " style="display: flex;">
                                <div class="form-group mb-4 col-lg-6" >
                                    <label for="exampleInputEmail1">Categories</label>
                                    <select name="category" class="form-control">
                                            <option value="Art" selected>Art</option>
                                            <option value="Exercise">Exercise</option>
                                            <option value="Material Design">Material Design</option>
                                            <option value="System Development">System Development</option>
                                            <option value="Music">Music</option>
                                            <option value="Photography">Photography</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4 col-lg-6" style=" margin-left:8px !important">
                                    <label for="exampleInputEmail1">Video Image</label>
                                    <input  type="file" class="form-control" id="exampleInputEmail1" name="videoimage">
                                </div>
                            </div>
                            <div>
                                <a href=""><button style="padding:0.5rem 1rem ; border:none ; background-color: #0071dc; color:#fff; margin-top:8px; margin-left:90%; border-radius:5px">Next</button></a>
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