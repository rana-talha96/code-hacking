<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="{{ route('home') }}">Techie</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a> --}}

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Request::path() == 'home' ? 'active' : '' }}" href="#hero">Home</a>
                </li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto {{ Request::path() == 'portfolio' ? 'active' : '' }}"
                        href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>

                        <li><a href="{{ route('users.index') }}">Users Detail</a></li>
                        <li><a href="{{ route('posts.index') }}">Posts Detail</a></li>

                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                @guest
                                    @if (Route::has('login'))
                                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li><a class="nav-link" href="{{ route('users.create') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li>
                                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
