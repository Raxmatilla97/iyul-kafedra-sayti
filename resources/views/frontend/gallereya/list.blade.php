
@extends('makets.front.umumiy')

@section('content')

    <!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
<section id="page-header" class="ph-lg ph-center">

    <!-- Begin page header image
    =============================
    * Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
    * Use class "hide-ph-image" to hide page header image without removing the code.
    -->
    <div class="page-header-image parallax-6 bg-image" style="background-image: url( {{ asset('front/assets/img/LamantiaGallery.jpg') }});">

        <!-- Element cover
        ===================
        * Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
        * Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
        * Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
        -->
        <div class="cover cover-opacity-3"></div>

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
        <div class="page-header-caption ph-cap-light parallax-5 fade-out-scroll-4">
            <div class="ph-title-wrap">
                <h1 class="page-header-title">Onlayn Gallereya</h1>
            </div>
            <!-- <div class="ph-subtitle-wrap">
                <h2 class="page-header-subtitle">This Is My Awesome Work</h2>
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
            <div class="page-header-description">
                <div class="ph-desc-inner">
                Bu sahifada kafedrada talabalari va o'qituvchilari tomonidan chizilgan idojiy ishlarni ko'rishingiz mumkin, bundan tashqari ijodiy ishlarni sotib olish imkoni mavjud.
                </div>
            </div>
            <!-- End page header description -->

        </div>
        <!-- End page header caption -->

    </div>
    <!-- End page header inner -->


</section>
<!-- End page header -->


<!-- ===================================
///// Begin portfolio list section /////
==================================== -->
<section id="portfolio-list-section">
    <div class="portfolio-list-inner isotope-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->

        <div class="isotope col-4 gutter-3">

            <!-- Begin isotope top content -->
            <div class="isotope-top-content">


                <div class="isotope-filter fi-right fi-btn fi-btn-tansparent-dark">
                    <div class="isotope-filter-button">
                        <span class="ifb-icon"><span class="lnr lnr-funnel"></span></span>
                        <span class="ifb-icon-close"><i class="fas fa-times"></i></span> <!-- effect on small screens!) -->

                        <!-- Begin filter button text
                        ==============================
                        * Use class "hide-from-xs" to disable button text on small screens.
                        * Use class "hide" to disable button text permanently.
                        -->
                        <span class="ifb-text">Filter</span>
                        <!-- End filter button text -->

                    </div> <!-- /.isotope-filter-button -->

                    <!-- Begin isotope filter links -->
                    <ul class="isotope-filter-links">
                        <li class="ifl-title"><span>Filter: </span></li>
                        <li><button class="active" data-filter="*">Show All</button></li>
                        <li><button data-filter=".branding">Branding</button></li>
                        <li><button data-filter=".print">Print</button></li>
                        <li><button data-filter=".digital">Digital</button></li>
                        <li><button data-filter=".motion">Motion</button></li>
                    </ul>
                    <!-- End isotope filter links -->
                </div>
                <!-- End isotope filter -->

            </div>

            <div class="isotope-items-wrap pli-alter-3">

                <!-- Grid sizer (do not remove!!!) -->
                <div class="grid-sizer"></div>


            @foreach ($gallereya as $item)

                <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                    <div style="position: absolute; left: 0px; top: 0px;" class="isotope-item digital">

                        <!-- Begin portfolio list item -->
                        <div class="portfolio-list-item">

                            <!-- Begin portfolio list item image -->
                            <div class="pl-item-image-wrap">

                                <!-- Begin portfolio list item image inner -->
                                <a href="{{ route('gallereya.list') }}/{{ $item->slug }}" class="pl-item-image-inner">
                                    <img src="{{ $item->image }}" alt="image">

                                    <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                    <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                </a>
                                <!-- End portfolio list item image inner -->

                            </div>
                            <!-- End portfolio list item image -->

                            <!-- Begin portfolio list item info -->
                            <div class="pl-item-info">
                                <div class="pl-item-caption">
                                    <h2 class="pl-item-title"><a href="{{ route('gallereya.list') }}/{{ $item->slug }}">Surat nomi: {{ $item->title }}</a></h2>
                                    <div class="pl-item-category"><a href="portfolio-archive.html">Rassom: {{ $item->familya_ism }}</a></div>
                                </div>
                            </div>
                            <!-- End portfolio list item info -->

                        </div>
                        <!-- End portfolio list item -->

                    </div>
                    <!-- End isotope item -->
                @endforeach

            </div>
            <!-- End isotope items wrap -->


            <!-- Begin tt-pagination
            =========================
            * Use class "tt-pagin-center" or "tt-pagin-right" to align pagination
            * Use class "tt-pagin-rounded" to enable pagination rounded style -->
            <div class="tt-pagination-wrap tt-pagin-center tt-pagin-rounded">
                <ul class="tt-pagination">
                    {{$gallereya->links()}}
                </ul>


            </div>
            <!-- End tt-pagination -->

            <!-- Begin isotope pagination (Note: "Load More" button is for design purposes only!)
            ============================== -->
            <!-- <div class="iso-load-more-wrap">
                <div class="iso-load-more">
                    <button class="iso-load-more-button">Load More</button>
                </div>
            </div> -->
            <!-- End isotope pagination -->

        </div>
        <!-- End isotope -->

    </div> <!-- /.portfolio-list-inner (/.isotope-wrap) -->
</section>
<!-- End portfolio list section -->
@endsection
