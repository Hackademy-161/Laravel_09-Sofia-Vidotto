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
                    <a class="nav-link" href="#">Blog</a>
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
                <li class="nav-item text-center mx-2 mx-lg-1">
                    <a class="nav-link" href="{{route('register')}}">
                        <div>
                            <i class="bi bi-person fs-5"></i>
                        </div>
                        Account
                    </a>
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