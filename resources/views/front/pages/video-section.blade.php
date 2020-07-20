@extends('makets.front.sayt')
@section('video-section')
<section class="video-promo-section bg-image" style="background-image: url({{ $video->image }});">

    <!-- Element cover 
    ===================
    * Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
    * Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
    * Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
    -->
    <div class="cover cover-opacity-5"></div>

    <div class="video-promo-inner tt-wrap">
        
        <!-- Begin video promo caption 
        =============================== -->
        <div class="video-promo-caption">

            <!-- Begin tt-heading 
            ====================== 
            * Use class "text-center" or "text-right" to align tt-heading.
            * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
            -->
            <div class="tt-heading tt-heading-xlg text-center text-white">
                <div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->
                    
                        
                    <h1 class="tt-heading-title">{{ $video->title }}</h1>
                    <div class="tt-heading-subtitle">{{ $video->small_desc }}</div>
                    
                    <!-- Begin zig-zag separator 
                    ============================= 
                    * Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
                    * Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
                    -->
                    <!-- <div class="zig-zag-separator">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div> -->
                    <!-- End zig-zag separator -->

                </div> <!-- /.tt-heading-inner -->
            </div>
            <!-- End tt-heading -->
        
            <!-- Begin video promo button
            ==============================
            * Use class "vpb-animated" to enable button animation.
            * Note: Just add your Youtube or Vimeo video link. 
            -->
            <div class="video-promo-btn-wrap vpb-animated lightgallery">
                <a href="{{ $video->video }}" class="video-promo-btn lg-trigger">
                    
                    <span class="lnr lnr-camera-video"></span>
                </a>
            </div>
            <!-- End video promo button -->

        </div>
        <!-- End video promo caption -->

    </div> <!-- /.video-promo-inner -->
</section>
@endsection