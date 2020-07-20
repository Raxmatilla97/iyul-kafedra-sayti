
<!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
			<section id="page-header" class="ph-lg">

				<!-- Begin page header image
				=============================
				* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
				<div class="page-header-image parallax-6 bg-image" style="background-image: url({{ $yangiliklar->image }});">

					<!-- Element cover
					===================
					* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
					* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
					* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
					-->
					<div class="cover cover-opacity-4"></div>

				</div>
				<!-- End page header image -->

				<!-- Begin page header inner -->
				<div class="page-header-inner tt-wrap">

					<!-- Begin page header caption
					===============================
					* Use classes "ph-cap-xs", "ph-cap-sm", "ph-cap-lg" or "ph-cap-xlg" to set caption size.
					* Use classes "ph-cap-light" to enable caption light color style (useful if you use dark background images).
					* Use classes "ph-cap-shadow" to enable caption text shadow.
					* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
					* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
					-->
					<div class="page-header-caption ph-cap-lg ph-cap-light ph-cap-shadow parallax-5 fade-out-scroll-4">
						<div class="ph-title-wrap">
							<h1 class="page-header-title">{{ $yangiliklar->title }}</h1>
						</div>
						<!-- <div class="ph-subtitle-wrap">
							<h2 class="page-header-subtitle">Articles &amp; News</h2>
						</div> -->

						<!-- Begin zig-zag separator
						=============================
						* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size.
						* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
						-->
						<div class="zig-zag-separator zig-zag-lg">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<!-- End zig-zag separator -->

						<!-- Begin page header description (recommended max 170 characters!)
						=================================== -->
						<!-- <div class="page-header-description">
							<div class="ph-desc-inner">
								Fusce imperdiet, arcu non tempor aliquam, justo tortor cursus est, sed facilisis eros purus et felis. Sed eros sapien, iaculis eget gravida euismod, dapibus vitae turpis.
							</div>
						</div> -->
						<!-- End page header description -->

					</div>
					<!-- End page header caption -->

				</div>
				<!-- End page header inner -->

				<!-- Begin page header animated element
				========================================
				* Use class "ph-anim-circle" to enable element circle style.
				* Use class "ph-anim-center" or "ph-anim-right" to align animated element.
				* Use class "parallax-1" up to "parallax-6" to enable parallax effect.
				* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scroll.
				* Use class "hide-ph-anim" to disable animated element without removing the code.
				-->
				<!-- <div class="ph-anim-element-wrap ph-anim-circle parallax-4">
					<div class="ph-anim-element-holder">
						<div class="ph-anim-element"></div>
					</div>
				</div> -->
				<!-- End page header animated element -->

			</section>
			<!-- End page header -->


			<!-- ====================================
			/////// Begin blog single section ///////
			===================================== -->
			<section id="blog-single-section">
				<div class="blog-single-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->

					<div class="row no-margin">

						<!-- Content column -->
						<div class="col-md-8 no-padding-left no-padding-right">

							<!-- Begin blog single post
							============================= -->
							<article class="blog-single-post">

								<!-- Begin blog single featured image -->
								<!-- <a href="assets/img/blog/list/blog-1.jpg" class="blog-single-featured-image lg-trigger" data-exthumbnail="assets/img/blog/list/blog-1.jpg">
									<img src="assets/img/blog/list/blog-1.jpg" alt="">
								</a> -->
								<!-- End blog single featured image -->

								<!-- Begin blog single heading -->
								<div class="blog-single-post-heading">
									<div class="blog-single-post-category"><a href="/{{ $yangiliklar->cate->slug }}">{{ $yangiliklar->cate->title }}</a> </div>
									<!-- <h1 class="blog-single-post-title">Responsive Web Design: 50 Examples and Best Practices</h1> -->
								</div>
								<!-- End blog single heading -->

								<!-- Begin blog single post inner -->
								<div class="blog-single-post-inner">

									<!-- Begin blog single attributes -->
									<div class="blog-single-attributes">
										<div class="row">
											<div class="col-sm-8">

												<!-- Begin blog single meta -->
												<div class="blog-single-meta-wrap">

													<!-- Blog single author avatar -->
													<a href="blog-single.html" class="author-avatar pull-left bg-image" style="background-image: url({{ asset('front/assets/img/blog/small/avatar/avatar-1.jpg') }});"></a>

													<div class="blog-single-meta">
														<div class="article-author">Yozuvchi: <a href="#">{{ $yangiliklar->user->name }}</a></div>
														<div class="article-time-cat">
															<span class="article-time">{{ $yangiliklar->created_at->format('Y-m-d') }}</span>
														</div>
													</div>

												</div>
												<!-- End blog single meta -->

											</div> <!-- /.col -->

											<div class="col-sm-4">

												<!-- Begin blog single links -->
												<ul class="blog-single-links list-unstyled list-inline">
													<li>
														<!-- Begin comments count -->
														<a href="blog-single.html#blog-post-comments" class="blog-single-comment-count sm-scroll" title="Read the comments"><i class="fa fa-eye"></i> {{ $yangiliklar->count }}</a>
														<!-- End comments count -->
													</li>
												</ul>
												<!-- End blog single links -->

											</div> <!-- /.col -->
										</div> <!-- /.row -->
									</div>
									<!-- End blog single attributes -->

									<!-- Begin post content -->
									<div class="post-content lightgallery">


                                        {!! $yangiliklar->desc !!}
									</div>
									<!-- End post content -->

									<!-- Begin blog single attributes -->
									<div class="blog-single-attributes margin-top-60">
										<div class="row">
											<div class="col-sm-8">



											</div> <!-- /.col -->

											<div class="col-sm-4 text-right">

												<!-- Begin blog single links -->
												<ul class="blog-single-links list-unstyled list-inline">
													<li>
														<!-- Begin leave a comment button -->
														<a href="#" class="leave-comment-btn sm-scroll">Test!</a>
														<!-- End leave a comment button -->
													</li>
												</ul>
												<!-- End blog single links -->

											</div> <!-- /.col -->
										</div> <!-- /.col -->
									</div>
									<!-- End blog single attributes -->

									<!-- Begin blog single post share
									==================================
									* Use class "bss-fixed-bottom" to enable post share fixed bottom position (effect only on small screens!!!).
									-->
									<div class="blog-single-share bss-fixed-bottom">
										<div class="bss-text">Yangilikni ulashish:</div>
										<ul>
											<li><a href="blog-single.html#0" class="btn btn-social-min btn-facebook" title="Share on facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="blog-single.html#0" class="btn btn-social-min btn-twitter" title="Share on twitter"><i class="fab fa-twitter"></i></a></li>
											<li><a href="blog-single.html#0" class="btn btn-social-min btn-google" title="Share on google+"><i class="fab fa-google-plus-g"></i></a></li>
											<li><a href="blog-single.html#0" class="btn btn-social-min btn-pinterest" title="Share on pinterest"><i class="fab fa-pinterest-p"></i></a></li>
											<li><a href="blog-single.html#0" class="btn btn-social-min btn-linkedin" title="Share on linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
									<!-- End blog single post share -->

								</div>
								<!-- End blog single post inner -->

							</article>
							<!-- End blog single post -->


							<!-- Begin blog single nav
							=========================== -->
							<div class="blog-single-nav">
								@if (isset($oldingisi))
								<div class="bs-nav-col bs-nav-left">
									<div class="bs-nav-text"><i class="fas fa-angle-left"></i> Bundan oldingi yangilik</div>
									<a href="/yangiliklar/{{ $oldingisi->slug }}" class="bs-nav-title"><h4>{{ $oldingisi->title }}</h4></a>
								</div>
								@endif
								@if (isset($keyingisi))
								<div class="bs-nav-col bs-nav-right">
									<div class="bs-nav-text">Bundan keyingi yangilik <i class="fas fa-angle-right"></i></div>
									<a href="/yangiliklar/{{ $keyingisi->slug }}" class="bs-nav-title"><h4>{{ $keyingisi->title }}</h4></a>
								</div>
								@endif
							</div>
							<!-- End blog single nav -->


							<!-- Begin related posts
							========================= -->
							<div class="related-posts">
								<h3 class="related-posts-heading">Eng mashxur yangiliklar:</h3>

								<!-- Begin related posts carousel
								================================== -->
								<div class="related-posts-carousel">

									<!-- Begin content carousel (https://owlcarousel2.github.io/OwlCarousel2/)
									====================================================================
									* Use class "nav-outside" for outside nav (requires boxed layout).
									* Use class "nav-outside-top" for outside top nav (requires enough space at the top of the slider).
									* Use class "nav-bottom-right" for bottom right nav.
									* Use class "nav-rounded" for rounded nav.
									* Use class "nav-light" to enable nav light style.
									* Use class "dots-outside" for outside dots (requires enough space at the bottom of the slider).
									* Use class "dots-left", "dots-right" or "dots-center-right" to align dots.
									* Use class "dots-rounded" for rounded dots.
									* Use class "owl-mousewheel" to enable mousewheel support.
									* Use class "cursor-grab" to enable cursor grab icon (no effect on links!).
									====================================================================
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
									<div class="owl-carousel nav-outside-top" data-lazy-load="true" data-items="3" data-margin="20" data-nav="true" data-dots="false" data-mobile-landscape="2" data-mobile-portrait="1">



										@foreach ($popular as $item)

										<!-- Begin carousel item
										========================= -->
										<div class="cc-item">

											<!-- Begin related posts item -->
											<div class="related-posts-item">
												<div class="rp-item-image-wrap">
													<a href="blog-single.html" class="rp-item-image owl-lazy bg-image" data-src="{{ $item->image }}"></a>
												</div>
												<div class="rp-item-info">
													<div class="rp-item-category"><a href="blog-archive.html">{{ $item->cate->title }}</a></div>
													<a href="/yangiliklar/{{ $item->slug }}" class="rp-item-title"><h4>{{ $item->title }}</h4></a>
												</div>
											</div>
											<!-- End related posts item -->

										</div>
										<!-- End carousel item -->
										@endforeach



									</div>
									<!-- End content carousel -->

								</div>
								<!-- End related posts carousel -->

							</div>
							<!-- End related posts -->




						</div> <!-- /.col (Content column) -->

						<!-- Sidebar column -->
						<div class="col-md-4 no-padding-left no-padding-right">

							<!-- Begin sidebar (sidebar right)
							=================================== -->
							<div class="sidebar sidebar-right">
								<div class="row">





									<div class="col-md-12 col-sm-6">

										<!-- Begin sidebar widget -->
										<div class="sidebar-widget sidebar-categories">
											<h3 class="sidebar-heading">Yangilik bo'limlar</h3>
											<ul class="list-unstyled">
												@foreach ($category as $item)
												<li><a href="#">{{ $item->title }} <span title="Entries in this category">{{ $item->yangiliklars->count() }}</span></a></li>
												@endforeach
											</ul>
										</div>
										<!-- End sidebar widget -->

									</div> <!-- /.col -->

									<div class="col-md-12 col-sm-6">

										<!-- Begin sidebar widget -->
										<div class="sidebar-widget sidebar-post-list">
											<h3 class="sidebar-heading">So'ngi yangiliklar</h3>
											<ul class="list-unstyled">

												@foreach ($over as $item)
												<li>
													<a href="/yangiliklar/{{ $item->slug }}" class="post-thumb bg-image lazy" data-src="{{ $item->image }}"></a>
													<div class="post-data">
														<h5 class="post-title"><a href="/yangiliklar/{{ $item->slug }}">{{ $item->title }}</a></h5>
														<!-- <span class="author">By: <a href="">Lucas Sanski</a></span> -->
														<span class="date">{{ $item->created_at->format('Y-m-d') }}</span>
													</div>
												</li>
												@endforeach

											</ul>
										</div>
										<!-- End sidebar widget -->

									</div> <!-- /.col -->






								</div> <!-- /.row -->
							</div>
							<!-- End sidebar -->

						</div> <!-- /.col (Sidebar column) -->

					</div> <!-- /.row -->

				</div> <!-- /.blog-single-inner -->
			</section>
			<!-- End blog single section -->

