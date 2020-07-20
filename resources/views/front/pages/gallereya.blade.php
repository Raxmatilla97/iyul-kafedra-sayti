@extends('makets.front.sayt')

@section('gallereya')




<div class="portfolio-list-inner isotope-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->

    <!-- Begin isotope
    ===================
    * Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
    * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
    -->
    <div class="isotope col-4 gutter-3">

        <!-- Begin isotope top content -->
        <div class="isotope-top-content">

            <div class="tt-heading tt-heading-xlg text-center margin-bottom-80">
                <div class="tt-heading-inner">
                    <h1 class="tt-heading-title">Onlayn gallereya</h1>
                    <div class="tt-heading-subtitle">Talabalar va o'qituvchilar tomonidan chizilgan suratlar gallereyasi</div>

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

            -->
            <div class="isotope-filter fi-btn fi-right fi-btn-dropdown-dark">
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

        <div style="position: relative; height: 888.683px;" class="isotope-items-wrap pli-dark pli-alter-4">

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
                            <h2 class="pl-item-title"><a href="{{ route('gallereya.list') }}/{{ $item->slug }}">Rassom: {{ $item->title }}</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Joyladi: {{ $item->user->name }}</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->
            @endforeach



            </div>




                    <!-- Begin tt-pagination
                    =========================
                    * Use class "tt-pagin-center" or "tt-pagin-right" to align pagination
                    * Use class "tt-pagin-rounded" to enable pagination rounded style -->
                    <div class="tt-pagination-wrap tt-pagin-center">
                        <ul class="tt-pagination">

                            <li class="active"><a href="{{ route('gallereya.list') }}">Barcha suratlarni ko'rish.</a></li>

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
<hr>
                </div>
                <!-- End isotope -->

            </div> <!-- /.portfolio-list-inner (/.isotope-wrap) -->
@endsection
