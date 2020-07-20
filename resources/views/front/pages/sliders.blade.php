
    @extends('makets.front.sayt')
    @section('sliders')
        <!-- ==========================
			///// Begin intro section /////
			===============================
			* Use classes "intro-xs", "intro-sm", "intro-lg" "intro-xlg" or "intro-full" to set intro size.
			* Use class "intro-full-m" to set intro size for small screens only.
			-->
			<section id="tt-intro" class="intro-full">
				<div class="tt-intro-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->


					<div class="owl-carousel cursor-grab bg-dark nav-bottom-right" data-lazy-load="true" data-items="1" data-loop="true" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-timeout="8000" data-animate-in="fadeIn" data-animate-out="fadeOut">

						<!-- Begin carousel item
						========================= -->

							@foreach ($sliders as $slider)


						<div class="cc-item">

							<!-- Begin intro image
							=======================
							* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
							-->
							<div class="intro-image-wrap parallax-6">
								<div class="intro-image bg-dark bg-image owl-lazy" data-src="{{ $slider->image }}">

									<!-- Element cover
									===================
									* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
									* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
									* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
									-->
									<div class="cover cover-opacity-5"></div>

								</div> <!-- /.intro-image -->
							</div>
							<!-- End intro image wrap -->


							<div class="intro-caption-wrap caption-animate intro-caption-lg bottom-left parallax-4">
								<div class="intro-caption-holder">
									<div class="intro-caption center">
										<h1 class="intro-title">{{ $slider->sarlavha }}</h1>
										<h2 class="intro-subtitle">{{ $slider->kichik_sarlavha }}</h2>

										<!-- Begin intro description (recommended max 170 characters!)
										============================= -->
										<div class="intro-description">
											{{ $slider->gap }}
										</div>
										<!-- End intro-description -->

										<!-- Begin intro buttons -->
										<div class="intro-buttons">
											@if (isset($slider->button_1))

											<a href="{{ $slider->button_1 }}" class="btn btn-primary margin-top-5 margin-right-10" target="_blank">Kirish</a> @endif
											@if (isset($slider->button_2))<a href="{{ $slider->button_1 }}" class="btn btn-white-bordered margin-top-5">Kirish</a>@endif
										</div>
										<!-- End intro buttons -->

									</div> <!-- /.intro-caption -->
								</div> <!-- /.intro-caption-holder -->
							</div>
							<!-- End intro caption wrap -->

						</div>
						<!-- End carousel item -->
						@endforeach


					</div>
					<!-- End content carousel -->

				</div> <!-- /.tt-intro-inner -->
			</section>
			<!-- End intro section -->



    @endsection
