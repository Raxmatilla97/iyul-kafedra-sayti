@extends('makets.front.sayt')
@section('info-banner')
    

<section class="call-to-action-section cta-style-2 bg-image " style="background-image: url({{ $firstBanner->image }});">

    <!-- Element cover 
    ===================
    * Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
    * Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
    * Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
    -->
    <!-- <div class="cover cover-opacity-4"></div> -->

    <div class="cta-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->
        <div class="row">
            <div class="col-md-6">

                <!-- Begin tt-heading 
                ====================== 
                * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
                * Use class "text-center" or "text-right" to align tt-heading.
                * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
                -->
                <div class="tt-heading tt-heading-xxlg">
                    <div class="tt-heading-inner">
                        <h1 class="tt-heading-title page-header-caption ph-cap-light">{{ $firstBanner->title  }}</h1>
                        <div class="tt-heading-subtitle page-header-caption ph-cap-light">{{ $firstBanner->small_desc}}</div>
                        
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

            </div> <!-- /.col -->

            <div class="col-md-6 page-header-caption ph-cap-light">

                <p><h3>{{$firstBanner->desc }}</h3></p>
                
                <div class="margin-top-30">
                    <a href="{{ $firstBanner->slug  }}" class="btn btn-primary btn-lg margin-top-5">{{ $firstBanner->buttonname  }}</a>
                </div>

            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!-- /.cta-inner -->
</section>


@endsection