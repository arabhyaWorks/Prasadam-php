<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shri Kashi Prasadam</title>

    <!-- Include CSS Files -->
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="components/navHeader/navHeader.css" />
    <link rel="stylesheet" href="components/sideNav/sideNav.css" />
    <link rel="stylesheet" href="components/category/category.css" />
    <link rel="stylesheet" href="components/products/products.css" />
    <link rel="stylesheet" href="components/shlok/shlok.css" />
    <link rel="stylesheet" href="components/templeServices/templeServices.css" />
    <link rel="stylesheet" href="components/footer/footer.css" />
</head>

<body>
    <!-- Navbar Component -->
    <?php include 'components/navHeader/navHeader.php'; ?>
    <?php include 'components/sideNav/sideNav.php'; ?>
    
    <img src="https://shrikashiprasadam.com/upload/slider/14/14_482103.jpg" alt="Chicago" style="width:100%;">


    <?php include 'components/category/category.php'; ?>
    <?php include 'components/products/products.php'; ?>
    <?php include 'components/shlok/shlok.php'; ?>
    <?php include 'components/templeServices/templeServices.php'; ?>
    <?php include 'components/footer/footer.php'; ?>

    <!-- Optional overlay section -->
    <div>
        <!-- Uncomment and adjust the following lines as needed -->
        <!-- <img src="https://research.baps.org/wp-content/uploads/2024/08/sholka_bg_opt.jpg" alt="Shloka Background"> -->
        <!-- <div class="l-section-overlay" style="background:rgba(155,81,0,0.80)"></div> -->
    </div>

    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>