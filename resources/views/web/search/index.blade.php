@extends('web.webLayout.web')
@section('content')
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white"> Search - Courses</h1>
                <p class="text-color link-nav"><a href="{{ url('/') }}">Home </a>
                    <span class="lnr lnr-arrow-right"></span> <a>Search Result</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start course-mission Area -->
<section class="course-mission-area pb-120">
    <div class="container">
        <div class="row d-flex justify-content-center" style="padding-top:0px">
            <div class="menu-content col-lg-8">
                <div class="container title text-center">
                    <h4 class="text-color" style="font-family:pruistin;font-size:30px">Technical Training</h4>
                    <h1 class="mb-10" style="font-size:30px">Courses We Offer</h1>
                    <p>Dedicated to ongoing enhancement</p>
                </div>
            </div>
        </div>
        <br />

        <input type="hidden" id="wordName" name="wordName" value="{{$word}}">
        <input type="hidden" id="category_id" name="category_id" value="{{$category_id}}">
        <input type="hidden" id="city_id" name="city_id" value="{{$city_id}}">
        <input type="hidden" id="start" name="start" value="{{$start}}">
        <input type="hidden" id="end" name="end" value="{{$end}}">
        <div id="allsearch" class="container">
            @include('web.search.searchList')
        </div>
    </div>
</section>
<!-- End course-mission Area -->

<!-- Start courses Area -->
<!-- <section class="popular-courses-area section-gap courses-page">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h4 class="text-color" style="font-family:pruistin;font-size:30px">Technical Training</h4>
                    <h1 class="mb-10" style="font-family:;font-size:30px">Upcoming Courses</h1>
                    <p>Dedicated to ongoing enhancement</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($randomRounds as $randomRound)
            <div class="single-popular-carusel col-lg-3 col-md-6">
                <div class="thumb-wrap relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" style="width:100%;height:250px" src="{{ asset('uploads/courses')}}/{{ $randomRound->course->course_image_thumbnail }}" alt="">
                    </div>
                    <div class="meta d-flex justify-content-between">
                        <h4> {{ $randomRound->round_price }}</h4>
                    </div>
                </div>
                <div class="details">
                    <a href="course-details.html">
                        <h4>
                            {{ $randomRound->course->course_en_name }}
                        </h4>
                    </a>
                    <p>
                    {{ Str::limit($randomRound->course->course_en_desc, 200, ' ...') }}

                    </p>
                </div>
                <button type="submit" class="primary-btn" style="width:100%">Book Courses</button>
            </div>
            @endforeach
            <div class="col-lg-4"></div>
            <div class="col-lg-8 align-content-center">
                <nav class="blog-pagination justify-content-center">
                    <ul class="pagination">
                        {{ $randomRounds->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section> -->
<!-- End courses Area -->

<!-- Start search-course Area -->
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
                <h4 class="text-color" style="font-family:pruistin;font-size:30px">Technical Training</h4>
                <h1 class="mb-10" style="font-size:30px">Get Your Best Offer</h1>
                <p>Dedicated to ongoing enhancement</p>
            </div>
        </div>
    </div>
</div>
<section class="search-course-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">

        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-6 search-course-left">
                <h1 class="text-white">
                    Quality Policy
                </h1>
                <p style="color: #b8b7b7;" >

                     Providing services with a high quality that are satisfying the requirements <br>
                     Appling the specifications and legalizations to ensure the quality of service. <br>
                     Best utilization of resources for continually improving the business activities.<br>


                </p>
                <div class="row details-content">
                    <div class="col single-detials">
                        <span class="lnr lnr-graduation-hat" style="color:#32a2a8"></span>
                        <a href="#">
                            <h4>Technical Team</h4>
                        </a>
                        <p style="color: #b8b7b7;" >
                            Rectus keen to selects highly technical instructors based on professional field experience
                    </div>
                    <div class="col single-detials">
                        <span class="lnr lnr-license" style="color:#32a2a8"></span>
                        <a href="#">
                            <h4>Strengths and capabilities</h4>
                        </a>
                        <p style="color: #b8b7b7;" >
                            Since Rectus was established, it considered a training partner for world class oil & gas institution
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 search-course-right section-gap">
                <form action="{{route('reducedForm')}}" method="POST">
                    @csrf
                    <h4 class="text-white pb-20 text-center mb-30">Search For Available Course</h4>
                    <div class="form-group col-lg-12 col-md-12">
                        <input type="text" class="form-control" style="padding-bottom:10px" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
                    </div>
                    <div class="form-group col-lg-12 col-md-12">
                        <input type="number" class="form-control" style="padding-bottom:10px" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'">
                    </div>
                    <div class="form-group col-lg-12 col-md-12">

                        <input type="email" class="form-control" style="padding-bottom:10px" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
                    </div>
                    <div class="form-group col-lg-12 col-md-12">
                        <select class="selectpicker form-control" data-live-search="true" name="course_id">
                            <option datd-display="">Choose Course</option>
                            @foreach ($objectCourses as $objectCourse)
                            <option value='{{$objectCourse->id}}'>
                                {{ $objectCourse->course_en_name }}
                            </option>
                            @endforeach

                        </select>


                    </div>
                    <button type="submit" class="primary-btn text-uppercase" style="background-color:#32a2a8">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End search-course Area -->

@endsection
@section('scripts')
<script>
    $(document).ready(function() {



        //pagination
        $(document).on('click', '#category .pagination a', function(event) {

            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];

            fetch_data(page);
        });


        function fetch_data(page) {

            $.ajax({

                url: "{{ URL::to('fetch_data_search') }}?page=" + page,
                data: {

                    wordName: $("#wordName").val(),
                    category_id: $("#category_id").val(),
                    city_id: $("#city_id").val(),
                    start: $("#start").val(),
                    end: $("#end").val(),


                },

                success: function(data) {

                    $('#allsearch').html(data);
                }
            });
        }
    });
</script>
@endsection
