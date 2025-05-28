<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['thank_you_form_number']))
{
    header("Location: registration.php");
    exit;
}
$id = $_SESSION['id'];
$form_number = $_SESSION['thank_you_form_number'];
$name = $_SESSION['thank_you_name'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Cine Artist & Workers Welfare Federation (CAWF)">
    <!-- Page Title -->
    <title>CAWF | Payment</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/cawf black.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <style>
    .contact-form .contact-form-wrapper .form-group .form-control {
        border-radius: 10px;
    }

    .sticky-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 50px;
        border-top: 1px solid #ddd;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .demo-btn {
        flex: 1;
        height: 100%;
        color: #ffffff;
        font-size: 1rem;
        font-weight: bold;
        border: none;
        cursor: pointer;
        background: linear-gradient(to right, #a64637, #e78d6d);
        transition: all 0.3s ease;
        text-transform: uppercase;
    }

    select {
        background-image: url("data:image/svg+xml;utf8,<svg fill='gray' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 2rem;
        padding-right: 2rem;
    }

    .header-logo-area .logo-main {
        height: 108px;
        width: 84px;
        object-fit: contain;
    }

    .header-area.header-default .header-navigation-area .main-menu {
        margin-left: 0px !important;
    }

    .header-area.sticky-header.sticky.header-style5 .header-logo-area .logo-light {
        height: 108px;
        width: 84px;
        object-fit: contain;

    }

    .header-area.header-default.header-style5 .header-logo-area img {

        height: 108px;
        width: 84px;
        object-fit: contain;
        padding-top: 5px;
        padding-bottom: 2px;


    }

    .footer-area.footer-style6 .footer-main .footer-logo-area a .logo-main {
        height: 120px;
        width: 118px;
        object-fit: contain;

    }

    .blog-area.blog-default-area {
        padding-bottom: 10px;
    }

    .category-area.category-style9-area {
        margin-top: 5rem;
    }

    .text-justify {
        text-align: justify;
    }

    /* .header-area.header-default .header-action-area .btn-menu{
            color:white;
        } */
    @media only screen and (max-width: 1199px) {
        .header-area.header-default .container-fluid {
            padding: 0px 9px;
        }

        .header-area.header-default.header-style5 .header-logo-area img {
            padding-top: 10px;
            padding-bottom: 14px;
        }
    }

    @media (max-width: 768px) {

        .phone-link,
        .demo-btn {
            font-size: 0.9rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    @media screen and (min-width: 768px) {
        .res-dd-none {
            display: none !important;
        }
    }

    .phone-link {
        flex: 1;
        text-decoration: none;
        color: #a64637;
        font-size: 1rem;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        height: 100%;
        background-color: white;
    }

    .contact-area {
        padding: 100px;
    }

    .mini-note {
        background-color: #fff3cd;
        color: #856404;
        padding: 7px;
        margin-top: 30px;
        border-left: 4px solid #ffc107;
        border-radius: 8px;
        font-size: 15px;
        animation: fadeInUp 0.6s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .thank-you-buttons .btn-success:hover {
        background-color: #218838;
        transform: translateY(-3px);
    }

    .thank-you-buttons .btn-primary:hover {
        background-color: #0056b3;
        transform: translateY(-3px);
    }

    .check-icon {
        animation: bounceUpDown 1.5s infinite;
        color: #28a745;
        font-size: 60px;
    }

    @keyframes bounceUpDown {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }
    </style>
    <style>
    .cawf-video-gallery h2 {
        font-size: 36px;
        text-align: center;
        font-weight: 700;
        margin-bottom: 10px;
        color: #222;
    }

    .cawf-video-gallery p {
        text-align: center;
        font-size: 18px;
        color: #555;
        margin-bottom: 40px;
    }

    .cawf-video-slider {
        margin: 0 auto;
    }

    .cawf-video-slide {
        padding: 10px;
        transition: transform 0.2s ease-in-out;
    }

    .cawf-video-slide:hover {
        transform: scale(1.02);
    }

    .cawf-video-frame {
        position: relative;
        padding-top: 56.25%;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out;
    }

    .cawf-video-frame iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .slick-dots li button:before {
        font-size: 12px;
        color: #999;
    }

    .slick-dots li.slick-active button:before {
        color: #222;
    }


    .cawf-video-slider .slick-prev:before,
    .cawf-video-slider .slick-next:before {
        color: #5c4b3e;
    }

    .slick-next {
        right: -15px;
    }

    .slick-prev {
        left: -15px;
    }

    @media (min-width:1200px) {
        .hero-slider-layout .swiper-slide {
            height: 80vh;
        }
    }

    .mini-note {
        background-color: #fff3cd;
        color: #856404;
        padding: 7px;
        margin-top: 30px;
        border-left: 4px solid #ffc107;
        border-radius: 8px;
        font-size: 15px;
        animation: fadeInUp 0.6s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/logo/cawf white.png" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <header class="main-header" id="header">
        <?php
        include('header.php');
        ?>
    </header>
    <!-- Header End -->



    <section class="contact-area py-5"
        style="background-image: url('https://img.freepik.com/free-vector/elegant-hexagonal-line-pattern_1017-20892.jpg?t=st=1748247884~exp=1748251484~hmac=26292c666d9e759f13c22e2e3ae2bdf1afea54426185c5fa2c69c17813703e40&w=1380'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg p-5 border-0">
                        <!-- QR Code -->
                        <div class="text-center mb-4">
                            <img src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/a2380b5c-4c3a-4af7-96ea-de96dddb143e%20Copy.jpeg/:/cr=t:5%25,l:3.3%25,w:94.96%25,h:94.96%25/rs=w:1280"
                                alt="QR Code" class="img-fluid" style="max-width: 250px;">
                            <h4 class="text-dark mt-3">Scan the QR Code for Payment</h4>
                             <div class="mini-note">
                                    <strong>Note:</strong> Please scan the QR code below to make the payment and upload
                                    the payment screenshot as proof.
                                    Our team will verify your payment, and your registration will be completed
                                    afterward.
                                </div>
                        </div>

                        <!-- Payment Upload Form -->
                        <div class="card p-4 border rounded-4 shadow-sm mt-5 mb-3"
                            style="background-color: #ffffff; border-color: #dee2e6;">

                            <h5 class="mb-4 text-center text-dark fw-semibold">
                                Payment Submission
                            </h5>

                            <form action="upload_payment.php" method="POST" enctype="multipart/form-data">
                                <!-- Hidden Form ID -->
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

                                <!-- Screenshot Upload Field -->
                                <div class="mb-4">
                                    <label for="qr_image" class="form-label fw-bold  mb-3">
                                        Upload Payment Screenshot <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" class="form-control" id="qr_image" name="qr_image"
                                        accept="image/*" required>
                                </div>

                               

                                <!-- Submit Button -->
                                <div class="d-grid mt-5 mb-3">
                                    <button type="submit" class="btn btn-success btn-lg">
                                        <i class="fas fa-upload me-2"></i> Submit
                                    </button>
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="cawf_slider__container">
        <div class="cawf_slider__wrapper">
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2018.40.59%20(1).jpeg/:/"
                    alt="Banner 1"></div>
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2018.41.45%20(2).jpeg/:/rs=w:1160,h:870"
                    alt="Banner 2"></div>
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2019.54.26%20(1).jpeg/:/rs=w:984,h:738"
                    alt="Banner 3"></div>
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2019.54.26%20(2).jpeg/:/rs=w:984,h:738"
                    alt="Banner 4"></div>
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2019.57.00%20(1).jpeg/:/"
                    alt="Banner 5"></div>
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2019.54.25%20(1).jpeg/:/rs=w:984,h:738"
                    alt="Banner 6"></div>
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2019.54.28%20(2).jpeg/:/rs=w:1160,h:870"
                    alt="Banner 7"></div>
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2019.54.28.jpeg/:/rs=w:984,h:738"
                    alt="Banner 8"></div>
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2018.40.58%20(2).jpeg/:/rs=w:1160,h:549"
                    alt="Banner 8"></div>
            <div><img
                    src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2018.41.45%20(1).jpeg/:/rs=w:719,h:1237"
                    alt="Banner 8"></div>
            <!-- Add more banners as needed -->
        </div>
    </div>


    <!-- Footer Start -->
    <footer class="main-footer" id="footer">
        <?php
        include('footer.php');
        ?>
    </footer>
    <!-- Footer End -->

    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
    <script src="js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.cawf_slider__wrapper').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: false,
            dots: false,
            infinite: true,
            swipe: true,
            responsive: [{
                    breakpoint: 992, // tablet
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768, // mobile
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    });

    $(document).ready(function() {
        $('.cawf_cert_slider__wrapper').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    });

    $(document).ready(function() {
        setTimeout(function() {
            $('#cawfRegistrationPopup').modal('show');
        }, 500);
    });

    $(document).ready(function() {
        $('.cawf-video-slider').slick({
            dots: true,
            arrows: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
    </script>

</body>


</html>