<?php
$special_products = [
    [
        "title" => "Gaj laxmi ji brass idol",
        "price" => "₹1,999",
        "cart_icon" => "../../assests/cartIcon.png",
        "fav_icon" => "../../assests/blackHeartIcon.svg"
    ],

    [
        "title" => "Gaj laxmi ji brass idol",
        "price" => "₹1,999",
        "cart_icon" => "../../assests/cartIcon.png",
        "fav_icon" => "../../assests/blackHeartIcon.svg"
    ],

    [
        "title" => "Gaj laxmi ji brass idol",
        "price" => "₹1,999",
        "cart_icon" => "../../assests/cartIcon.png",
        "fav_icon" => "../../assests/blackHeartIcon.svg"
    ],

    [
        "title" => "Gaj laxmi ji brass idol",
        "price" => "₹1,999",
        "cart_icon" => "../../assests/cartIcon.png",
        "fav_icon" => "../../assests/blackHeartIcon.svg"
    ],

    [
        "title" => "Gaj laxmi ji brass idol",
        "price" => "₹1,999",
        "cart_icon" => "../../assests/cartIcon.png",
        "fav_icon" => "../../assests/blackHeartIcon.svg"
    ],
    // Add more products here if needed
];

$new_arrivals = $special_products;  // Assuming the same products for new arrivals
$featured_products = $special_products;  // Assuming the same products for featured
$trending_products = $special_products;  // Assuming the same products for trending
$deals_of_the_day = $special_products;  // Assuming the same products for deals of the day

function render_products($products, $heading) {
    echo '<div class="products-container">';
    echo '<h2 class="heading">' . $heading . '</h2>';
    echo '<div class="products-item-container">';
    foreach ($products as $product) {
        echo '<div class="product-item-cont">';
        echo '<div class="product-image-cont">';
        echo '<img class="product-add-to-cart" src="' . $product["cart_icon"] . '" alt="Add to Favourite" />';
        echo '</div>';
        echo '<div class="product-detail-cont">';
        echo '<div class="product-detail-upper">';
        echo '<p class="product-title poppins">' . $product["title"] . '</p>';
        echo '<img class="product-add-to-fav" src="' . $product["fav_icon"] . '" alt="Add to Favourite" />';
        echo '</div>';
        echo '<div class="product-detail-lower">';
        echo '<p class="product-price">' . $product["price"] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
}

// Render sections
render_products($special_products, "Our Special Products");
render_products($new_arrivals, "New Arrivals");

echo '<a href="https://shrikashiprasadam.com/">';
echo '<img class="for-mobile-view" style="width: 100%" src="https://staticin.sadhguru.org/in/pub/media/wysiwyg/Rudraksha-Guide-Mob.jpg" />';
echo '<img class="for-desktop" style="width: 100%" src="https://staticin.sadhguru.org/in/pub/media/wysiwyg/Rudraksha-Guide-Web.jpg" alt="" />';
echo '</a>';

render_products($featured_products, "Featured Products");
render_products($trending_products, "Trending Products");

echo '<img src="../../assests/banner2.png" alt="New Rudrakash arrivals on kashi prasadam" class="product-banner banner2-height" />';

render_products($deals_of_the_day, "Deals of the Day");
?>