@extends('landing_page_layout.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

<div class="c">
<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-bar-1" class="header-bar">
		
				<div class="header-bar-wrap">
		
					<div class="container">
						<div class="row">
							<div class="col-md-12">
		
								<div class="hb-content">
									<a class="logo logo-header" href="index.html">
										<!-- <img src="images/files/logo-header.png" data-logo-alt="images/files/logo-header-alt.png" alt=""> -->
										<h3><span style="color:white" class="text-white">Mindigoglobal</span></h3>
										<span>Landing Page</span>
									</a><!-- .logo end -->
								
								</div><!-- .hb-content end -->
		
							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .header-bar-wrap -->
		
			</div><!-- #header-bar-1 end -->

		</header><!-- #header end -->

		<!-- Banner
		============================================= -->
		<section id="banner">
		
			<div class="banner-parallax " data-banner-height="650">
				<img src="images/files/parallax-bg/img-66.jpg" alt="">
				<div class="overlay-colored color-bg-dark opacity-40"></div><!-- .overlay-colored end -->
				<div class="slide-content">
					<div style="min-height: 690px;" class="container ">
						<div class="row">
							<div class="col-md-6 col-md-push-6">

								<div class="banner-center-box">
									<div class="img-featured-1 img-bg">
										<img src="{{config('app.url')}}avatars/{{$user_data->avatar??avatar.png}}" alt="">
									</div><!-- .img-featured-1 end -->								
								</div><!-- .banner-center-box end -->

							</div><!-- .col-md-6 -->
							<div class="col-md-6 col-md-pull-6">
							
								<div class="pt-0 banner-center-box text-white">
									<h1>
										<span class="heading-300">Hi, I am</span>
										<br>
										{{$user_data->name}}
									</h1>
									<h5 class="font-weight-bold">
									We're Helping Thousands of Hard Working People To Switch It Up And Become Online Entrepreneurs
									</h5>
									<h4 class=" font-weight-bold">
									In this Web class, You Are About To Discover How To Start Your Own Successful ONLINE BUSINESS…WITH NO PREVIOUS EXPERIENCE!!!
									</h4>
									<div class="cta-subscribe cta-subscribe-1 box-form mt-40">
										<div class="box-content">
											<div class="cs-notifications">
												<div class="cs-notifications-content"></div>
											</div><!-- .cs-notifications end -->
											<form method="post" acttion="{{route('record_landing_page_leads')}}" class="redirected">

											@csrf
												<div class="form-group">
													<!-- <i class="fas fa-envelope field-icon"></i> -->
													<input type="email" name="full_name" placeholder="Full name" id="esEmail"
														class="form-control">
												</div><!-- .form-group end -->

												<div class="form-group">
													<!-- <i class="fas fa-envelope field-icon"></i> -->
													<input type="email" name="email" placeholder="Email Address" id="esEmail"
														class="form-control">
												</div><!-- .form-group end -->

												<div class="form-group">
													<!-- <i class="fas fa-envelope field-icon"></i> -->
													<input type="email" name="phone" placeholder="Phone" id="esEmail"
														class="form-control">
												</div><!-- .form-group end -->

												<div class="form-group">
													<input type="hidden" name="referrer_code" value="{{$user_data->user_code}}">	
												</div>
												
												<div class="form-group mt-2">
													<input style="background-color: #987C1E;" type="submit" class="form-control mt-2" value="Get Started">
												</div>
												<!-- .form-group end -->
											</form><!-- #form-email-subscribe end -->
										</div><!-- .box-content end -->
									</div><!-- .box-form end -->
								</div><!-- .banner-center-box end -->
							
							</div><!-- .col-md-6 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->
				</div><!-- .slide-content end -->
			</div><!-- .banner-parallax end -->
		
		</section><!-- #banner end -->

		<!-- === Section Our Services 1 =========== -->
		<div id="section-our-services-1" class="section-flat">
		
			<div class="section-content">
		
				<div class="container">
					<div class="row">
						<div class="col-md-3 mt-30 mt-md-0 mb-md-40">
				
							<h3>
								<span class="heading-300">What</span>
								<br>
								We Deliver
								<br>
							
							</h3>

						</div><!-- .col-md-3 end -->
						<div class="col-md-3 col-sm-4">

							<div class="box-info box-service-1">
								<div class="box-icon">
									<i class="far fa-lightbulb"></i>
								</div><!-- .box-icon end -->
								<div class="box-content">
									<h5><a href="javascript:;">Digital Marketing</a></h5>
									<p>
									Master the #1 Skillset For the Good life. Live, Work and Travel the world.
									</p>
								</div><!-- .box-content end -->
							</div><!-- .box-info box-service-1 end -->

						</div><!-- .col-md-3 -->
						<div class="col-md-3 col-sm-4">
						
							<div class="box-info box-service-1 mt-sm-40">
								<div class="box-icon">
									<i class="fas fa-chart-line"></i>
								</div><!-- .box-icon end -->
								<div class="box-content">
									<h5><a href="javascript:;">Online Business</a></h5>
									<p>
									Start an Online Business. Become your own boss and live life according to your terms
									</p>
								</div><!-- .box-content end -->
							</div><!-- .box-info box-service-1 end -->
						
						</div><!-- .col-md-3 -->
						<div class="col-md-3 col-sm-4">
						
							<div class="box-info box-service-1 mt-sm-40">
								<div class="box-icon">
									<i class="fas fa-check"></i>
								</div><!-- .box-icon end -->
								<div class="box-content">
									<h5><a href="javascript:;">Entrepreneurship</a></h5>
									<p>
									Become an Internet Entrepreneur.  Design the Life of your Dreams.
									</p>
								</div><!-- .box-content end -->
							</div><!-- .box-info box-service-1 end -->
						
						</div><!-- .col-md-3 -->

					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->

		<!-- === Section Our Services 2 =========== -->


		<!-- === Section Some Facts 1 =========== -->
		<div id="section-some-facts-1" class="section-flat ">
		
			<div style="background-color: black" class="section-content ">
		
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						
							<div class="section-title text-white mt-100 mt-md-0">
								<h2>
									<span class="heading-300">Some Facts of Our</span>
									<br>
									Achievements Numbers
								</h2>
								<p class="description">
								
								</p>
							</div><!-- .section-title end -->
							<a class="btn large white hover-dark rounded mt-10 move-top" href="#">Get Started</a>
						
						</div><!-- .col-md-6 end -->
						<div class="col-md-6 mt-md-60">
		
							<ul class="list-some-facts list-boxes boxes-2">
						
								<li>
									<div class="box-info box-some-fact-1 text-white">
										<div class="box-icon">
											<i class="fas fa-business-time"></i>
										</div><!-- .box-icon end -->
										<div class="box-content">
											<h2><span class="counter-stats">21600</span></h2>
											<h5>Online Businesses Created</h5>
										</div><!-- .box-content end -->
									</div><!-- .box-info box-some-fact-1 end -->
								
								</li>

								<li>
									<div class="box-info box-some-fact-1 text-white">
										<div class="box-icon">
											<i class="fas fa-business-time"></i>
										</div><!-- .box-icon end -->
										<div class="box-content">
											<h2><span class="counter-stats">21600</span></h2>
											<h5>Members</h5>
										</div><!-- .box-content end -->
									</div><!-- .box-info box-some-fact-1 end -->
								
								</li>
							</ul><!-- .list-boxes end -->
		
						</div><!-- .col-md-6 end -->
					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->

		<!-- === Section Customers Testimonials 1 =========== -->
		<div id="section-customers-testimonials-1" class="section-flat">
		
			<div class="section-content">
		
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						
							<div class="section-title">
								<h2>
									<span class="heading-300">Did You Hear About Our</span>
									<br>
									Customers Testimonials
								</h2>
							
							</div><!-- .section-title end -->

						</div><!-- .col-md-6 end -->
						<div class="col-md-12">

							<div class="slider-testimonials mt-20">
								<ul class="slick-slider">
									<li>
										<div class="slide">
											<div class="testimonial-single-1">
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div><!-- .rating end -->
												<div class="ts-content">
												I've been able to start and run my own online business. Mentoring other people from different parts of the world, courtesy of MindigoGlobal Community.
												</div><!-- .ts-content end -->
												<div class="ts-person">
													<div class="ts-img">
														<img src="images/files/sliders/clients-testimonials/prince.png" alt="">
													</div><!-- .ts-img end -->
													<div class="ts-name">
														<h5>Prince Ikilowei</h5>
														<span>Nigeria</span>
													</div><!-- .ts-name end -->
												</div><!-- .ts-person end -->
											</div><!-- .testimonial-single-1 -->
										</div><!-- .slide end -->
									</li>
									<li>
										<div class="slide">
											<div class="testimonial-single-1">
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div><!-- .rating end -->
												<div class="ts-content">
												Coming in contact with MindigoGlobal team was the best thing that has happened to me, My perspective on life and business has changed
												</div><!-- .ts-content end -->
												<div class="ts-person">
													<div class="ts-img">
														<img src="images/files/sliders/clients-testimonials/jenny.png" alt="">
													</div><!-- .ts-img end -->
													<div class="ts-name">
														<h5>Jenny Cole</h5>
														<span>Team Leader, Facebook</span>
													</div><!-- .ts-name end -->
												</div><!-- .ts-person end -->
											</div><!-- .testimonial-single-1 -->
										</div><!-- .slide end -->
									</li>
									<li>
										<div class="slide">
											<div class="testimonial-single-1">
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div><!-- .rating end -->
												<div class="ts-content">
												These guys are amazing. I haven't seen any training that has exceeded my expectation than this. I highly recommend them
												</div><!-- .ts-content end -->
												<div class="ts-person">
													<div class="ts-img">
														<img src="images/files/sliders/clients-testimonials/brian.png" alt="">
													</div><!-- .ts-img end -->
													<div class="ts-name">
														<h5>Brian </h5>
														<span>United States</span>
													</div><!-- .ts-name end -->
												</div><!-- .ts-person end -->
											</div><!-- .testimonial-single-1 -->
										</div><!-- .slide end -->
									</li>
									<li>
										<div class="slide">
											<div class="testimonial-single-1">
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div><!-- .rating end -->
												<div class="ts-content">
												MindigoGlobal team taught me digital marketing, entrepreneurship and online business. I now operate a technology and training company, training and empowering youths and women all over the country
												</div><!-- .ts-content end -->
												<div class="ts-person">
													<div class="ts-img">
														<img src="images/files/sliders/clients-testimonials/aisha.png" alt="">
													</div><!-- .ts-img end -->
													<div class="ts-name">
														<h5>Aisha Kabir Gaya</h5>
														<span>Nigeria</span>
													</div><!-- .ts-name end -->
												</div><!-- .ts-person end -->
											</div><!-- .testimonial-single-1 -->
										</div><!-- .slide end -->
									</li>
							
								</ul><!-- .slick-slider end -->
							</div><!-- .slider-testimonials end -->
		
						</div><!-- .col-md-12 end -->
					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->

		<!-- === Section Clients 1 =========== -->


		<!-- === Section CTA 1 =========== -->
		<div id="section-cta-1" class="section-parallax text-white text-center">
		
			<img src="images/files/parallax-bg/img-2.jpg" alt="">
			<div class="overlay-colored color-bg-dark opacity-50"></div><!-- .overlay-colored end -->
			<div class="section-content">
		
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
		
							<h1>
								
								Experience freedom and timeless wisdom...
							</h1>
							<p class="description">
							
							</p>
							<a class="btn x-large colorful hover-dark rounded mt-20 move-top" href="{{config('app.url')}}affiliate/{{$user_data->user_code}}">Get Started</a>
		
						</div><!-- .col-md-6 end -->
					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->
</div>


@endsection