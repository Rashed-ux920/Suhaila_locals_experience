<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">


        @if (Auth::check())
            <a href="{{route('home') }}" class="logo d-flex align-items-center">
                <img src="frontuser/image/logo.webp" alt="logo of website">
                <h1 class="sitename">Suhaila Locals</h1>
            </a>
        @else
            <a href="{{route('landing') }}"class="logo d-flex align-items-center">
                <img src="frontuser/image/logo.webp" alt="logo of website">

                <h1 class="sitename">Suhaila Locals</h1>
            </a>
        @endif
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{route('landing')}}" class="active">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="services.html">Services</a></li>
                {{-- <li><a href="services.html">About us</a></li> --}}
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>

                {{-- this dropbown ment to be for future plane --}}

                {{-- <li class="dropdown">
                    <a href="#">
                        <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown">
                            <a href="#">
                                <span>Deep Dropdown</span>
                                <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
                
                <li>
                    @if (Route::has('login'))
                        <li>
                            @auth
                                <a href="{{ url('/home') }}" class="btn btn-get-started">{{Auth::user()->name}}</a>
                            @else
                            {{-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> --}}

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" ><h3 class="btn btn-get-started">Register</h3></a>
                                @endif
                            @endauth
                        </li>
                    @endif
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
