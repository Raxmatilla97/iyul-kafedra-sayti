     @extends('makets.front.sayt')
       @section('content')
           
    
		


    <!-- Begin sliders section  -->

		@yield('sliders')
			
	<!-- End intro section -->




	<!-- Begin services section  -->

        @yield('info-intro')

    <!-- End services section  -->


		
           <style>
		   
</style>

		

    <!-- Element cover  -->
 
        @yield('info-banner')
 
    <!-- End element cover  --> 





  <!--  Blog yangilik, elon va boshqa yangiliklar qismi -->
  
		@yield('articles')
		
  <!-- tugadi -->




    <!-- Gallereya qismi boshlandi-->

	@yield('video-section')

	<!-- Gallereya qismi tygadi-->



    <!-- Gallereya qismi boshlandi-->

        @yield('gallereya')

    <!-- Gallereya qismi tygadi-->



        
	<!-- ihisoblagich -->	   

	    @yield('counter')

		<!-- info gramma tugadi -->



	<!-- ikkinchi bo'limlar info-grammasi -->	   

	    @yield('info-2-gramma')

		<!-- info gramma tugadi -->
           
            
         
	
		<!-- End body content -->
        @endsection