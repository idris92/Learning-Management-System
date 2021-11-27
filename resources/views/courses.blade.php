    
@extends('components.header')
@section('title')
    Courses
@endsection
@section('content')
@include('components.navbar')
 <!-- PAGE TITLE
    ================================================== -->
    <header class="py-4 py-md-7" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Courses</h1>
        </div>
        <!-- Img -->
        {{-- <img class="d-none img-fluid" src="...html" alt="..."> --}}
    </header>


    <!-- CONTROL BAR
    ================================================== -->
    <div class="container mb-2 mb-xl-4 z-index-2">
        <div class="d-lg-flex align-items-center mb-6 mb-xl-0">
            <p class="mb-lg-0">We found <span class="text-dark">834 courses</span> available for you</p>
            <div class="ms-lg-auto d-lg-flex flex-wrap">
                <div class="mb-4 mb-lg-0 ms-lg-6">
                    <div class="border rounded d-flex align-items-center choices-label h-50p">
                        <span class="ps-5">Sort by:</span>
                        <select class="form-select form-select-sm text-dark border-0 ps-1 bg-transparent flex-grow-1 shadow-none dropdown-menu-end" data-choices>
                            <option>Default</option>
                            <option>New Courses</option>
                            <option>Price Low to High</option>
                            <option>Price High to low</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COURSE LIST V2
    ================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-xl-4 mb-5 mb-xl-0">
                <!-- SIDEBAR FILTER
                ================================================== -->
                <div class=" vertical-scroll" id="courseSidebar">
                    <div class="border rounded mb-6 @@widgetBG">
                        <!-- Heading -->
                        <div id="coursefilter1">
                            <h4 class="mb-0">
                                <button class="p-6 text-dark fw-medium d-flex align-items-center collapse-accordion-toggle line-height-one" type="button" data-bs-toggle="collapse" data-bs-target="#coursefiltercollapse1" aria-expanded="true" aria-controls="coursefiltercollapse1">
                                    Category
                                    <span class="ms-auto text-dark d-flex">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h4>
                        </div>

                        <div id="coursefiltercollapse1" class="collapse show mt-n2 px-6 pb-6" aria-labelledby="coursefilter1" data-parent="#courseSidebar">
                            <ul class="list-unstyled list-group list-checkbox">
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="categorycustomcheckone">
                                    <label class="custom-control-label font-size-base" for="categorycustomcheckone">Art (8)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="categorycustomcheck2">
                                    <label class="custom-control-label font-size-base" for="categorycustomcheck2">Exercise (8)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="categorycustomcheck3">
                                    <label class="custom-control-label font-size-base" for="categorycustomcheck3">Material Design (7)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="categorycustomcheck4">
                                    <label class="custom-control-label font-size-base" for="categorycustomcheck4">Software Development (6)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="categorycustomcheck5">
                                    <label class="custom-control-label font-size-base" for="categorycustomcheck5">Music (6)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="categorycustomcheck6">
                                    <label class="custom-control-label font-size-base" for="categorycustomcheck6">Photography (6)</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="border rounded mb-6 @@widgetBG">
                        <!-- Heading -->
                        <div id="coursefilter2">
                            <h4 class="mb-0">
                                <button class="p-6 text-dark fw-medium d-flex align-items-center collapse-accordion-toggle line-height-one" type="button" data-bs-toggle="collapse" data-bs-target="#coursefiltercollapse2" aria-expanded="true" aria-controls="coursefiltercollapse2">
                                    Instructors
                                    <span class="ms-auto text-dark d-flex">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h4>
                        </div>

                        <div id="coursefiltercollapse2" class="collapse show mt-n2 px-6 pb-6" aria-labelledby="coursefilter2" data-parent="#courseSidebar">
                            <!-- Search -->
                            <form class="mb-4">
                                <div class="input-group">
                                    <input class="form-control form-control-sm border-end-0 shadow-none" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-outline-white border-start-0 text-dark bg-transparent" type="submit">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"/>
                                                <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"/>
                                            </svg>

                                        </button>
                                    </div>
                                </div>
                            </form>

                            <ul class="list-unstyled list-group list-checkbox list-checkbox-limit">
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="instructorscustomcheck1">
                                    <label class="custom-control-label font-size-base" for="instructorscustomcheck1">Chris Convrse (03)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="instructorscustomcheck2">
                                    <label class="custom-control-label font-size-base" for="instructorscustomcheck2">Morten Rand (15)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="instructorscustomcheck3">
                                    <label class="custom-control-label font-size-base" for="instructorscustomcheck3">Rayi Villalobos (125)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="instructorscustomcheck4">
                                    <label class="custom-control-label font-size-base" for="instructorscustomcheck4">James William (1.584)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="instructorscustomcheck5">
                                    <label class="custom-control-label font-size-base" for="instructorscustomcheck5">Villalobos (584)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="instructorscustomcheck6">
                                    <label class="custom-control-label font-size-base" for="instructorscustomcheck6">Rand joe (44)</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="border rounded mb-6 @@widgetBG">
                        <!-- Heading -->
                        <div id="coursefilter3">
                            <h4 class="mb-0">
                                <button class="p-6 text-dark fw-medium d-flex align-items-center collapse-accordion-toggle line-height-one" type="button" data-bs-toggle="collapse" data-bs-target="#coursefiltercollapse3" aria-expanded="true" aria-controls="coursefiltercollapse3">
                                    Price
                                    <span class="ms-auto text-dark d-flex">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h4>
                        </div>

                        <div id="coursefiltercollapse3" class="collapse show mt-n2 px-6 pb-6" aria-labelledby="coursefilter3" data-parent="#courseSidebar">
                            <ul class="list-unstyled list-group list-checkbox">
                                <li class="custom-control custom-radio">
                                    <input type="radio" id="pricecustomradio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label font-size-base" for="pricecustomradio1">All (18)</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input type="radio" id="pricecustomradio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label font-size-base" for="pricecustomradio2">Free (3)</label>
                                </li>
                                <li class="custom-control custom-radio">
                                    <input type="radio" id="pricecustomradio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label font-size-base" for="pricecustomradio3">Paid (15)</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="border rounded mb-6 @@widgetBG">
                        <!-- Heading -->
                        <div id="coursefilter4">
                            <h4 class="mb-0">
                                <button class="p-6 text-dark fw-medium d-flex align-items-center collapse-accordion-toggle line-height-one" type="button" data-bs-toggle="collapse" data-bs-target="#coursefiltercollapse4" aria-expanded="true" aria-controls="coursefiltercollapse4">
                                    Level
                                    <span class="ms-auto text-dark d-flex">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h4>
                        </div>

                        <div id="coursefiltercollapse4" class="collapse show mt-n2 px-6 pb-6" aria-labelledby="coursefilter4" data-parent="#courseSidebar">
                            <ul class="list-unstyled list-group list-checkbox">
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="levelcustomcheck1">
                                    <label class="custom-control-label font-size-base" for="levelcustomcheck1">Beginner (03)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="levelcustomcheck2">
                                    <label class="custom-control-label font-size-base" for="levelcustomcheck2">Intermediate (15)</label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="levelcustomcheck3">
                                    <label class="custom-control-label font-size-base" for="levelcustomcheck3">Advanced (126)</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="border rounded mb-6 @@widgetBG">
                        <!-- Heading -->
                        <div id="coursefilter5">
                            <h4 class="mb-0">
                                <button class="p-6 text-dark fw-medium d-flex align-items-center collapse-accordion-toggle line-height-one" type="button" data-bs-toggle="collapse" data-bs-target="#coursefiltercollapse5" aria-expanded="true" aria-controls="coursefiltercollapse5">
                                    Rating
                                    <span class="ms-auto text-dark d-flex">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h4>
                        </div>

                        <div id="coursefiltercollapse5" class="collapse show mt-n2 px-6 pb-6" aria-labelledby="coursefilter5" data-parent="#courseSidebar">
                            <ul class="list-unstyled list-group list-checkbox">
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ratingcustomcheck1">
                                    <label class="custom-control-label font-size-base" for="ratingcustomcheck1">
                                        <span class="d-flex align-items-end">
                                            <span class="star-rating">
                                                <span class="rating" style="width:90%;"></span>
                                            </span>

                                            <span class="ms-3">
                                                <span>& up</span>
                                            </span>
                                        </span>
                                    </label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ratingcustomcheck2">
                                    <label class="custom-control-label font-size-base" for="ratingcustomcheck2">
                                        <span class="d-flex align-items-end">
                                            <span class="star-rating">
                                                <span class="rating" style="width:70%;"></span>
                                            </span>

                                            <span class="ms-3">
                                                <span>& up</span>
                                            </span>
                                        </span>
                                    </label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ratingcustomcheck3">
                                    <label class="custom-control-label font-size-base" for="ratingcustomcheck3">
                                        <span class="d-flex align-items-end">
                                            <span class="star-rating">
                                                <span class="rating" style="width:50%;"></span>
                                            </span>

                                            <span class="ms-3">
                                                <span>& up</span>
                                            </span>
                                        </span>
                                    </label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ratingcustomcheck4">
                                    <label class="custom-control-label font-size-base" for="ratingcustomcheck4">
                                        <span class="d-flex align-items-end">
                                            <span class="star-rating">
                                                <span class="rating" style="width:35%;"></span>
                                            </span>

                                            <span class="ms-3">
                                                <span>& up</span>
                                            </span>
                                        </span>
                                    </label>
                                </li>
                                <li class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ratingcustomcheck5">
                                    <label class="custom-control-label font-size-base" for="ratingcustomcheck5">
                                        <span class="d-flex align-items-end">
                                            <span class="star-rating">
                                                <span class="rating" style="width:10%;"></span>
                                            </span>

                                            <span class="ms-3">
                                                <span>& up</span>
                                            </span>
                                        </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a href="#" class="btn btn-primary btn-block mb-10">FILTER RESULTS</a>
                </div>

            </div>

            <div class="col-xl-8">
                <div class="row row-cols-md-2 mb-3 ">
                    <div class="col-md pb-4 pb-md-7">
                        <!-- Card -->
                        <div class="card border shadow p-2 lift sk-fade">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                    <a href="course-single-v5.html" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                        <!-- Icon -->
                                        <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                            <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                        </svg>

                                    </a>
                                    <a href="course-single-v5.html" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                        <!-- Icon -->
                                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                        </svg>

                                    </a>
                                </div>

                                <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                                    <img class="rounded shadow-light-lg" src="assets/img/products/product-1.jpg" alt="...">
                                </a>

                                <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                    <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                </span>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                <a href="instructors-single.html" class="d-block">
                                    <div class="avatar sk-fade-right avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                        <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </a>

                                <!-- Preheading -->
                                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                <!-- Heading -->
                                <div class="position-relative">
                                    <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                    <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                        <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                            <div class="rating" style="width:50%;"></div>
                                        </div>

                                        <div class="font-size-sm">
                                            <span>5.45 (5.8k+ reviews)</span>
                                        </div>
                                    </div>

                                    <div class="row mx-n2 align-items-end">
                                        <div class="col px-2">
                                            <ul class="nav mx-n3">
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">5 lessons</div>
                                                    </div>
                                                </li>
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">8h 12m</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-auto px-2 text-right">
                                            <del class="font-size-sm">$959</del>
                                            <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <!-- Card -->
                        <div class="card border shadow p-2 lift sk-fade">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                                    <img class="rounded shadow-light-lg" src="assets/img/products/product-2.jpg" alt="...">
                                </a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                <a href="instructors-single.html" class="">
                                    <div class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                        <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </a>

                                <!-- Preheading -->
                                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                                <!-- Heading -->
                                <div class="position-relative">
                                    <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete JavaScript Course 2020: Build Real Projects!</h4></a>

                                    <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                        <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                            <div class="rating" style="width:50%;"></div>
                                        </div>

                                        <div class="font-size-sm">
                                            <span>5.45 (5.8k+ reviews)</span>
                                        </div>
                                    </div>

                                    <div class="row mx-n2 align-items-end">
                                        <div class="col px-2">
                                            <ul class="nav mx-n3">
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">5 lessons</div>
                                                    </div>
                                                </li>
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">8h 12m</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-auto px-2 text-right">
                                            <del class="font-size-sm">$959</del>
                                            <ins class="h4 mb-0 d-block mb-lg-n1">$21.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <!-- Card -->
                        <div class="card border shadow p-2 lift sk-fade">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                                    <img class="rounded shadow-light-lg" src="assets/img/products/product-3.jpg" alt="...">
                                </a>

                                <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                    <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                                </span>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                <a href="instructors-single.html" class="">
                                    <div class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                        <img src="assets/img/avatars/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </a>

                                <!-- Preheading -->
                                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                <!-- Heading -->
                                <div class="position-relative">
                                    <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                    <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                        <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                            <div class="rating" style="width:50%;"></div>
                                        </div>

                                        <div class="font-size-sm">
                                            <span>5.45 (5.8k+ reviews)</span>
                                        </div>
                                    </div>

                                    <div class="row mx-n2 align-items-end">
                                        <div class="col px-2">
                                            <ul class="nav mx-n3">
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">5 lessons</div>
                                                    </div>
                                                </li>
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">8h 12m</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-auto px-2 text-right">
                                            <del class="font-size-sm">$959</del>
                                            <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <!-- Card -->
                        <div class="card border shadow p-2 lift sk-fade">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                                    <img class="rounded shadow-light-lg" src="assets/img/products/product-4.jpg" alt="...">
                                </a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                <a href="instructors-single.html" class="">
                                    <div class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                        <img src="assets/img/avatars/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </a>

                                <!-- Preheading -->
                                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                <!-- Heading -->
                                <div class="position-relative">
                                    <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete Financial Analyst Course 2020</h4></a>

                                    <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                        <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                            <div class="rating" style="width:50%;"></div>
                                        </div>

                                        <div class="font-size-sm">
                                            <span>5.45 (5.8k+ reviews)</span>
                                        </div>
                                    </div>

                                    <div class="row mx-n2 align-items-end">
                                        <div class="col px-2">
                                            <ul class="nav mx-n3">
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">5 lessons</div>
                                                    </div>
                                                </li>
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">8h 12m</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-auto px-2 text-right">
                                            <del class="font-size-sm">$959</del>
                                            <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <!-- Card -->
                        <div class="card border shadow p-2 lift sk-fade">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                                    <img class="rounded shadow-light-lg" src="assets/img/products/product-5.jpg" alt="...">
                                </a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                <a href="instructors-single.html" class="">
                                    <div class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                        <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </a>

                                <!-- Preheading -->
                                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                                <!-- Heading -->
                                <div class="position-relative">
                                    <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4></a>

                                    <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                        <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                            <div class="rating" style="width:50%;"></div>
                                        </div>

                                        <div class="font-size-sm">
                                            <span>5.45 (5.8k+ reviews)</span>
                                        </div>
                                    </div>

                                    <div class="row mx-n2 align-items-end">
                                        <div class="col px-2">
                                            <ul class="nav mx-n3">
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">5 lessons</div>
                                                    </div>
                                                </li>
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">8h 12m</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-auto px-2 text-right">
                                            <del class="font-size-sm">$959</del>
                                            <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <!-- Card -->
                        <div class="card border shadow p-2 lift sk-fade">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                                    <img class="rounded shadow-light-lg" src="assets/img/products/product-6.jpg" alt="...">
                                </a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                <a href="instructors-single.html" class="">
                                    <div class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                        <img src="assets/img/avatars/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </a>

                                <!-- Preheading -->
                                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                <!-- Heading -->
                                <div class="position-relative">
                                    <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4></a>

                                    <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                        <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                            <div class="rating" style="width:50%;"></div>
                                        </div>

                                        <div class="font-size-sm">
                                            <span>5.45 (5.8k+ reviews)</span>
                                        </div>
                                    </div>

                                    <div class="row mx-n2 align-items-end">
                                        <div class="col px-2">
                                            <ul class="nav mx-n3">
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">5 lessons</div>
                                                    </div>
                                                </li>
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">8h 12m</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-auto px-2 text-right">
                                            <del class="font-size-sm">$959</del>
                                            <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <!-- Card -->
                        <div class="card border shadow p-2 lift sk-fade">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                    <a href="course-single-v5.html" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                        <!-- Icon -->
                                        <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                            <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                        </svg>

                                    </a>
                                    <a href="course-single-v5.html" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                        <!-- Icon -->
                                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor"/>
                                        </svg>

                                    </a>
                                </div>

                                <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                                    <img class="rounded shadow-light-lg" src="assets/img/products/product-20.jpg" alt="...">
                                </a>

                                <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                    <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                </span>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                <a href="instructors-single.html" class="d-block">
                                    <div class="avatar sk-fade-right avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                        <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </a>

                                <!-- Preheading -->
                                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                                <!-- Heading -->
                                <div class="position-relative">
                                    <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Unity Medical Visualization: 03 Deployment and Usability</h4></a>

                                    <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                        <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                            <div class="rating" style="width:50%;"></div>
                                        </div>

                                        <div class="font-size-sm">
                                            <span>5.45 (5.8k+ reviews)</span>
                                        </div>
                                    </div>

                                    <div class="row mx-n2 align-items-end">
                                        <div class="col px-2">
                                            <ul class="nav mx-n3">
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">5 lessons</div>
                                                    </div>
                                                </li>
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">8h 12m</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-auto px-2 text-right">
                                            <del class="font-size-sm">$959</del>
                                            <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <!-- Card -->
                        <div class="card border shadow p-2 lift sk-fade">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                                    <img class="rounded shadow-light-lg" src="assets/img/products/product-21.jpg" alt="...">
                                </a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                <a href="instructors-single.html" class="">
                                    <div class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                        <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </a>

                                <!-- Preheading -->
                                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                                <!-- Heading -->
                                <div class="position-relative">
                                    <a href="course-single-v5.html" class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Cubase Pro 10 Essential Training: Advanced</h4></a>

                                    <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                        <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                            <div class="rating" style="width:50%;"></div>
                                        </div>

                                        <div class="font-size-sm">
                                            <span>5.45 (5.8k+ reviews)</span>
                                        </div>
                                    </div>

                                    <div class="row mx-n2 align-items-end">
                                        <div class="col px-2">
                                            <ul class="nav mx-n3">
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">5 lessons</div>
                                                    </div>
                                                </li>
                                                <li class="nav-item px-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex icon-uxs text-secondary">
                                                            <!-- Icon -->
                                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                            </svg>

                                                        </div>
                                                        <div class="font-size-sm">8h 12m</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-auto px-2 text-right">
                                            <del class="font-size-sm">$959</del>
                                            <ins class="h4 mb-0 d-block mb-lg-n1">$21.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PAGINATION
                ================================================== -->
                <nav class="mb-11" aria-label="Page navigationa">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>


@include('components.footer')
@endsection