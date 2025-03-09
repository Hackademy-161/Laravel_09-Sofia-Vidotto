import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 500,
    easing: 'ease-in-out',
    once: true
});

//*Filter System page shop
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("apply-filters").addEventListener("click", applyFilters);

    function applyFilters() {
        let selectedPrices = Array.from(document.querySelectorAll(".filter-price:checked")).map(f => f.value);
        let selectedTypes = Array.from(document.querySelectorAll(".filter-type:checked")).map(f => f.value);
        let selectedSkin = Array.from(document.querySelectorAll(".filter-skin:checked")).map(f => f.value);
        let products = document.querySelectorAll(".product-card");

        products.forEach(product => {
            let price = parseInt(product.dataset.price);
            let type = product.dataset.type;
            let skin = product.dataset.skin;

            let showPrice = selectedPrices.length === 0 ||
                (selectedPrices.includes("under-25") && price < 25) ||
                (selectedPrices.includes("25-50") && price >= 25 && price <= 50) ||
                (selectedPrices.includes("50-100") && price > 50 && price <= 100);

            let showType = selectedTypes.length === 0 || selectedTypes.includes(type);
            let showSkin = selectedSkin.includes("all") || selectedSkin.includes(skin);

            product.classList.toggle("hidden", !(showPrice && showType && showSkin));
        });
    }
});