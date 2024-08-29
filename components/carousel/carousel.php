<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
        $slides = [
            ["src" => "https://shrikashiprasadam.com/upload/slider/14/14_482103.jpg", "alt" => "Los Angeles", "active" => true],
            ["src" => "https://shrikashiprasadam.com/upload/slider/14/14_482103.jpg", "alt" => "Chicago", "active" => false],
            ["src" => "https://shrikashiprasadam.com/upload/slider/14/14_482103.jpg", "alt" => "New york", "active" => false],
        ];

        foreach ($slides as $index => $slide) {
            $activeClass = $slide['active'] ? ' active' : '';
            echo '<div class="item' . $activeClass . '">';
            echo '<img src="' . $slide['src'] . '" alt="' . $slide['alt'] . '" style="width:100%;">';
            echo '</div>';
        }
        ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>