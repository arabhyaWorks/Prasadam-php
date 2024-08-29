<div class="souvenir-category-cont">

    <h2 class="heading">Souvenir Categories</h2>
    <div class="category-souvenir">

        <?php
        $categories = [
            ["title" => "Malas and Beads", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/Mala.jpg?alt=media&token=eca814cf-75d3-4ae1-b17a-9ef8cb4d1de1"],
            ["title" => "Brass Idols", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/Brass_Idols.jpg?alt=media&token=f13b7e6d-9554-4a9e-ba20-5d8336df7142"],
            ["title" => "Shaligram Idols", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/shaligram.jpg?alt=media&token=e5d79e25-4e18-45d4-888b-63fd66b68922"],
            ["title" => "Rudraksha", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/rudraksha.jpg?alt=media&token=edfee660-4772-4398-9021-417d2816484d"],
            ["title" => "SKVT Special", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/skvtSpecial.jpg?alt=media&token=1f02731d-e439-407d-9bfb-2559f6740805"],
            ["title" => "Bhabhut", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/bhabhut.jpg?alt=media&token=4d19ab61-ba75-468c-bfb5-86764d8142ff"],
            ["title" => "Bracelets", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/bracelet.jpg?alt=media&token=05cf2525-6f71-4e42-9f71-c639a1b9b086"],
            ["title" => "Silver Items", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/silver.jpg?alt=media&token=7e0cb203-1b60-425f-9b8e-52dcc949df99"],
            ["title" => "Pooja Items", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/poojaItems.jpg?alt=media&token=2f2a2a75-e212-4999-b5dc-aa14475254e1"],
            ["title" => "Kavach & Yantra", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/kavach.jpg?alt=media&token=ca9f7ac0-35cc-41fd-a6ba-e2d8f64aa081"],
            ["title" => "Wooden Items", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/wooden.jpg?alt=media&token=cec66118-f3be-4b95-b74f-7d1d3f998a81"],
            ["title" => "Paintings", "image" => "https://firebasestorage.googleapis.com/v0/b/kathavachak-95a17.appspot.com/o/paintings.jpg?alt=media&token=bea564f9-6163-45fa-a7f2-5a161bebade8"],
        ];

        foreach ($categories as $category) {
            echo '<div class="category-cont">';
            echo '<div class="category-imageCont">';
            echo '<img src="' . $category['image'] . '" alt="Shri Kashi Prasadam" class="category-image" />';
            echo '</div>';
            echo '<p class="category-title">' . $category['title'] . '</p>';
            echo '</div>';
        }
        ?>

    </div>
</div>