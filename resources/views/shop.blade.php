
<x-layout title="Shop All - Bloom Beauty">

    <div class="container mt-4">
        <div class="row">
            <aside class="col-md-3 filter-section">
                <h4>Tipologia di Prodotto</h4>
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
                <h4 class="mt-3">Filtri</h4>
                <h5>Tipo di Pelle</h5>
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
                <h5 class="mt-3">Fascia di Prezzo</h5>
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
                    <div class="col-md-4 product-card" data-price="32" data-type="double-cleanse" data-skin="oily">
                        <div class="card">
                            <img src="img1.jpg" class="card-img-top" alt="Dewy Glow Jelly Cream">
                            <div class="card-body">
                                <h5 class="card-title">Dewy Glow Jelly Cream</h5>
                                <p class="card-text">32$</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</x-layout>