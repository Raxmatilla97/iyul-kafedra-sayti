
</html>
<!-- backend uchun asosiy app  -->

<!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <!-- CSRF Token -->
            {{-- <meta name="csrf-token" content="qUWKZKhuW7RANGR0xHkIv5yCJzammcxTXFW7AiqP"> --}}
            <title>Gull - Laravel 6 + Bootstrap 4 admin template</title>
            <link href="https://.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
 
            {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
           
            @stack('style')
            {{-- @yield('style') --}}
           
        </head>
        <body class="text-left">

                <!-- Pre Loader Strat  -->
                    <div class='loadscreen' id="preloader">

                        <div class="loader spinner-bubble spinner-bubble-primary">


                        </div>
                    </div>
                <!-- Pre Loader end  -->




                <!-- ============ Compact Layout start ============= -->
                <!-- ============Deafult  Large SIdebar Layout start ============= -->


                            @yield('header-top-menyu')

                <!-- ============Deafult  Large SIdebar Layout End ============= -->


                <!--=============== Left side Start ================-->

                            @yield('left-navigation')
                <!--=============== Left side End ================-->


                <!-- ============ Body content start ============= -->

                            @yield('content')

                    <!-- Footer Start -->
                            @yield('footer')
                    <!-- fotter end -->



                <!-- ============ Body content End ============= -->
            </div>
        </div>
                <!--=============== End app-admin-wrap ================-->


                <!-- ============ Search UI Start ============= -->
                            @yield('ui-search')
                <!-- ============ Search UI End ============= -->


                <!-- ============ Customizer ============= -->
                            @yield('customizer')
                <!-- ============ End Customizer ============= -->

                <!-- ============ Large Sidebar Layout End ============= -->

               

    <!-- JQuery -->
 
    
    

            @stack('script')
       
       {{-- @yield('script') --}}
     
   
    

        </body>

</html>
