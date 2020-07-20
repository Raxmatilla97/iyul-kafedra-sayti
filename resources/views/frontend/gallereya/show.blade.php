
    @extends('makets.front.umumiy')

    @section('content')

<!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
<section id="page-header">

    <!-- Begin page header image
    =============================
    * Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
    * Use class "hide-ph-image" to hide page header image without removing the code.
    -->
    <div class="page-header-image  parallax-6 bg-image" style="background-image: url(' {{ asset('front/assets/img/SeasonsParty-11-min.jpg') }}');">

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
        <div class="page-header-caption  ph-cap-shadow ph-cap-light parallax-5">
            <div class="ph-title-wrap">
                <h1 class="page-header-title">{{ $gallereya->title }}</h1>
            </div>
            <div class="ph-subtitle-wrap">
                <h2 class="page-header-subtitle">Rassom: {{ $gallereya->familya_ism }}</h2>
            </div>

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
    <div class="ph-anim-element-wrap parallax-4">
        <div class="ph-anim-element-holder">
            <div class="ph-anim-element"></div>
        </div>
    </div>
    <!-- End page header animated element -->

</section>
<!-- End page header -->


<!-- =====================================
///// Begin portfolio single section /////
====================================== -->
<section id="portfolio-single-section">
    <div class="portfolio-single-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->

        <div class="row">
            <div class="col-xs-12 col-md-4">

                <!-- Begin portfolio single info
                ================================= -->
                <div class="portfolio-single-info margin-bottom-40">

                    <!-- Begin portfolio single text -->
                    <div class="portfolio-single-text">
                       <h4>Qo'shimcha ma'lumotlar</h4>
                        <hr>
                        <img  src="{{ $gallereya->image }}">
                    </div>
                    <!-- End portfolio single text -->

                    <!-- Begin portfolio single attributes -->
                    <div class="ps-attributes">
                        <ul class="ps-attr">
                            <li> <!-- Required -->
                                <div class="ps-category">
                                    <div class="ps-attr-heading">Gallereya bo'limi:</div>
                                    <div class="ps-attr-cont"><a href="{{ $gallereya->cate->slug }}">{{ $gallereya->cate->title }}</a></div>
                                </div>
                            </li>

                            <li> <!-- Required -->
                                <div class="ps-category">
                                    <div class="ps-attr-heading">Manzil va yo'nalish:</div>
                                    <div class="ps-attr-cont">{{ $gallereya->addres }}</div>
                                </div>
                            </li>

                            <li> <!-- Optional -->
                                <div class="ps-attr-heading">Rassom ism familyasi:</div>
                                <div class="ps-attr-cont">{{ $gallereya->familya_ism }}</div>
                            </li>
                            <li> <!-- Optional -->
                                <div class="ps-attr-heading">Asarning chizilgan yili:</div>
                                <div class="ps-attr-cont">{{ $gallereya->chizilgan_yil}}</div>
                            </li>
                            <li> <!-- Optional -->
                                <div class="ps-attr-heading">Rassomning telefon raqami:</div>
                                <div class="ps-attr-cont">{{ $gallereya->tell }}</div>
                            </li>
                            <li> <!-- Optional -->
                                <div class="ps-attr-heading">Website:</div>
                                <div class="ps-attr-cont"><a href="https://themeforest.net/user/themetorium/portfolio" target="_blank">https://themetorium.net</a></div>
                            </li>
                            <li> <!-- Optional -->
                                <div class="ps-attr-heading">Asarning narxi:</div>
                                <div class="ps-attr-cont"><b><h3>{{ $gallereya->narx }}</h3></b></div>
                            </li>
                            <li> <!-- Optional -->
                                <div class="ps-attr-heading">Ko'rilgan:</div>
                                <div class="ps-attr-cont"><b><h3>{{ $gallereya->count }}</h3></b></div>
                            </li>
                        </ul> <!-- /.ps-attr -->
                    </div>
                    <!-- End portfolio single attributes -->

                </div>
                <!-- End portfolio single info -->

            </div> <!-- /.col -->

            <div class="col-xs-12 col-md-8">

                <!-- Begin portfolio single gallery
                ==================================== -->
                <div class="portfolio-single-gallery lightgallery">

                    {!! $gallereya->desc !!}

                </div>
                <!-- End portfolio single gallery -->

            </div> <!-- /.col -->
        </div> <!-- /.row -->


    </div> <!-- /.portfolio-single-inner -->
</section>
<!-- End portfolio single section -->


