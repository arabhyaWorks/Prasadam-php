<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shri Kashi Prasadam</title>
    <meta name="google-site-verification" content="lsdIodqvrE3o_2Ady6LAKux9dcBcT-W5_rOcFfcMUa8" />
    <meta name="keywords" content="shri, shri kashi, shri kashi prashadam, trust, Rudraksha, Tulsi Mala, Brass, Idols, Puja Items, etc." />
    <meta name="description" content="" />

    <!-- Bootstrap CSS -->
    <link href="https://shrikashiprasadam.com/files/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    
    <!-- Additional Stylesheets -->
    <link href="https://shrikashiprasadam.com/files/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="https://shrikashiprasadam.com/files/theme/tt_corano1/stylesheet/plaza/product/zoom.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="https://shrikashiprasadam.com/files/plaza/cloudzoom/css/cloud-zoom.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="https://shrikashiprasadam.com/files/jquery/swiper/css/swiper.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Icon Fonts -->
    <link href="https://shrikashiprasadam.com/files/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://shrikashiprasadam.com/files/ionicons/css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="https://shrikashiprasadam.com/files/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />
    <link href="https://shrikashiprasadam.com/files/pe-icon-7-stroke/css/helper.css" rel="stylesheet" type="text/css" />

    <!-- Custom Stylesheets -->
    <link href="https://shrikashiprasadam.com/files/theme/tt_corano1/stylesheet/stylesheet.css" rel="stylesheet">
    <link href="https://shrikashiprasadam.com/files/theme/tt_corano1/stylesheet/plaza/header/header1.css" rel="stylesheet">
    <link href="https://shrikashiprasadam.com/files/theme/tt_corano1/stylesheet/plaza/theme.css" rel="stylesheet">
    <link href="https://shrikashiprasadam.com/files/theme/tt_corano1/stylesheet/plaza/common.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="https://shrikashiprasadam.com/files/slider_image//logo.png" rel="icon" />

    <!-- jQuery and Additional JS Libraries -->
    <script src="https://shrikashiprasadam.com/files/jquery/jquery-2.1.1.min.js"></script>
    <script src="https://shrikashiprasadam.com/files/jquery/swiper/js/swiper.min.js"></script>
    <script src="https://shrikashiprasadam.com/files/plaza/newsletter/mail.js"></script>
    <script src="https://shrikashiprasadam.com/files/plaza/ajaxlogin/ajaxlogin.js"></script>
    <script src="https://shrikashiprasadam.com/files/jquery/datetimepicker/moment/moment.min.js"></script>
    <script src="https://shrikashiprasadam.com/files/jquery/datetimepicker/moment/moment-with-locales.min.js"></script>
    <script src="https://shrikashiprasadam.com/files/jquery/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="https://shrikashiprasadam.com/files/plaza/slider/jquery.nivo.slider.js"></script>
    <script src="https://shrikashiprasadam.com/files/plaza/swatches/swatches.js"></script>
    <script src="https://shrikashiprasadam.com/files/plaza/ultimatemenu/menu.js"></script>
    <script src="https://shrikashiprasadam.com/files/common.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <script src="https://shrikashiprasadam.com/files/plaza/cloudzoom/cloud-zoom.1.0.2.min.js"></script>
    <script src="https://shrikashiprasadam.com/files/plaza/cloudzoom/zoom.js"></script>

    <!-- Lazy Load -->
    <script src="https://shrikashiprasadam.com/files/plaza/lazyload/jquery.lazy.min.js"></script>
    <script>
        $(function () {
            $('.lazy-img').lazy({
                effect: "fadeIn",
                effectTime: 100,
                threshold: 200
            });
        });
    </script>

    <!-- Sticky Menu -->
    <script>
        $(document).ready(function () {
            var height_box_scroll = $('.scroll-fix').outerHeight(true);
            $(window).scroll(function () {
                if ($(this).scrollTop() > 400) {
                    $('.scroll-fix').addClass("scroll-fixed");
                    $('body').css('padding-top', height_box_scroll);
                } else {
                    $('.scroll-fix').removeClass("scroll-fixed");
                    $('body').css('padding-top', 0);
                }
            });
        });
    </script>

    <!-- Scroll Top -->
    <script>
        $("#back-top").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > $('body').height() / 3) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });
            $('#back-top').click(function () {
                $('body,html').animate({ scrollTop: 0 }, 800);
                return false;
            });
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://shrikashiprasadam.com/files/bootstrap/js/bootstrap.min.js"></script>

    <!-- Zoom Functionality -->
    <script type="text/javascript">
        function zoomIn(event) {
            var pre = document.getElementById("preview");
            pre.style.visibility = "visible";
            if ($('#zoom1').is(':hover')) {
                var img = document.getElementById("zoom1");
                pre.style.backgroundImage = "url(img)";
            }
            if ($('#zoom2').is(':hover')) {
                var img = document.getElementById("zoom2");
                pre.style.backgroundImage = img;
            }
        }

        function zoomOut() {
            var pre = document.getElementById("preview");
            pre.style.visibility = "hidden";
        }
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177425527-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-177425527-1');
    </script>
</head>

<body>
    <!-- Add your content here -->
</body>

</html>