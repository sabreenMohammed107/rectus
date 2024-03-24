@extends('web.webLayout.web')

@section('content')
    <!--Start Social Icon-->
    <div class="fixed-icon">
        <div class="f-icon f1"><a href="https://www.facebook.com/Best-Technology-Solutions-101762614785390/" target="_blank"><i
                    class="fab fa-facebook-f"></i></a></div>
        <div class="f-icon f2"><a href="https://twitter.com/bts_consultants" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="f-icon f3"><a href="https://www.linkedin.com/company/best-technology-solutions-bts" target="_blank"><i
                    class="fab fa-linkedin-in"></i></a></div>
        <div class="f-icon f3"><a href="https://wa.me/?text={{ urlencode('http://test.btsconsultant.com/public/index') }}"
                target="_blank"><i class="fab fa-whatsapp"></i></a></div>
        <div class="f-icon f4"><a href="https://www.instagram.com/best_technology_solutions/" target="_blank"><i
                    class="fab fa-instagram"></i></a></div>
    </div>
    <!--End Social Icon-->
    </div>
       <!--Start Intro Section-->
    <style>
        .video-wrapper {
            position: relative;
            width: 100%;

            overflow: hidden;
        }

        .video {
            position: relative;
        }

        .text-holder {

            position: absolute;
            color: #fff;
            left: 20%;

            top: 50%;
            bottom: 0;
            text-align: center;
            margin-top: -1em;
            font-weight: bold;
        }

        .form-control {
            font-weight: bold;
        }

        .form-control::placeholder {
            font-weight: bold;
        }

        .slide-image {
            width: 100%;
            height: 80vh;
            object-fit: cover;
            filter: brightness(0.6);
        }

        .slide-content {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 5;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            text-align: center;
            padding: 1rem;
        }

        .slide-title {
            width: 100%;
            max-width: 50rem;
            color: white;
            font-size: 2rem;
            font-weight: 500;
            text-transform: capitalize;
        }

        .slide-desc {
            width: 100%;
            max-width: 50rem;
            color: lightgray;
            font-size: 1rem;
            font-weight: 300;
        }

        .wrapper {
            position: absolute;
            top: 0;
            width: 100%;
        }

        .gradient {
            background-image: radial-gradient(circle at 36% 48%, #000000, rgba(11, 39, 65, 0.32) 87%, rgba(0, 0, 0, 0.0));
            background: rgba(4, 9, 30, 0.7) none repeat scroll 0 0;
            width: 100%;
            top: 0;
            height: calc(112vh - 80px);
            min-height: 600px;
            object-fit: cover;
            position: relative;
            z-index: 2;
        }

        .box {
            display: flex;
            position: relative;
            border-radius: 1em;
            /* background:rgba(4, 9, 30, 0.7); */
            width: 100%;
            height: 30em;
            overflow: hidden;
        }

        .box img {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            opacity: .2;
            object-fit: cover;
            object-position: center;
            height: 100%;

        }

        .box p {
            position: relative;
            margin: auto;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 4em;
            color: #fff;
            font-weight: bold;

        }
    </style>
    <section id="intro">
        <div class="banner-area relative h-100" id="home">

            {{-- <div class="overlay overlay-bg">  --}}

            <div class="wrapper">

                <div class="h-100">

                    <div class="active-popular-carusel1">

                        <div class="single-popular-carusel">

                            <img class="slide-image" src="{{ asset('webasset/images/slider/energy.jpg') }}" alt="img">
                            <div class="slide-content">
                                <h3 class="slide-title">ENGINEERING & TECHNICAL SERVICES </h3>


                            </div>

                        </div>
                        <div class="single-popular-carusel">

                            <img class="slide-image" src="{{ asset('webasset/images/slider/leadership.jpg') }}" alt="img">
                            <div class="slide-content">
                                <h3 class="slide-title">LEADERSHIP AND PROFESSIONAL GROWTH</h3>


                            </div>
                        </div>
                        <div class="single-popular-carusel">

                            <img class="slide-image" src="{{ asset('webasset/images/slider/talent.jpg') }}" alt="img">
                            <div class="slide-content">
                                <h3 class="slide-title">TALENT MANAGEMENT AND ORGANIZATIONAL DEVELOPMENT</h3>


                            </div>
                        </div>
                        <div class="single-popular-carusel">

                            <img class="slide-image" src="{{ asset('webasset/images/slider/bussiness.jpg') }}" alt="img">
                            <div class="slide-content">
                                <h3 class="slide-title">BUSINESS OPERATIONS AND COMPLIANCE</h3>


                            </div>
                        </div>
                        <div class="single-popular-carusel">

                            <img class="slide-image" src="{{ asset('webasset/images/slider/finance.jpg') }}" alt="img">
                            <div class="slide-content">
                                <h3 class="slide-title">FINANCIAL MANAGEMENT</h3>


                            </div>
                        </div>
                        <div class="single-popular-carusel">

                            <img class="slide-image" src="{{ asset('webasset/images/slider/information.jpg') }}" alt="img">
                            <div class="slide-content">
                                <h3 class="slide-title">INFORMATION TECHNOLOGY MANAGEMENT</h3>


                            </div>
                        </div>



                    </div>

                </div>


            </div>

            <!-- </div> -->
        </div>

    </section>
    <!--End Intro Section-->

    <!-- start search Area -->
    <div class="banner-area relative" id="home" style="z-index:8;top:20px">
        <div id="search-section" class="search-section section-padding feature-area">
            <div class="row" style="padding:0px;margin:0px">

                <div class="col-lg-3"></div>
                <div class="col-lg-8">
                    <div class="search-section-padding">
                        <form action="{{ route('searchForm') }}" class="search-area">

                            <div class="row form-group">
                                <div class="col-md-3" style="margin:0px 5px 10px 0px">
                                    <input type="text" class="form-control" name="wordName"
                                        placeholder="Enter Course" />
                                </div>
                                <div class="col-md-3" style="margin:0px 5px 10px 0px">
                                    <select class="form-control selectbox " name="category_id">
                                        <option value="">Select Category..</option>
                                        @foreach ($subCategories as $category)
                                            <option value='{{ $category->id }}'>
                                                {{ $category->subcategory_en_name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-3" style="margin:0px 5px 10px 0px">
                                    <select class="form-control selectbox" name="city_id">
                                        <option value="">Select Venue..</option>
                                        @foreach ($venues as $venue)
                                            <option value='{{ $venue->id }}'>
                                                {{ $venue->venue_en_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3" style="margin:0px 5px 10px 0px">

                                    <input name="start" placeholder="From Date" class="form-control" type="text"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
                                </div>
                                <div class="col-md-3" style="margin:0px 5px 10px 0px">
                                    <input name="end" placeholder="To Date" class="form-control" type="text"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
                                </div>
                                <div class="col-md-3" style="margin:0px 5px 10px 0px">
                                    <input type="submit" value="Search" class="form-control btn text-uppercase"
                                        style="background-color:#32a2a8;color:#fff !important;" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End search Area -->

    <!-- Start feature Area -->
    <section class="feature-area2 relative" style="z-index:8;top:20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="single-feature">
                        <div class="title">
                            <?php
                            $catId = 1;
                            ?>
                            <a href="{{ url('category/' . $catId) }}">
                                <h4><i class="fas fa-cogs" style="color:#ee565c;font-size:20px"></i> ENGINEERING &
                                    TECHNICAL SERVICES </h4>
                            </a>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Holistic, industry expertise, adaptability, regulatory compliance, emerging technologies, sustainability.

                            </p>

                            <a href="{{ url('category/' . $catId) }}">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-feature">
                        <div class="title">
                            <?php
                            $catId = 2;
                            ?>
                            <a href="{{ url('category/' . $catId) }}">
                                <h4><i class="fas fa-users" style="color:#ee565c;font-size:20px"></i> LEADERSHIP AND
                                    PROFESSIONAL GROWTH</h4>
                            </a>
                        </div>
                        <div class="desc-wrap">
                            <p>Tailored, diverse, industry-aligned, senior executives, leadership journey, comprehensive.
                            </p>

                            <a href="{{ url('category/' . $catId) }}">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-feature">
                        <div class="title">
                            <?php
                            $catId = 3;
                            ?>
                            <a href="{{ url('category/' . $catId) }}">
                                <h4><i class="fas fa-graduation-cap" style="color:#ee565c;font-size:20px"></i> TALENT
                                    MANAGEMENT AND ORGANIZATIONAL DEVELOPMENT</h4>
                            </a>
                        </div>
                        <div class="desc-wrap">
                            <p>Continuous development, HR expertise, energy industry focus, tailored courses, international recognition.
                            </p>

                            <a href="{{ url('category/' . $catId) }}">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-feature">
                        <div class="title">
                            <?php
                            $catId = 4;

                            ?>
                            <a href='{{ url('category/' . $catId) }}'>
                                <h4><i class="fas fa-book-reader" style="color:#ee565c;font-size:20px"></i> BUSINESS
                                    OPERATIONS AND COMPLIANCE</h4>
                            </a>
                        </div>
                        <div class="desc-wrap">
                            <p>Global markets, price volatility, geopolitical factors, risk management, trading decisions.</p>

                            <a href='{{ url('category/' . $catId) }}'>More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start Popular Courses Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-15">
                    <div class="title text-center">
                        <h4 class="text-color" style="font-family:pruistin;font-size:30px;padding-top:50px">Upcoming
                            Courses</h4>
                        <h1 class="mb-10" style="font-size:30px">Upcoming Courses We Offer</h1>
                        <p>Dedicated to ongoing enhancement</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($rounds as $round)
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" style="width:100%;height:250px"
                                src="{{ asset('uploads/courses') }}/{{ $round->course->course_image_thumbnail }}"
                                alt="{{ $round->country->country_en_name }}">
                        </div>
                        <?php $date = date_create($round->round_start_date); ?>
                        <div style=" position: relative ;height: 21%; border-bottom:1px solid #ccc;">

                            <p style="margin-top:10px;margin-bottom:20px; "class="meta">
                                <a href="{{ url('courseDetails/' . $round->course->id) }}">
                                    @if ($round->course->course_sub_category_id == 4)
                                        <h5 style="border:none; padding-bottom:30px;text-align:right">
                                            {{ Str::limit($round->course->course_en_name, 110, '') }}</h5>
                                    @else
                                        <h5 style="border:none; padding-bottom:30px;">
                                            {{ Str::limit($round->course->course_en_name, 70, '') }}</h5>
                                    @endif
                                </a>
                            </p>
                            <p class="meta" style="margin-top:10px; position: absolute;bottom:0">
                                {{ $round->venue->venue_en_name }} - {{ $round->country->country_en_name }} |
                                {{ date_format($date, 'd M, Y') }}
                                </a></p>
                        </div>

                        <div style="padding: 0 0 30px 0;">

                            @if ($round->course->course_sub_category_id == 4)
                                <p style="direction: rtl;">
                                    {{ Str::limit($round->course->course_en_desc, 400, '...') }}
                                </p>
                            @else
                                </p>
                                {{ Str::limit($round->course->course_en_desc, 200, ' ...') }}
                                </p>
                            @endif


                            <a href="{{ url('courseDetails/' . $round->course->id) }}"
                                style="position: absolute; bottom: -22px;"
                                class="details-btn d-flex justify-content-center align-items-center "><span
                                    class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Popular Courses Area -->

    <!-- Start Clients Area -->
    <div class="row d-flex justify-content-center" style="margin:0px !important">
        <div class="menu-content pb-15">
            <div class="title text-center">
                <h4 class="text-color" style="font-family:pruistin;font-size:30px;padding-top:50px">Our Clients</h4>
                <h1 class="mb-10" style="font-size:30px">Our Clients</h1>
                <p>Dedicated to ongoing enhancement</p>
            </div>
        </div>
    </div>
    <section class="popular-course-area section-gap" style="background-color:#fff">
        <div class="">
            <div class="row" style="margin:0px !important">
                <div class="active-popular-carusel">
                    @foreach ($clients as $client)
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid"
                                        src="{{ asset('uploads/clients') }}/{{ $client->client_logo_url }}"
                                        alt="{{ $client->client_name }}" style="max-height:100px;max-width:200px">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Clients Area -->

    <!--Start Counter Section-->
    {{-- <div class="row d-flex justify-content-center" style="margin:0px !important">
	<div class="menu-content pb-15">
		<div class="title text-center">
			<h4 class="text-color" style="font-family:pruistin;font-size:30px;padding-top:50px">RECTUS in Numbers</h4>
			<h1 class="mb-10" style="font-size:30px">RECTUS in Numbers</h1>
			<p>Dedicated to ongoing enhancement</p>
		</div>
	</div>
</div>
<section class="ftco-counter" id="section-counter" style="margin:0px !important">
	<div class="container">
		<div class="statistic">
			<div class="row justify-content-center ">
				<div class="col-md-12">
					<div class="row">
						@foreach ($btsNumbers as $btsNumber)
						<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
							<div class="block-18 text-center">
								<div class="text">
									<h4 class="counter" data-count="{{$btsNumber->bts_number_value}}">300</h4><br />
									<h4>{{$btsNumber->bts_number_en_name}}</h4>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
    <!-- End Counter Section-->

    <!-- Start Instructors Area -->
    {{-- <section class="popular-course-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-15">
				<div class="title text-center">
					<h4 class="text-color" style="font-family:pruistin;font-size:30px;padding-top:50px">Our Experienced Instructors</h4>
					<h1 class="mb-10" style="font-size:30px">Meet Your Trainer</h1>
					<p>Dedicated to ongoing enhancement</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="active-popular-carusel">
				@foreach ($trainers as $trainer)
				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid"
							src="{{ asset('uploads/trainers')}}/{{ $trainer->trainer_image }}" alt="{{ $trainer->trainer_name }}"
							 style="border-radius:1rem ;width:100%;height:200px">
						</div>
					</div>
					<div class="details" style="text-align:center">

							<h4>{{$trainer->trainer_name}}</h4>

						<p >{{$trainer->trainer_desc}}</p>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</section> --}}
    <!-- End Instructors Area -->

    <!-- Start become instructor Area -->
    <section class="cta-one-area relative section-gap" style="padding:120px 0px">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row justify-content-center">
                <div class="wrap">
                    <h1 class="text-white">Join Us as a Trainer </h1>
                    <p>
                        Join our group of world-class training experts and help reshape the world of learning and
                        development one training course at a time.
                    </p>
                    <a class="primary-btn wh" href="{{ route('speakers') }}">Apply For a Job</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End become instructor Area -->

    <!-- Start Parteners Area -->
    <div class="row d-flex justify-content-center" style="margin:0px !important">
        <div class="menu-content pb-15">
            <div class="title text-center">
                <h4 class="text-color" style="font-family:pruistin;font-size:30px;padding-top:50px">Our Partners</h4>
                <h1 class="mb-10" style="font-size:30px">Our Partners</h1>
                <p>Dedicated to ongoing enhancement</p>
            </div>
        </div>
    </div>
    <section class="popular-course-area section-gap" style="background-color:#fff">
        <div class="">

            <div class="row" style="margin:0px !important">
                <div class="active-popular-carusel">
                    @foreach ($partners as $partner)
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid"
                                        src="{{ asset('uploads/partners') }}/{{ $partner->partner_logo_url }}"
                                        alt="{{ $partner->partner_name }}" style="max-height:100px;max-width:200px">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Parteners Area -->


    <!--Start Download Calender-->
    <div class="row d-flex justify-content-center" style="margin:0px !important">
        <div class="menu-content pb-15">
            <div class="title text-center">
                <h4 class="text-color" style="font-family:pruistin;font-size:30px;padding-top:50px">RECTUS Schedules</h4>
                <h1 class="mb-10" style="font-size:30px">Download Complete RECTUS Schedules Here</h1>
                <p>Dedicated to ongoing enhancement</p>
            </div>
        </div>
    </div>
    <section class="ftco-counter bg-light" id="section-scedules" style="background-color:#E6E6FA!important">
        <div class="container">
            <div class="scedules">
                <div class="row justify-content-center ">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="last">
                                    <a id="downloadCurrentCalender">
                                        Calender {{ $year }}
                                    </a>
                                    <input type="hidden" name="calender"
                                        value="{{ asset('uploads/calender') }}/{{ $calender->current_year_calendar }}"
                                        alt="{{ $calender->current_year_calendar }}" />

                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="last">
                                    <a id="downloadProfile">Company Profile</a>
                                    <input type="hidden" name="campany_profile"
                                        value="{{ asset('uploads/calender') }}/{{ $calender->campany_profile }}"
                                        alt="{{ $calender->campany_profile }}" />

                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="last">
                                    <a id="downloadNextCalender">Calender {{ $year + 1 }}</a>
                                    <input type="hidden" name="nextCalender"
                                        value="{{ asset('uploads/calender') }}/{{ $calender->next_year_calendar }}"
                                        alt="{{ $calender->next_year_calendar }}" />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Download Calender-->
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#downloadCurrentCalender').click(function() {
                var calender = $('input[name="calender"]').val();


                var link = document.createElement("a");
                link.download = 'Current-Calender';
                link.href = calender;
                link.click();


            });
            $('#downloadNextCalender').click(function() {
                var calender = $('input[name="nextCalender"]').val();


                var link = document.createElement("a");
                link.download = 'Next-Calender';
                link.href = calender;
                link.click();


            });
            $('#downloadProfile').click(function() {
                var calender = $('input[name="campany_profile"]').val();


                var link = document.createElement("a");
                link.download = 'campany_profile';
                link.href = calender;
                link.click();


            });
        });
    </script>
@endsection