<!-- ==========================================
///// Begin project carousel section /////
=========================================== -->
<section id="project-carousel-section">
    <div class="project-carousel-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->

        <!-- Begin tt-heading
        ======================
        * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
        * Use class "text-center" or "text-right" to align tt-heading.
        * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
        -->
        <div class="tt-heading tt-heading-xlg margin-bottom-80 text-center">
            <div class="tt-heading-inner tt-wrap">
                <h1 class="tt-heading-title">Boshqa ko'plab ijodlar</h1>
                <div class="tt-heading-subtitle">Kafedra tomonidan ishlangan turli xil ijod namunalari</div>

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

            </div> <!-- /.tt-heading-inner -->
        </div>
        <!-- End tt-heading -->



        <div class="project-carousel pli-colored pli-alter-4">



            <div class="owl-carousel nav-outside-top nav-rounded" data-lazy-load="true" data-items="4" data-margin="40" data-dots="false" data-nav="true" data-nav-speed="800" data-tablet-landscape="3" data-tablet-portrait="2" data-mobile-landscape="2" data-mobile-portrait="1">

                    @foreach($popular as $item)
                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item iso-height-1">

                    <!-- Begin portfolio list item -->
                    <div class="portfolio-list-item">

                        <!-- Begin portfolio list item image -->
                        <div class="pl-item-image-wrap">

                            <!-- Begin portfolio list item image inner -->
                            <a href="{{ route('gallereya.list') }}/{{ $item->slug }}" class="pl-item-image-inner">
                                <div class="pl-item-image bg-image owl-lazy" data-src="{{ $item->image }}"></div>

                                <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                            </a>
                            <!-- End portfolio list item image inner -->

                        </div>
                        <!-- End portfolio list item image -->

                        <!-- Begin portfolio list item info -->
                        <div class="pl-item-info">
                            <div class="pl-item-caption">
                                <h2 class="pl-item-title"><a href="{{ route('gallereya.list') }}/{{ $item->slug }}l">{{ $item->familya_ism }}</a></h2>
                                <div class="pl-item-category"><a href="#">Rassom: {{ $item->familya_ism }}</a></div>
                                <div class="pl-item-category"><a href="#">Narxlanishi: @if (isset($item->familya_ism))
                                            {{ $item->familya_ism }}</a></div>
                                @else
                                Narxlanmagan!</a></div>
                                @endif

                            </div>
                        </div>
                        <!-- End portfolio list item info -->

                    </div>
                    <!-- End portfolio list item -->

                </div>
                <!-- End carousel item -->

                        @endforeach



            </div>
            <!-- End content carousel -->

        </div>
        <!-- End project carousel -->

    </div> <!-- /.project-carousel-inner -->
</section>
<!-- End project carousel section -->



<section id="portfolio-single-nav-section" class="ps-nav-thumb border-top">
    <div class="portfolio-single-nav-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->
        <div class="row">
            @if (isset($oldingisi))
            <div class="col-xs-5 ps-nav-col">

                <a href="{{ route('gallereya.list') }}/{{ $oldingisi->slug }}" class="ps-nav ps-nav-left">
                    <div class="ps-nav-image bg-image" style="background-image: url({{ $oldingisi->image }});"></div>
                    <div class="ps-nav-info">
                        <div class="ps-nav-subtitle">
                            <span class="ps-nav-icon"><span class="lnr lnr-arrow-left"></span></span> Bundan oldingi<span class="hide-from-sm">ijodiy namuna</span>
                        </div>
                        <h3 class="ps-nav-title">{{ $oldingisi->title }}</h3>
                    </div> <!-- /.ps-nav-info -->
                </a> <!-- /.ps-nav -->

            </div> <!-- /.col -->
            @else
                <div class="col-xs-5 ps-nav-col">

                    <a href="#" class="ps-nav ps-nav-left">
                        <div class="ps-nav-image bg-image" style="background-image: url();"></div>
                        <div class="ps-nav-info">
                            <div class="ps-nav-subtitle">
                                <span class="ps-nav-icon"><span class="lnr lnr-arrow-left"></span></span> Bundan oldingi<span class="hide-from-sm"> sahifa mavjud emas</span>
                            </div>
                           {{-- <h3 class="ps-nav-title">{{ $oldingisi->title }}</h3>--}}
                        </div> <!-- /.ps-nav-info -->
                    </a> <!-- /.ps-nav -->

                </div> <!-- /.col -->

                @endif
            <div class="col-xs-2 ps-nav-col text-center">

                <div class="ps-nav ps-nav-list">
                    <a href="{{ route('gallereya.list') }}" title="Gallereyalar sahifasiga qaytish">
                        <span class="ps-nav-icon"><span class="lnr lnr-layers"></span></span>
                    </a>
                </div> <!-- /.ps-nav -->

            </div> <!-- /.col -->


            @if (isset($keyingisi))

            <div class="col-xs-5 ps-nav-col text-right">

                <a href="{{ route('gallereya.list') }}/{{ $keyingisi->slug }}" class="ps-nav ps-nav-right">
                    <div class="ps-nav-image bg-image" style="background-image: url({{ $keyingisi->image }});"></div>
                    <div class="ps-nav-info">
                        <div class="ps-nav-subtitle">
                            Bundan keyingi<span class="hide-from-sm"> ijodiy namuna</span> <span class="ps-nav-icon"><span class="lnr lnr-arrow-right"></span></span>
                        </div>
                        <h3 class="ps-nav-title">{{ $keyingisi->title }}</h3>
                    </div> <!-- /.ps-nav-info -->
                </a> <!-- /.ps-nav -->

            </div> <!-- /.col -->
            @endif

        </div> <!-- /.row -->
    </div> <!-- /.portfolio-single-nav-inner -->
</section>
<!-- End portfolio single nav section -->


<!-- =========================
///// Begin sticky share /////
==============================
* Use class "ss-right" to enable right align.
-->
<div class="sticky-share ss-right">
    <div class="sticky-share-button">
        <span class="ss-icon"><i class="fas fa-share-alt"></i></span>
        <span class="ss-close"><i class="fas fa-times"></i></span>
    </div> <!-- /.sticky-share-button -->
    <div class="sticky-share-inner">
        <ul class="sticky-share-list">
            <li><span class="sticky-share-title">Share</span></li>
            <li><a href="portfolio-single-2.html" class="btn btn-default btn-social-min btn-facebook btn-sm"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="portfolio-single-2.html" class="btn btn-default btn-social-min btn-twitter btn-sm"><i class="fab fa-twitter"></i></a></li>
            <li><a href="portfolio-single-2.html" class="btn btn-default btn-social-min btn-pinterest btn-sm"><i class="fab fa-pinterest-p"></i></a></li>
            <li><a href="portfolio-single-2.html" class="btn btn-default btn-social-min btn-google btn-sm"><i class="fab fa-google-plus-g"></i></a></li>
        </ul> <!-- /.sticky-share-list -->
    </div> <!-- /.sticky-share-inner -->
</div>
<!-- End sticky share -->

    @endsection
