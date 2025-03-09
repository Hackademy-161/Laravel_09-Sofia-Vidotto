<x-layout title="Homepage - Bloom Beauty">
    <!-- details product -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="position-relative">
                    @if (!empty($product['discount']))
                    <span class="discount-badge">-{{ $product['discount'] }}%</span>
                    @endif
                    <img src="{{ $product['image'] }}" alt="Product Image" class="product-img">
                </div>
            </div>
            <div class="col-md-6 pt-5">

                <h2>{{ $product['name'] }}</h2>
                <p class="rating-stars">★★★★★ <span class="text-muted">(3 reviews)</span></p>
                <h3 class="text-black">$ {{ $product['price'] }}</h3>
                <p><strong>Size:</strong> {{ $product['size'] }}</p>
                <button class="btn btn-custom-details">Add to Cart</button>

                <div class="accordion mt-4" id="productAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What Makes It Good
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#productAccordion">
                            <div class="accordion-body">
                                {{ $product['accordion_1'] }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Ingredients
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#productAccordion">
                            <div class="accordion-body">
                                {{ $product['accordion_2'] }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How to Use
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#productAccordion">
                            <div class="accordion-body">
                                {{ $product['accordion_3'] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- best sellers -->
    <div class="container text-center my-md-5">
        <h3 class="fw-bold text-uppercase"><img src="/images/left.png">Best Sellers<img src="/images/right.png"></h3>
        <a href="{{route ('all')}}" class="see-all">see all</a>
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Pannello 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-6 col-md-3 my-3">
                            <div class="card">
                                @if (!empty($product['discount']))
                                <span class="discount-badge">-{{ $product['discount'] }}%</span>
                                @endif
                                <a href="{{route('details', ['id' => $product['id'], 'name' => $product['name'] ])}}"><img src="{{ $product['image'] }}" class="card-img-top img-fluid" alt="{{ $product['name'] }}"></a>
                                <div class="card-body">
                                    <a href="{{route('details', ['id' => $product['id'], 'name' => $product['name'] ])}}">
                                        <h6 class="card-title">{{ $product['name'] }}</h6>
                                    </a>
                                    <div class="stars">★★★★★ (5)</div>
                                    <p class="card-text">{{ $product['desc'] }}</p>
                                    <p class="price">${{ $product['price'] }}</p>
                                    <button class="btn-add">Add To Bag</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pannello 2 -->
                <div class="carousel-item">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-6 col-md-3 my-3">
                            <div class="card">
                                <a href="{{route('details', ['id' => $product['id'], 'name' => $product['name'] ])}}"><img src="{{ $product['image'] }}" class="card-img-top img-fluid" alt="{{ $product['name'] }}"></a>
                                <div class="card-body">
                                    <a href="{{route('details', ['id' => $product['id'], 'name' => $product['name'] ])}}">
                                        <h6 class="card-title">{{ $product['name'] }}</h6>
                                    </a>
                                    <div class="stars">★★★★★ (5)</div>
                                    <p class="card-text">{{ $product['desc'] }}</p>
                                    <p class="price">${{ $product['price'] }}</p>
                                    <button class="btn-add">Add To Bag</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- review -->
    <div class="container my-4">
        <h3 class="fw-bold text-uppercase text-center"><img src="/images/left.png">Read The Review<img src="/images/right.png"></h3>
        <p class="text-center text-muted">⭐⭐⭐⭐⭐ 5 reviews</p>

        <div class="text-center mb-3">
            <a class="btn btn-outline-dark write-review-btn my-5 " href="{{ route('review.index')}}">Write a Review <i class="bi bi-arrow-right-circle p-1"></i></a>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Recensione 1 -->
                <div class="review-card">
                    <div class="review-header">
                        <i class="bi bi-person-circle pb-4 fs-3"></i>
                        <div>
                            <h6>Cathy K. <span class="text-muted">✔️ Verified Reviewer</span></h6>
                            <p class="review-stars">★★★★★</p>
                        </div>
                    </div>
                    <h5>VERY MOISTURIZING</h5>
                    <p>I didn't know how effective the gel cream would be since I was skeptical of the texture, but my sensitive skin loved it...</p>
                    <img src="/images/r1.png" class="rounded pb-3" alt="Review Image">
                    <p class="review-date">26/02/23</p>
                </div>

                <!-- Recensione 2 -->
                <div class="review-card">
                    <div class="review-header">

                        <i class="bi bi-person-circle pb-4 fs-3"></i>
                        <div>
                            <h6>Aileen R.</h6>
                            <p class="review-stars">★★★★★</p>
                        </div>
                    </div>
                    <h5>REALLY LIGHT AND NOT STICKY.</h5>
                    <p>Really light and not sticky. My skin soaked it right up! I mix it with the green tea products and it helps balance my combo skin.</p>
                    <img src="/images/r2.png" class="rounded  pb-3" alt="Review Image">
                    <p class="review-date">12/02/23</p>
                </div>

                <!-- Recensione 3 -->
                <div class="review-card">
                    <div class="review-header">
                        <i class="bi bi-person-circle pb-4 fs-3"></i>
                        <div>
                            <h6>Cathy K. <span class="text-muted">✔️ Verified Reviewer </span></h6>
                            <p class="review-stars">★★★★★</p>
                        </div>
                    </div>
                    <h5>Tried the kit since it</h5>
                    <p>Tried the kit since it was my first time trying this product line. So far I really am enjoying it and it gives my skin a smooth and fresh look morning and night!</p>
                    <p class="review-date">02/02/23</p>
                </div>

                <div class="col-12 text-center">
                    <a href="#" class="show-more">Show More <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </div>

</x-layout>