<x-layout title="Homepage - Bloom Beauty">

    <x-header />

    <!-- best sellers -->
    <div class="container text-center my-md-5">
        <h3 class="fw-bold text-uppercase"><img src="images/left.png">Best Sellers<img src="images/right.png"></h3>
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

    <x-set />

    <x-on_blog />

    <x-quiz />

    <x-gallery />

</x-layout>