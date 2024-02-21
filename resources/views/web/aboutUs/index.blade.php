@extends('web.webLayout.web')
@section('content')
<!-- Start banner Area -->
<section class="banner-area relative about-banner" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">About Us</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start about Area -->
	<section class="info-area"style="padding:50px 0px">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6 no-padding info-area-left">
					<img class="img-fluid" src="{{ asset('webasset/images/about.jpg')}}" alt=""style="border-radius:.3rem">
				</div>
				<div class="col-lg-6 info-area-right">
					<h1>
					Who we are
					</h1>
					<p>
                        RECTUS Training & Consultancy is a leading organization in the field of strategy implementation and behavioural training and consulting. Our basic ability lies in successfully supporting the organizational strategies with people, processes, and systems (Information Technology) in order to improve the transformational or cultural performance and make the operations more effective.</p>
					<br>
					<p>
                        Our team comprises of highly talented, determined, enthused, active, and experienced professionals, who possess years of experience and expertise and put in their best efforts in every project. We have been able to earn reputation, trustworthiness, and goodwill through our wide-ranging training programs and consulting solutions that cover a huge section of subjects and aptitude areas. Different types of course delivery formats are designed by us so as to fulfill the individual needs of the trainees and customize the training schedules. We work closely with our clients and try our best to understand their objectives and help them overcome the challenges they are facing constantly. We come up with unique solutions that will fit your organizational requirements.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End about Area -->
<!--Start Our Vision-->
<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<h3 class="mb-30">Our Vision</h3>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
                            We have our dedicated teams that encourage our clients to explore and utilize their full potential and empower them to make the best use of their available tools and resources					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Our vision-->
	<!--Start Our Mission-->
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<h3 class="mb-30">Our Mission</h3>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
						<p>
                            We aim to assist our clients in optimizing the capacities of their existing assets and resources and in improving the performance of their workforce to ensure their business reach new heights of development. We help our clients to get the maximum business output that would not have been possible for them to achieve on their own.                        </p>
                        <p>
                            There are certain sets of skills and behaviors that both individuals and teams need to possess in order to reach the pinnacle of success in their professional career at present as well as, in the future – we guide the professionals to reach that point of success and development by providing them with the required skills and expertise. We are always there to listen to your problem and provide our solution to it as well as, take the necessary actions to drive you towards your goals.
                        </p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Our Mission-->

	<!--Start Our Service Quality-->
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<h3 class="mb-30">Our Service Quality</h3>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
                            RECTUS is a client-centric service provider where our service quality focuses on ultimate customer satisfaction which serves as the cornerstone of the business. We see our success in the success of our clients in reaching their goals - that's the value we place. Our customer service strategy is evaluated constantly throughout the year to measure our performance to meet the customers' expectations and their needs along with the associated performances of venues and trainers. We focus on building excellent relationships with our clients to enhance their satisfaction with us which is our pride and the tool to benchmark and measure our success.
					 </div>
				</div>
			</div>
		</div>
	</div>
	<!--End Our Service Quality-->
	<!--Start OOur Values-->
<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<h3 class="mb-30">Our Values</h3>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
						<ul>
						<li>•	Mastery: Providing knowledge and skills to enhance confidence and mastery</li>
						<li>•	Excellence: Set the quality standards by which individual and team performance are measured and rewarded</li>
						<li>•	Innovation: Implementing new ideas, creating dynamic products while consistently improving existing services</li>
						<li>•	Reliability: Measuring performance to improve quality standards</li>
						<li>•	Client-Centricity: Ensuring the customers' satisfaction first</li>
						<li>•	Integrity: Committed to honesty, respect, and open communication whilst adhering to ethical standards</li>
						<li>•	Commitment: Delivering high-quality service and vigilant regard for our clients</li>
</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Our Values-->

	<!-- Start Clients Area -->
<div class="row d-flex justify-content-center" style="margin:0px !important">
	<div class="menu-content pb-15">
		<div class="title text-center">
			<h4 class="text-color" style="font-family:pruistin;font-size:30px;padding-top:50px">Our Clients</h4>
			<h1 class="mb-10" style="font-size:30px">Our Clients</h1>
			<p>Dedicated to ongoing enhancement

</p>
		</div>
	</div>
</div>
<section class="popular-course-area section-gap" style="background-color:#fff">
	<div class="">
		<div class="row" style="margin:0px !important">
			<div class="active-popular-carusel">
				@foreach($clients as $client)
				<div class="single-popular-carusel">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid"
							src="{{ asset('uploads/clients')}}/{{ $client->client_logo_url }}" alt="{{ $client->client_name }}"
							style="max-height:100px;max-width:200px">
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</section>
<!-- End Clients Area -->

@endsection
	@section('scripts')
    @endsection
