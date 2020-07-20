@extends('makets.front.umumiy')

@section('content')



    <section id="page-header" class="ph-sm">

        <div class="page-header-image parallax-6 bg-image" style="background-image: url({{ asset('front/assets/img/fine-art-wallpapers-21.jpg')}});">

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
            <div class="page-header-caption ph-cap-light parallax-5">
                <div class="ph-title-wrap">
                    <h1 class="page-header-title">To'liq yangiliklar sahifasi</h1>
                </div>
                <div class="ph-subtitle-wrap">
                    <h2 class="page-header-subtitle">Kafedradagi barcha yangiliklar ro'yxati</h2>
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
        <div class="ph-anim-element-wrap ph-anim-circle parallax-4">
            <div class="ph-anim-element-holder">
                <div class="ph-anim-element"></div>
            </div>
        </div>
        <!-- End page header animated element -->

    </section>
    <!-- End page header -->


    <!-- =====================================
    ///// Begin blog list section (grid) /////
    ====================================== -->
    <section id="blog-list-section" class="blog-list-grid">
        <div class="blog-list-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->

            <div class="row no-margin">

                <!-- Content column -->
                <div class="col-md-12 no-padding-left no-padding-right">

                    <div class="isotope-wrap">

                        <!-- Begin isotope
                        ===================
                        * Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
                        * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
                        -->
                        <div class="isotope col-3 gutter-4">

                            <!-- Begin isotope items wrap
                            ============================== -->
                            <div class="isotope-items-wrap no-margin">

                                <!-- Grid sizer (do not remove!!!) -->
                                <div class="grid-sizer"></div>


                                        @foreach($yangiliklar as $yangilik)
                                <!-- =====================
                                /// Begin isotope item ///
                                ====================== -->
                                <div class="isotope-item">

                                    <!-- Begin blog list item -->
                                    <article class="blog-list-item">

                                        <!-- Begin blog list item image -->
                                        <div class="bl-item-image-wrap">
                                            <a href="{{ route('yangiliklar') }}/{{ $yangilik->slug }}" class="bl-item-image bg-image lazy" data-src="{{ $yangilik->image }}"></a>
                                        </div>
                                        <!-- End blog list item image -->

                                        <!-- Begin blog list item info -->
                                        <div class="bl-item-info">
                                            <div class="bl-item-category">
                                                <a href="blog-archive.html">Web Design</a> <a href="blog-archive.html">Coding</a>
                                            </div>
                                            <a href="{{ route('yangiliklar') }}/{{ $yangilik->slug }}" class="bl-item-title"><h2>
                                                {{$yangilik->title}}</h2></a>
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
                                                    <a href="#" class="bl-item-comments-count" title="Read comments"><i class="fa fa-eye"></i> {{ $yangilik->count }}</a>
                                                    <!-- End comments count -->
                                                </li>
                                            </ul>
                                            <!-- End blog list item attributes -->

                                        </div>
                                        <!-- End blog list item info -->

                                    </article>
                                    <!-- End blog list item -->

                                </div>
                                <!-- End isotope item -->

                                            @endforeach




                            </div>
                            <!-- End isotope items wrap -->

                        </div>
                        <!-- End isotope -->

                    </div> <!-- /.isotope-wrap -->


                    <!-- Begin tt-pagination
                    =========================
                    * Use class "tt-pagin-center" or "tt-pagin-right" to align pagination
                    * Use class "tt-pagin-rounded" to enable pagination rounded style -->
                    <div class="tt-pagination-wrap">
                        <ul class="tt-pagination text-center" >
                            {{$yangiliklar->links()}}
                        </ul>


                    </div>
                    <!-- End tt-pagination -->

                </div> <!-- /.col (Content column) -->

            </div> <!-- /.row -->

        </div> <!-- /.blog-list-inner -->
    </section>
    <!-- End blog list section -->
@endsection
