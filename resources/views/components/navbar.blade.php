<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a class="navbar-brand ps-md-5" href="{{route('homepage')}}"><img src="/images/Bloom Beauty.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('all')}}">Shop All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Collection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog.index')}}">Blog</a>
                </li>
            </ul>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0 text-uppercase">
                <li class="nav-item text-center mx-2 mx-lg-1">
                    <a class="nav-link" href="#!">
                        <div>
                            <i class="bi bi-search-heart fs-5"></i>
                        </div>
                        Search
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person fs-5"></i><br>
                        @auth
                        Hi, {{ Auth::user()->name }}
                        @else
                        Account
                        @endauth
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @guest
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        @endguest

                        @auth
                        <li><a class="dropdown-item" href="{{ route('auth.account') }}">My Account</a></li>
                        <li><a class="dropdown-item" href="#">Wishlist</a></li>
                        <li><a class="dropdown-item" href="#">Orders</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="text-center">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-dark">Logout</button>
                            </form>
                        </li>
                        @endauth
                    </ul>
                </li>


                <li class="nav-item text-center mx-2 mx-lg-1">
                    <a class="nav-link" href="#!">
                        <div>
                            <i class="bi bi-bag-heart fs-5"></i>
                        </div>
                        Cart
                    </a>
                </li>
            </ul>
            <!-- Right links -->
        </div>
    </div>
</nav>