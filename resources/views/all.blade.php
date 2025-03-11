<x-layout title="Shop All - Bloom Beauty">
    <div class="container mt-4">
        <div class="row">
            <aside class="col-md-3 filter-section">
                <h4>Product</h4>
                <div class="form-check">
                    <input class="form-check-input filter-type" type="checkbox" value="double-cleanse" id="double-cleanse">
                    <label class="form-check-label" for="double-cleanse">Double Cleanse</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-type" type="checkbox" value="cleansing-balms" id="cleansing-balms">
                    <label class="form-check-label" for="cleansing-balms">Cleansing Balms</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-type" type="checkbox" value="oil-cleansers" id="oil-cleansers">
                    <label class="form-check-label" for="oil-cleansers">Oil Cleansers</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-type" type="checkbox" value="water-cleansers" id="water-cleansers">
                    <label class="form-check-label" for="water-cleansers">Water Cleansers</label>
                </div>
                <h5>Skin Type</h5>
                <div class="form-check">
                    <input class="form-check-input filter-skin" type="checkbox" value="all" id="all-skin" checked>
                    <label class="form-check-label" for="all-skin">All</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-skin" type="checkbox" value="oily" id="oily">
                    <label class="form-check-label" for="oily">Oily</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-skin" type="checkbox" value="dry" id="dry">
                    <label class="form-check-label" for="dry">Dry</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-skin" type="checkbox" value="normal" id="normal">
                    <label class="form-check-label" for="normal">Normal</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-skin" type="checkbox" value="sensitive" id="sensitive">
                    <label class="form-check-label" for="sensitive">Sensitive</label>
                </div>
                <h5 class="mt-3">Price</h5>
                <div class="form-check">
                    <input class="form-check-input filter-price" type="checkbox" value="under-25" id="under-25">
                    <label class="form-check-label" for="under-25">Sotto i 25$</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-price" type="checkbox" value="25-50" id="25-50">
                    <label class="form-check-label" for="25-50">$25 - $50</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-price" type="checkbox" value="50-100" id="50-100">
                    <label class="form-check-label" for="50-100">$50 - $100</label>
                </div>
                <button class="btn btn-primary mt-3" id="apply-filters">Apply</button>
            </aside>
            <main class="col-md-9">
                <div class="row" id="product-list">
                    @foreach ($products as $product)
                    <div class="col-6 col-md-4 my-3" data-price="{{ $product['price'] }}"
                        data-type="checkbox"
                        value="{{ $product['type']}}"
                        id="{{ $product['skin'] }}">
                        <div class="card position-relative">
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
            </main>
        </div>
    </div>

    <x-pagination />
</x-layout>