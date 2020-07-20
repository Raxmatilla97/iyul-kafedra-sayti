
                @extends('makets.front.sayt')


                @section('navigation')


                <!-- ====================
				//// Begin main menu ////
				===================== -->
				<nav class="tt-main-menu">

					<!-- Collect the nav links for toggling
					========================================
					* Use class "tt-submenu-dark" to enable submenu dark style.
					* Use class "tt-submenu-color" to enable submenu colored style.
					-->
					<div class="tt-menu-collapse tt-submenu-dark">
						<ul class="tt-menu-nav">

							<!-- Example of menu links without submenu (use only <li> elements!)
							=====================================================================
							<li class="active"><a href="">Link 1</a></li>
							<li><a href="">Link 2</a></li>
							<li><a href="">Link 3</a></li>
							-->



                            <li class="tt-wrap tt-master ">
                                <a href="{{ url('/') }}">Bosh sahifa</a>

                            </li>

                            <li class="tt-wrap tt-master ">
                                <a href="{{ route('elonlar.list') }}">E'lonlar</a>

                            </li>

                            <li class="tt-wrap tt-master ">
                                <a href="{{ url('/yangiliklar') }}">Yangiliklar</a>

                            </li>
                            <li class="tt-wrap tt-master ">
                                <a href="{{ url('/gallereya') }}">Gallereya</a>

                            </li>

                            </li>
                            <li class="tt-wrap tt-master ">
                                <a href="{{ url('/') }}">Elektron darsliklar</a>

                            </li>







                        </ul> <!-- /.tt-menu-nav -->
					</div> <!-- /.tt-menu-collapse -->

				</nav>
                <!-- End main menu -->

                @endsection
