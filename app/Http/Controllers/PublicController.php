<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $products = [
        [
            "id" => 1,
            "name" => "Dewy Glow Jelly Cream",
            "image" => "/images/products/1s.png",
            "desc" => "With Jeju Cherry Blossom",
            "price" => 25,
            "type" => "oil-cleansers",
            "skin" => "oily",
            "accordion_1" => "Helps to hydrate and brighten the skin with a fresh and dewy glow. Ideal for oily skin to provide moisture without a greasy finish.",
            "accordion_2" => "Water, Glycerin, Cherry Blossom Extract, Sodium Hyaluronate, Vitamin E.",
            "accordion_3" => "Use a small amount and massage gently onto the skin, focusing on areas that need hydration.",
            "size" => "50 ml",
            "discount" => 20,
        ],
        [
            "id" => 2,
            "name" => "Fermented Soybean Bio Cellulose Mask",
            "image" => "/images/products/2s.png",
            "desc" => "5-in-1 face mask made with refreshing cellulose",
            "price" => 30,
            "type" => "cleansing-balms",
            "skin" => "dry",
            "accordion_1" => "This mask nourishes, hydrates, and revitalizes dry skin with its powerful fermented soybean essence, providing a glowing complexion.",
            "accordion_2" => "Water, Fermented Soybean Extract, Cellulose, Glycerin, Hyaluronic Acid.",
            "accordion_3" => "Apply to clean skin for 15-20 minutes, then remove and gently massage remaining serum into the skin.",
            "size" => "25 gr",
            "discount" => 20,
        ],
        [
            "id" => 3,
            "name" => "Soft Finish",
            "image" => "/images/products/3s.png",
            "desc" => "All Around Safe Block Sun Milk SPF50+/PA+++",
            "price" => 16,
            "type" => "water-cleansers",
            "skin" => "sensitive",
            "accordion_1" => "Provides broad-spectrum protection from UV rays while offering a soft, smooth finish. Great for sensitive skin that needs extra care from sun damage.",
            "accordion_2" => "Water, Titanium Dioxide, Zinc Oxide, Glycerin, Aloe Vera Extract.",
            "accordion_3" => " Apply generously to the face before sun exposure. Reapply every 2 hours for continued protection.",
            "size" => "40 ml",

        ],
        [
            "id" => 4,
            "name" => "Matte Priming UV Shield Sunscreen",
            "image" => "/images/products/4s.png",
            "desc" => "Broad Spectrum SPF 37",
            "price" => 35,
            "type" => "double-cleanse",
            "skin" => "sensitive",
            "accordion_1" => "Provides matte finish and sun protection, controlling excess oil while safeguarding sensitive skin from harmful UV rays.",
            "accordion_2" => "Water, Titanium Dioxide, Zinc Oxide, Witch Hazel, Glycerin.",
            "accordion_3" => "Apply evenly on face after your skincare routine. Can be used as a makeup primer.",
            "size" => "50 ml",
            "discount" => 20,
        ],
        [
            "id" => 5,
            "name" => "Clarifying Emulsion",
            "image" => "/images/products/5s.png",
            "desc" => "with Bija Seed Oil",
            "price" => 32,
            "type" => "oil-cleansers",
            "skin" => "oily",
            "accordion_1" => "Balances the skin, controlling excess oil while deeply moisturizing with Bija Seed Oil, leaving skin clear and soft.",
            "accordion_2" => "Water, Bija Seed Oil, Glycerin, Sodium Hyaluronate, Vitamin C.",
            "accordion_3" => "Apply to dry skin and gently massage. Rinse off with lukewarm water.",
            "size" => "100 ml"

        ],
        [
            "id" => 6,
            "name" => "Silk-Feel Cotton Puff",
            "image" => "/images/products/6s.png",
            "desc" => "Soft and gentle cotton pads that will not irritate the skin.",
            "price" => 41,
            "type" => "double-cleanse",
            "skin" => "oily",
            "accordion_1" => "Ultra-soft cotton puffs that gently remove makeup and cleanse the skin without causing irritation, ideal for sensitive skin.",
            "accordion_2" => "100% Cotton.",
            "accordion_3" => "Use to apply toners or removers on the skin. Dispose after single-use.",
            "size" => "80 pads"

        ],
        [
            "id" => 7,
            "name" => "Pore Clearing Clay Mask 2X",
            "image" => "/images/products/7s.png",
            "desc" => "With Super Volcanic Clusters",
            "price" => 48,
            "type" => "cleansing-balms",
            "skin" => "normal",
            "accordion_1" => "Absorbs excess oil and impurities, leaving skin feeling fresh and clean. The volcanic clusters provide deep pore-cleansing action.",
            "accordion_2" => "Water, Kaolin, Bentonite, Volcanic Ash Extract, Glycerin.",
            "accordion_3" => "Apply an even layer on clean skin, leave for 10-15 minutes, then rinse with lukewarm water.",
            "size" => "100 gr",

        ],
        [
            "id" => 8,
            "name" => "Soft Finish",
            "image" => "/images/products/8s.png",
            "desc" => "All Around Safe Block Sun Milk SPF50+/PA+++",
            "price" => 32,
            "type" => "double-cleanse",
            "skin" => "oily",
            "accordion_1" => "Provides broad-spectrum sun protection while maintaining a lightweight finish, perfect for those with oily skin looking for sun care.",
            "accordion_2" => "Water, Titanium Dioxide, Zinc Oxide, Aloe Vera Extract, Vitamin E.",
            "accordion_3" => " Apply generously to the face and neck. Reapply as needed.",
            "size" => "50 ml",
            "discount" => 20,
        ],
        [
            "id" => 9,
            "name" => "Soft Finish",
            "image" => "/images/products/9s.png",
            "desc" => "All Around Safe Block Sun Milk SPF50+/PA+++",
            "price" => 32,
            "type" => "water-cleansers",
            "skin" => "sensitive",
            "accordion_1" => "Perfect for sensitive skin, it offers soothing UV protection while leaving skin feeling smooth and protected.",
            "accordion_2" => "Water, Titanium Dioxide, Zinc Oxide, Glycerin, Chamomile Extract.",
            "accordion_3" => "Apply evenly before sun exposure. Reapply every 2 hours.",
            "size" => "50 ml",
            "discount" => 20,
        ],
        [
            "id" => 10,
            "name" => "All-Around Safe Block Essence Sun SPF45+",
            "image" => "/images/products/10s.png",
            "desc" => "All Around Safe Block Sun Milk SPF50+/PA+++",
            "price" => 32,
            "type" => "balm-cleansers",
            "skin" => "normal",
            "accordion_1" => "A gentle sunscreen that nourishes the skin while offering strong protection from UVA and UVB rays.",
            "accordion_2" => "Water, Titanium Dioxide, Zinc Oxide, Sunflower Oil, Glycerin.",
            "accordion_3" => "Apply generously to the face and neck before sun exposure.",
            "size" => "50 ml",

        ],
        [
            "id" => 11,
            "name" => "Super Aqua Snail Cream",
            "image" => "/images/products/11s.png",
            "desc" => "Skin Reinforcement Gel Type Cream",
            "price" => 32,
            "type" => "balm-cleansers",
            "skin" => "oily",
            "accordion_1" => "Deeply nourishes and reinforces skin, providing hydration and smooth texture with snail mucin extract.",
            "accordion_2" => "Water, Snail Mucin Extract, Glycerin, Sodium Hyaluronate, Allantoin.",
            "accordion_3" => "Apply a small amount after toner and gently massage until absorbed.",
            "size" => "50 gr",

        ],
        [
            "id" => 12,
            "name" => "Clarifying Emulsion",
            "image" => "/images/products/12s.png",
            "desc" => "with Bija Seed Oil",
            "price" => 32,
            "type" => "double-cleanse",
            "skin" => "oily",
            "accordion_1" => "Balances oil production, deeply moisturizing while clarifying the skin with Bija Seed Oil.",
            "accordion_2" => "Water, Bija Seed Oil, Glycerin, Hyaluronic Acid, Vitamin E.",
            "accordion_3" => "Apply to face and neck after cleansing. Gently massage to absorb.",
            "size" => "100 ml"

        ],
        [
            "id" => 13,
            "name" => "Dewy Glow Jelly Cream",
            "image" => "/images/products/13s.png",
            "desc" => "With Jeju Cherry Blossom",
            "price" => 32,
            "type" => "water-cleanse",
            "skin" => "sensitive",
            "accordion_1" => "Hydrates and brightens the skin with a fresh dewy glow, calming sensitive skin with Cherry Blossom Extract.",
            "accordion_2" => "Water, Cherry Blossom Extract, Glycerin, Vitamin C, Sodium Hyaluronate.",
            "accordion_3" => "Apply a small amount and gently massage onto the face for hydration.",
            "size" => "50 ml",

        ],
        [
            "id" => 14,
            "name" => "Fermented Soybean Bio Cellulose Mask",
            "image" => "/images/products/14s.png",
            "desc" => "5-in-1 face mask made with refreshing cellulose",
            "price" => 32,
            "type" => "oil-cleanse",
            "skin" => "dry",
            "accordion_1" => "Nourishes and moisturizes dry skin while delivering essential nutrients with fermented soybean extract.",
            "accordion_2" => "Water, Fermented Soybean Extract, Glycerin, Hyaluronic Acid.",
            "accordion_3" => "Apply to clean face for 15-20 minutes. Remove and massage the remaining serum into the skin.",
            "size" => "25 gr",

        ],
        [
            "id" => 15,
            "name" => "Pore Clearing Clay Mask 2X",
            "image" => "/images/products/15s.png",
            "desc" => "With Super Volcanic Clustersh",
            "price" => 32,
            "type" => "double-cleanse",
            "skin" => "oily",
            "accordion_1" => "Cleanses and tightens pores with volcanic clusters, absorbing excess oil and impurities.",
            "accordion_2" => "Water, Kaolin, Bentonite, Volcanic Ash Extract, Glycerin.",
            "accordion_3" =>  "Apply evenly to the face, leave for 10-15 minutes, and rinse with lukewarm water.",
            "size" => "100 ml",
            "discount" => 20,
        ],
    ];


    public function homepage()
    {
        $products = array_slice($this->products, -4);  // Prendi gli ultimi 3 prodotti
        return view('homepage', ['products' => $products]);
    }



    public function all()
    {
        return view('all', ['products' => $this->products]);
    }

    public function details($id)
    {
        $products = array_slice($this->products, -4);
        $product = collect($this->products)->firstWhere('id', $id);
        return view('details', ['product' => $product], ['products' => $products]);
    }
}
