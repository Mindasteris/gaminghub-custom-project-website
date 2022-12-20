<nav class="w-full shadow-xl">
        {{-- Flex Container --}}
        <div class="flex justify-between items-center p-4">
                <div>
                    {{-- Logo --}}
                    <a href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                        <img class="w-32" src="{{ asset('img/gh-logo.png') }}" alt="main-logo">
                    </a>
                </div>

                {{-- Navigation Links Desktop --}}
                <div>
                    <ul class="hidden md:flex gap-8 font-Montserrat_Bold text-sm md:text-md lg:text-xl">
                        <li class="group border-b-4 border-transparent hover:border-black py-6"><a class="group-hover:bg-black rounded-lg group-hover:text-white p-2 nav-link" href="/">HOME</a></li>
                        <li class="group border-b-4 border-transparent hover:border-black py-6"><a class="group-hover:bg-black rounded-lg group-hover:text-white p-2 nav-link" href="{{ route('gaming') }}">GAMING</a></li>
                        <li class="group border-b-4 border-transparent hover:border-black py-6"><a class="group-hover:bg-black rounded-lg group-hover:text-white p-2 nav-link" href="{{ route('services') }}">SERVICES</a></li>
                        <li class="group border-b-4 border-transparent hover:border-black py-6"><a class="group-hover:bg-black rounded-lg group-hover:text-white p-2 nav-link" href="{{ route('community.index') }}">COMMUNITY</a></li>
                        <li class="group border-b-4 border-transparent hover:border-black py-6"><a class="group-hover:bg-black rounded-lg group-hover:text-white p-2 nav-link" href="{{ route('about') }}">ABOUT</a></li>
                        <li class="group border-b-4 border-transparent hover:border-black py-6"><a class="group-hover:bg-black rounded-lg group-hover:text-white p-2 nav-link" href="{{ route('contact.index') }}">CONTACTS</a></li>
                    </ul>
                </div>
                
                {{-- Register Links --}}
                <div>
                <ul class="hidden md:flex gap-8 font-Montserrat_Bold text-sm md:text-md lg:text-xl">
                    @guest
                        @if (Route::has('login'))
                            <li class="group border-b-4 border-transparent hover:border-black py-6">
                                <a class="group-hover:bg-black rounded-lg group-hover:text-white p-2 nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="group border-b-4 border-transparent hover:border-black py-6">
                                <a class="group-hover:bg-black rounded-lg group-hover:text-white p-2 nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                            <li>
                                <a href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="hover:bg-black hover:text-white rounded-lg p-2">{{ Auth::user()->name }}</span>
                                </a>

                            <div>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <span class="text-indigo-700 hover:underline p-2">{{ __('Logout') }}</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden items-center pr-4">
                    <button class="outline-none mobile-menu-button hover:text-indigo-700" onclick="hideMenuIcon();">
                    {{-- Font Awesome Mobile Menu Icon --}}
                    <i class="fa-solid fa-bars text-6xl" id="hamburger"></i>
                    </button>
                    {{-- Font Awesome Mobile Close Icon --}}
                    <button class="md:hidden outline-none mobile-menu-close hover:text-indigo-700" onclick="hideCloseIcon();"><i class="fa-solid fa-xmark text-7xl hidden" id="close"></i></button>
                </div>
            </div>

            <!-- Mobile Navigation Links -->
			<div class="hidden mobile-menu mobile-close font-Montserrat_Bold border-t-2 border-black text-lg">
				<ul class="space-y-6 p-4">
					<li class=""><a class="hover:bg-black rounded-lg hover:text-white p-2 nav-link" href="/"><i class="fa-solid fa-house"></i> HOME</a></li>
                    <li class=""><a class="hover:bg-black rounded-lg hover:text-white p-2 nav-link" href="{{ route('gaming') }}"><i class="fa-solid fa-gamepad"></i> GAMING</a></li>
                    <li class=""><a class="hover:bg-black rounded-lg hover:text-white p-2 nav-link" href="{{ route('services') }}"><i class="fa-solid fa-bell-concierge"></i> SERVICES</a></li>
                    <li class=""><a class="hover:bg-black rounded-lg hover:text-white p-2 nav-link" href="{{ route('community.index') }}"><i class="fa-sharp fa-solid fa-comments"></i> COMMUNITY</a></li>
                    <li class=""><a class="hover:bg-black rounded-lg hover:text-white p-2 nav-link" href="{{ route('about') }}"><i class="fa-sharp fa-solid fa-shield"></i> ABOUT</a></li>
                    <li class=""><a class="hover:bg-black rounded-lg hover:text-white p-2 nav-link" href="{{ route('contact.index') }}"><i class="fa-solid fa-address-card"></i> CONTACTS</a></li>
                    
                    {{-- Register Mobile Links --}}
                    <div class="text-lg">
                        <ul class="flex justify-center py-4 gap-8">
                            @guest
                                @if (Route::has('login'))
                                    <li class="">
                                        <a class="hover:bg-black rounded-lg hover:text-white p-2 nav-link" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> {{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="">
                                        <a class="hover:bg-black rounded-lg hover:text-white p-2 nav-link" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> {{ __('Register') }}</a>
                                    </li>
                                @endif
                                @else
                                    <li>
                                        <a href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <span class="hover:bg-black hover:text-white rounded-lg p-2">{{ Auth::user()->name }}</span>
                                        </a>

                                    <div>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            <span class="text-indigo-700 hover:underline p-2">{{ __('Logout') }}</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </ul>
			</div>

             {{-- Script --}}
		    <script>
                // Mobile Menu
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");
                const btnCloseMenu = document.querySelector("button.mobile-menu-close");
                const closeMenuX = document.querySelector(".mobile-close");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});

                btnCloseMenu.addEventListener("click", () => {
					closeMenuX.classList.toggle("hidden");
				});
                
                // Hard Coded Mobile Menu Close
                function hideMenuIcon()
                {
                    hamIcon = document.getElementById("hamburger");
                    hamIcon.style.display = 'none';

                    closeIcon = document.getElementById("close");
                    closeIcon.style.display = 'block';
                }

                function hideCloseIcon()
                {
                    hamIcon = document.getElementById("hamburger");
                    hamIcon.style.display = 'block';

                    closeIcon = document.getElementById("close");
                    closeIcon.style.display = 'none';
                }

                // Active Nav Link on Click
                const currentLocation = location.href;
                const menuItem = document.querySelectorAll('.nav-link');
                const menuLength = menuItem.length;
                for(var i = 0; i < menuLength; i++) {
                    if(menuItem[i].href === currentLocation) {
                        menuItem[i].className = 'active';
                    };
                };
		    </script>  
</nav>