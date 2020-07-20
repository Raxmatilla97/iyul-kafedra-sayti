@extends('makets.front.sayt')

@section('articles')



			<!-- ================================
			///// Begin latest news section /////
			================================= -->
			<section id="latest-news-section">
				<div class="latest-news-section-inner tt-wrap" style="max-width: 100%;"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->

					<!-- Begin tt-heading
					======================
					* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
					* Use class "text-center" or "text-right" to align tt-heading.
					* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
					-->
					@if ($yangilikoptions == null)

					@else
					<div class="tt-heading tt-heading-xlg text-center margin-bottom-80">
						<div class="tt-heading-inner">
							<h1 class="tt-heading-title">{{ $yangilikoptions->title }}</h1>
							<div class="tt-heading-subtitle">{{ $yangilikoptions->small_title}}</div>

							<!-- Begin zig-zag separator
							=============================
							* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size.
							* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
							-->
							<div class="zig-zag-separator">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<!-- End zig-zag separator -->

							{{-- <div class="tt-heading-text">
								<p>{{ $yangilikoptions->title}}</p>
							</div> --}}

						</div> <!-- /.tt-heading-inner -->
					</div>
					<!-- End tt-heading -->
					@endif



					<!-- Begin latest news carousel
					================================ -->
					<div class="latest-news-carousel">

						<!-- Begin content carousel (https://owlcarousel2.github.io/OwlCarousel2/)
						====================================================================
						* Use class "nav-outside" for outside nav (requires boxed layout).
						* Use class "nav-outside-top" for outside top nav (requires enough space at the top of the carousel).
						* Use class "nav-bottom-right" for bottom right nav.
						* Use class "nav-rounded" for rounded nav.
						* Use class "nav-light" to enable nav light style.
						* Use class "dots-outside" for outside dots (requires enough space at the bottom of the carousel).
						* Use class "dots-left", "dots-right" or "dots-center-right" to align dots.
						* Use class "dots-rounded" for rounded dots.
						* Use class "owl-mousewheel" to enable mousewheel support.
						* Use class "cursor-grab" to enable cursor grab icon (no effect on links!).
						================================================================
						* Available carousel data attributes:
								data-items="5".......................(items visible on desktop)
								data-tablet-landscape="4"............(items visible on mobiles)
								data-tablet-portrait="3".............(items visible on mobiles)
								data-mobile-landscape="2"............(items visible on tablets)
								data-mobile-portrait="1".............(items visible on tablets)
								data-loop="true".....................(true/false)
								data-margin="10".....................(space between items)
								data-center="true"...................(true/false)
								data-start-position="0"..............(item start position)
								data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
								data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
								data-mouse-drag="false"..............(true/false)
								data-touch-drag="false"..............(true/false)
								data-autoheight="true"...............(true/false)
								data-autoplay="true".................(true/false)
								data-autoplay-timeout="5000".........(milliseconds)
								data-autoplay-hover-pause="true".....(true/false)
								data-autoplay-speed="800"............(milliseconds)
								data-drag-end-speed="800"............(milliseconds)
								data-nav="true"......................(true/false)
								data-nav-speed="800".................(milliseconds)
								data-dots="false"....................(true/false)
								data-dots-speed="800"................(milliseconds)
						-->
						<div class="owl-carousel cursor-grab nav-outside-top nav-rounded" data-lazy-load="true" data-items="4" data-margin="30" data-loop="true" data-dots="false" data-nav="true" data-nav-speed="500" data-autoplay="true" data-autoplay-timeout="5000" data-autoplay-speed="500" data-autoplay-hover-pause="true" data-tablet-landscape="3" data-tablet-portrait="2" data-mobile-landscape="1" data-mobile-portrait="1">


							@foreach ($yangiliklar as $yangilik)
							<!-- Begin carousel item
							========================= -->
							<div class="cc-item">

								<!-- Begin blog list item -->
								<article class="blog-list-item">

									<!-- Begin blog list item image -->
									<div class="bl-item-image-wrap">
										<a href="{{ route('yangiliklar') }}/{{ $yangilik->slug }}" class="bl-item-image bg-image owl-lazy" data-src="{{ $yangilik->image }}"></a>
									</div>
									<!-- End blog list item image -->

									<!-- Begin blog list item info -->
									<div class="bl-item-info">
										<div class="bl-item-category">
											<a href="">{{  $yangilik->cate->title  }}</a>
										</div>
										<a href="{{ route('yangiliklar') }}/{{ $yangilik->slug }}" class="bl-item-title"><h2>{{ $yangilik->title }}</h2></a>
										<div class="bl-item-meta">
											<span class="published">{{ $yangilik->created_at}}</span>
											<span class="posted-by">- Joyladi: <a href="home-landing-1.html#" title="View all posts by Lucas Sanski">{{ $yangilik->user->name }}</a></span>
										</div>
										<div class="bl-item-desc">
											{{substr($yangilik->smal_desc  , 0,  90)  }}....
										</div>

										<!-- Begin blog list item attributes -->
										<ul class="bl-item-attr">
											<li>
												<!-- Begin comments count -->
												 <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="fa fa-eye"></i> {{ $yangilik->count }}</a>
												<!-- End comments count -->
											</li>
										</ul>
										<!-- End blog list item attributes -->

									</div>
									<!-- End blog list item info -->

								</article>
								<!-- End blog list item -->

							</div>
							<!-- End carousel item -->




						@endforeach

						</div>
						<!-- End content carousel -->

					</div>
					<!-- End latest news carousel -->

				</div> <!-- /.latest-news-section-inner -->

				<hr>
				<div class="latest-news-section-inner tt-wrap" style="max-width: 100%;"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->

					<!-- Begin tt-heading
					======================
					* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
					* Use class "text-center" or "text-right" to align tt-heading.
					* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
					-->
					@if ($yangilikoptions == null)

					@else
					<div class="tt-heading tt-heading-xlg text-center margin-bottom-80">
						<div class="tt-heading-inner">
							<h2 class="tt-heading">{{ $yangilikoptions->elon_desc }}</h2>

							<div class="zig-zag-separator">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div> <!-- /.tt-heading-inner -->
					</div>
					<!-- End tt-heading -->
					@endif



					<!-- Begin latest news carousel
					================================ -->
					<div class="latest-news-carousel">

						<!-- Begin content carousel (https://owlcarousel2.github.io/OwlCarousel2/)
						====================================================================
						* Use class "nav-outside" for outside nav (requires boxed layout).
						* Use class "nav-outside-top" for outside top nav (requires enough space at the top of the carousel).
						* Use class "nav-bottom-right" for bottom right nav.
						* Use class "nav-rounded" for rounded nav.
						* Use class "nav-light" to enable nav light style.
						* Use class "dots-outside" for outside dots (requires enough space at the bottom of the carousel).
						* Use class "dots-left", "dots-right" or "dots-center-right" to align dots.
						* Use class "dots-rounded" for rounded dots.
						* Use class "owl-mousewheel" to enable mousewheel support.
						* Use class "cursor-grab" to enable cursor grab icon (no effect on links!).
						================================================================
						* Available carousel data attributes:
								data-items="5".......................(items visible on desktop)
								data-tablet-landscape="4"............(items visible on mobiles)
								data-tablet-portrait="3".............(items visible on mobiles)
								data-mobile-landscape="2"............(items visible on tablets)
								data-mobile-portrait="1".............(items visible on tablets)
								data-loop="true".....................(true/false)
								data-margin="10".....................(space between items)
								data-center="true"...................(true/false)
								data-start-position="0"..............(item start position)
								data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
								data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
								data-mouse-drag="false"..............(true/false)
								data-touch-drag="false"..............(true/false)
								data-autoheight="true"...............(true/false)
								data-autoplay="true".................(true/false)
								data-autoplay-timeout="5000".........(milliseconds)
								data-autoplay-hover-pause="true".....(true/false)
								data-autoplay-speed="800"............(milliseconds)
								data-drag-end-speed="800"............(milliseconds)
								data-nav="true"......................(true/false)
								data-nav-speed="800".................(milliseconds)
								data-dots="false"....................(true/false)
								data-dots-speed="800"................(milliseconds)
						-->
						<div class="owl-carousel cursor-grab nav-outside-top nav-rounded" data-lazy-load="true" data-items="4" data-margin="30" data-loop="true" data-dots="false" data-nav="true" data-nav-speed="500" data-autoplay="true" data-autoplay-timeout="5000" data-autoplay-speed="500" data-autoplay-hover-pause="true" data-tablet-landscape="3" data-tablet-portrait="2" data-mobile-landscape="1" data-mobile-portrait="1">


							@foreach ($elonlar as $elon)
							<!-- Begin carousel item
							========================= -->
							<div class="cc-item">

								<!-- Begin blog list item -->
								<article class="blog-list-item">

									<!-- Begin blog list item image -->
									<div class="bl-item-image-wrap">
										<a href="{{ route('elonlar.list') }}/{{ $elon->slug }}" class="bl-item-image bg-image owl-lazy" data-src="{{ $elon->image }}"></a>
									</div>
									<!-- End blog list item image -->

									<!-- Begin blog list item info -->
									<div class="bl-item-info">
										<div class="bl-item-category">
										{{-- 	<a href="blog-archive.html">{{  $elon->cate->title  }}</a> --}}
										</div>
										<a href="{{ route('elonlar.list') }}/{{ $elon->slug }}" class="bl-item-title"><h2>{{ $elon->title }}</h2></a>
										<div class="bl-item-meta">
											<span class="published">{{ $elon->created_at}}</span>
											<span class="posted-by">- Joyladi: <a href="home-landing-1.html#" title="View all posts by Lucas Sanski">{{ $elon->user->name }}</a></span>
										</div>
										<div class="bl-item-desc">
											{{substr($elon->smal_desc  , 0,  90)  }}....
										</div>

										<!-- Begin blog list item attributes -->
										<ul class="bl-item-attr">
											<li>
												<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="fa fa-eye"></i> {{ $elon->count }}</a>
												<!-- End comments count -->
											</li>
										</ul>
										<!-- End blog list item attributes -->

									</div>
									<!-- End blog list item info -->

								</article>
								<!-- End blog list item -->

							</div>
							<!-- End carousel item -->




						@endforeach

						</div>
						<!-- End content carousel -->

					</div>
					<!-- End latest news carousel -->

				</div> <!-- /.latest-news-section-inner -->
			</section>
			<!-- End latest news section -->

			@endsection
