<?php

$products = [
    [
        "name" => "Gaj laxmi ji brass idol",
        "price" => "₹1,999",
        "image" => "../../assests/pro-image-1.jpg",
        "cart_icon" => "../../assests/cartIcon.png",
        "fav_icon" => "../../assests/blackHeartIcon.svg"
    ],
    // Repeat or add more products as necessary
];

function render_product($product) {
    echo '<div class="product-item-cont">';
    echo '<div class="product-image-cont">';
    echo '<img class="product-add-to-cart" src="' . $product["cart_icon"] . '" alt="Add to Favourite" />';
    echo '</div>';
    echo '<div class="product-detail-cont">';
    echo '<div class="product-detail-upper">';
    echo '<p class="product-title poppins">' . $product["name"] . '</p>';
    echo '<img class="product-add-to-fav" src="' . $product["fav_icon"] . '" alt="Add to Favourite" />';
    echo '</div>';
    echo '<div class="product-detail-lower">';
    echo '<p class="product-price">' . $product["price"] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

?>

<div class="product-overview poppins">
  <div class="productImagesDiv">
    <div class="pro-main-image">
      <img src="<?php echo $products[0]["image"]; ?>" alt="Rudrakash mala beads" />
    </div>

    <div class="product-images-gallery">
      <?php
      foreach ($products as $product) {
          echo '<img src="' . $product["image"] . '" alt="Thumbnail" class="product-more-image" />';
      }
      ?>
    </div>
  </div>

  <div class="product-detail-container">
    <div class="product-title-cont">
      <h4 class="product-name"><?php echo $products[0]["name"]; ?></h4>
      <a class="product-share-button">Share
        <img class="product-share-button-image" src="../../assests/shareIcon.png" alt="Share" />
      </a>
    </div>

    <div class="product-price-cont">
      <p class="product-detail-price"><?php echo $products[0]["price"]; ?></p>
      <p class="cut-through-price">&#8377; 1200</p>
    </div>

    <div class="some-product-details">
      <p>Brands: <span>SVKT</span></p>
      <p>Product Code: <span>SDFRB_24</span></p>
      <p>Availability: <span>In-Stock</span></p>
      <p>Short Description:
        <span>The ruling god is Lord Kalagni Rudra and the ruling planet is Jupiter. Removes negative effects of planet Jupiter (Brihaspati) from bearer’s life.</span>
      </p>
    </div>

    <div class="product-interactions">
      <div class="product-interactions-left">
        <form class="pincode-cont">
          <label for="pincode" class="">Delivery:</label>
          <input class="pro-checkpincode" id="pincode" type="search" placeholder="Enter Your Pincode" aria-label="Search" />
          <button class="pincode-check" type="submit">Check</button>
        </form>
        <p style="color: #6c757d !important">Usually delivered in 8-10 days</p>

        <div class="pro-quant-cont">
          <p class="pro-quant-text">Quantity:</p>
          <button class="quant-btn"><img src="../../assests/minus.svg" alt="Minus" /></button>
          <p class="pro-quant-text normal">1</p>
          <button class="quant-btn"><img src="../../assests/plus.svg" alt="Plus" /></button>
          <button class="pro-buy-now">Buy Now</button>
        </div>

        <div class="pro-button-container">
          <button style="background-color: #ffb400" class="product-button">
            <img src="../../assests/heartIcon.svg" alt="Add to Wishlist" />
            <p class="pro-btn-text">Add to Wishlist</p>
          </button>
          <button class="product-button" style="background-color: #13b23f">
            <img src="../../assests/cartIcon.svg" alt="Add to Cart" />
            <p class="pro-btn-text">Add to Cart</p>
          </button>
        </div>
      </div>

      <div class="product-interactions-right">
        <div class="pro-features-cont">
          <img src="../../assests/securePayment.png" alt="Card" />
          <p>Secure Payments</p>
        </div>
        <div class="pro-features-cont">
          <img src="../../assests/flag.png" alt="Flag" />
          <p>Proudly Made in India</p>
        </div>
        <div class="pro-features-cont">
          <img src="../../assests/kamal.png" alt="Flower" />
          <p>Holistic Well-being</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Description -->
<div class="more-products">
  <div class="tab-nav">
    <div class="tab-nav-item">
      <p class="tab-nav-txt" style="border-bottom: 3px solid #f26414">Description</p>
    </div>
    <div class="tab-nav-item">
      <p class="tab-nav-txt">Specifications</p>
    </div>
  </div>

  <div class="more-product-desc">
    <p class="more-pro-desc-txt">
      Five Mukhi rudraksha is very rare and is considered very auspicious in Hinduism. This rudraksha represents the five forms of life, sky, water, air, earth, and fire. This rudraksha is five-faced. The ruling god is Lord Kalagni Rudra and the ruling planet is Jupiter. Removes negative effects of planet Jupiter (Brihaspati) from bearer’s life. Mainly people suffering from health issues, physical or mental imbalance, lack of peace in life, and other such problems are advised to keep a Five Mukhi Rudraksha with them. It brings good luck and makes your work easier. Five Mukhi Rudraksha Beads (108+1) in the form of a Silver Necklace can be paired with any casual or ethnic wear.
    </p>
  </div>
</div>

<!-- Specifications -->
<div class="more-products">
  <div class="tab-nav">
    <div class="tab-nav-item">
      <p class="tab-nav-txt">Description</p>
    </div>
    <div class="tab-nav-item">
      <p class="tab-nav-txt" style="border-bottom: 3px solid #f26414">Specifications</p>
    </div>
  </div>

  <div class="more-product-desc">
    <div class="specifications">
      <table class="">
        <tbody>
          <tr>
            <td>Brand</td>
            <td>SVKT</td>
          </tr>
          <tr>
            <td>Material Type</td>
            <td>Brass Idol</td>
          </tr>
          <tr>
            <td>Colour</td>
            <td>Light Yellow</td>
          </tr>
          <tr>
            <td>Weight</td>
            <td>270 Grams</td>
          </tr>
          <tr>
            <td>Package Content</td>
            <td>NA</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- People also like these products -->
<div class="products-container more-products">
  <h2 class="heading">People also like these products</h2>
  <div class="products-item-container">
    <?php
    foreach ($products as $product) {
        render_product($product);
    }
    ?>
  </div>
</div>

<!-- Most Viewed Products -->
<div class="products-container more-products">
  <h2 class="heading">Most Viewed Products</h2>
  <div class="products-item-container">
    <?php
    foreach ($products as $product) {
        render_product($product);
    }
    ?>
  </div>
</div>

<!-- Recently Viewed Products -->
<div class="products-container more-products">
  <h2 class="heading">Recently Viewed Products</h2>
  <div class="products-item-container">
    <?php
    foreach ($products as $product) {
        render_product($product);
    }
    ?>
  </div>
</div>

<!-- Product Banner -->
<div class="product-banner-cont">
  <img src="../../assests/productBanner.png" alt="" class="product-detail-banner" />
</div>