<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'PHA SHOP') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/articles') }}"> Latest News </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/faqs') }}"> FAQ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about"> About </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact"> Contact </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/dashboard"> Admin Panel </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products') }}"> Products </a>
                    </li>
                    
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user"></i> {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                            </div>
                        </li>
                    @endguest

                    @if (Auth::check()) 
                        @if (Auth::user()->isAdmin == true)

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}"> Admin Panel </a>
                            </li>

                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
