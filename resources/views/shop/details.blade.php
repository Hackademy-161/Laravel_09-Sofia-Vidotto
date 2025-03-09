<x-layout>

    <style>
        .container {
            max-width: 1100px;
        }

        .product-img {
            width: 100%;
            border-radius: 10px;
        }

        .product-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #f8a1b0;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #f28597;
        }

        .rating-stars {
            color: #ffcc00;
        }
    </style>

    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="{{ $product['image'] }}" alt="Product Image" class="product-img">
            </div>
            <div class="col-md-6">
                <div class="product-card">
                    <h2>{{ $product['name'] }}</h2>
                        <p class="rating-stars">★★★★★ <span class="text-muted">(3 reviews)</span></p>
                        <h3 class="text-danger">$ {{ $product['price'] }}</h3>
                        <p class="text-muted">{{ $product['desc'] }}</p>
                        <p><strong>Size:</strong> {{ $product['size'] }}</p>
                        <button class="btn btn-custom">Add to Cart</button>

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
    </div>
</x-layout>