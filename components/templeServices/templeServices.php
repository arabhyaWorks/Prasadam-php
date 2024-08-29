<div class="ts-cont">

    <?php
    $ts_cards = [
        [
            "title" => "Sugam Darshan Booking",
            "image" => "https://st1.latestly.com/wp-content/uploads/2024/01/Kashi-Vishwanath-Dham.jpg"
        ],
        [
            "title" => "Rudrabhishek Booking",
            "image" => "https://kashimoksha.org/images/rudrabhishek/rudrabhishek1.jpg"
        ],
        [
            "title" => "Mandir Aarti Booking",
            "image" => "../../assests/baba.jpeg"
        ],
        [
            "title" => "SKVT <br> Services",
            "image" => "https://www.tourmyindia.com/blog//wp-content/uploads/2021/12/Feature-Kashi-Vishwanath-Dham-Temple.jpg"
        ]
        // Uncomment the following to add another card
        // [
        //     "title" => "SKVT <br> Services",
        //     "image" => "https://kashiyatra.in/wp-content/uploads/2024/05/main-entranceof-temple.png"
        // ]
    ];

    foreach ($ts_cards as $card) {
        echo '<div class="ts-card" style="background-image: url(' . $card['image'] . ');">';
        echo '<div class="ts-card-overlay">';
        echo '<p class="ts-card-title">' . $card['title'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</div>