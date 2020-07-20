
            
            @extends('makets.front.sayt')

            @section('counter')
            
            <!-- ==============================
			///// Begin fun facts section /////
			===================================
			* Add class "ff-light" if you using dark background.
			-->
			<section id="funn-facts-section" class="bg-main ff-light bg-pattern" style="background-image: url({{ asset('front/assets/img/pattern/transparent/pt-transparent-9.png')}});">
				<div class="funn-facts-inner tt-wrap">

					<!-- Element cover 
					===================
					* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
					* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
					* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
					-->
					<div class="cover cover-opacity-3 cover-color"></div>

					<div class="row">
						@foreach ($counter as $item)				
						<div class="col-md-3 col-sm-6">

							
							
							<!-- Begin counter up -->
							<div class="counter-up-wrap cu-animated">
								<div class="counter-up-icon"><i class="{{ $item->icon }}"></i></div>
								<div class="counter-up">{{ $item->number }}</div>
								<h4 class="counter-up-title">{{ $item->small_desc }}</h4>
							</div>
							<!-- End counter up -->
							
						</div> <!-- /.col -->						
						@endforeach

						</div> <!-- /.col -->
					</div> <!-- /.row -->

				</div> <!-- /.funn-facts-inner -->
			</section>
			<!-- End fun facts section -->
@endsection