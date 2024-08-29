<div class="sideNavAccordian">
    <?php
    $accordions = [
        "More" => [
            "Paintings And Decor",
            "Silver Items",
            "Bags And Potli",
            "Bracelet",
            "Kavach",
            "Pyramids",
            "Healing Pencil"
        ],
        "Malas and Beads" => [
            "Bahumukhi Rudraksha",
            "Rudraksha Mala",
            "Tulsi Mala",
            "Red Sandalwood Mala",
            "Gauri Shankar Rudraksha",
            "Ebony Mala",
            "Pearl Moti Mala"
        ],
        "Puja Items" => [
            "SKVT Bhabhut",
            "Smriti Chinha",
            "Yantram",
            "Shankh",
            "Sphatik",
            "Sun Stone"
        ],
        "SKVT Special" => [
            "SKVT",
            "Attar and Fragrances",
            "Vastram",
            "Sphatik",
            "Wood Items"
        ]
    ];

    foreach ($accordions as $title => $links) {
        echo '<button class="accordion">' . $title . '</button>';
        echo '<div class="panel">';
        foreach ($links as $link) {
            echo '<a href="#" class="accordianLink">' . $link . '</a>';
        }
        echo '</div>';
    }
    ?>
</div>