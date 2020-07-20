
@extends('makets.front.sayt')

@section('info-intro')
    


<!-- =======================================
			///// Begin services section (style-1) /////
			============================================ 
			* Add class "ss-light" if you use a dark background.
			-->
			<section id="services-section" class="services-style-1">
				<div class="services-inner tt-wrap">

					<!-- Begin info box wrap 
					========================= 
					* Use class "ib-style-2" to change info box style.
					* Use class "ib-boxed" enable info box boxed style.
					* Use class "ib-icon-color" to enable icon colored style (no effect with class: "ib-icon-bg-color").
					* Use class "ib-icon-bg-shape" to enable icon background shape (no effect with class: "ib-icon-bg-color").
					* Use class "ib-icon-bg-color" to enable icon background color style.
					* Use class "ib-icon-rounded" to enable icon rounded style (class "ib-icon-bg-color" is required!).
					* Use class "ib-light" if the background is dark.
					-->
					<div class="info-box-wrap ib-boxed ib-icon-color">
						
						<div class="row">


							@foreach ($cards as $card)
								
					
							<div class="col-sm-3 " style="max-height: 400px; margin-top: 50px;">
							
								<!-- Begin info box -->
								<img src="{{  $card->image }}">
								<div class="info-box">
									
									
								
									<div class="info-box-info" style="height: 40px;">
										<style>.info-box-heading{
												font-size: 15px;

										} </style>
										<h3 class="info-box-heading" ><a  href="{{ $card->slug }}">{{ $card->title }}</a></h3>
										{{-- <div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											{{ $card->small_desc }}
										</div> --}}
									</div> <!-- /.info-box-info -->
					
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->

							@endforeach

							</div> <!-- /.col -->
						</div> <!-- /.row -->

					</div>
					<!-- End info box wrap -->

				</div> <!-- /.services-inner -->
			</section>





            @endsection