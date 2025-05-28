<?php
session_start();

// Redirect if user tries to access without registration
if (!isset($_SESSION['thank_you_name']) || !isset($_SESSION['thank_you_form_number']) || !isset($_SESSION['id']))
{
    header("Location: registration.php");
    exit;
}

$name = $_SESSION['thank_you_name'];
$form_number = $_SESSION['thank_you_form_number'];
$id = $_SESSION['id'];
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
    <title>CAWF | Thankyou for Registration</title>
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



    <section class="contact-area"
        style="background-image:url('https://img.freepik.com/free-vector/elegant-hexagonal-line-pattern_1017-20892.jpg?t=st=1748247884~exp=1748251484~hmac=26292c666d9e759f13c22e2e3ae2bdf1afea54426185c5fa2c69c17813703e40&w=1380')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center p-4">
                    <div class="card"
                        style="    padding: 50px;box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;">
                        <div class="mb-2 check-icon">
                            <i class="fas fa-check-circle text-success" style="font-size: 60px;" aria-hidden="true"></i>
                        </div>
                        <h1 class="text-success mb-3 fw-bold">Thank You!</h1>
                        <h4 class="text-dark ">Your form has been submitted successfully.</h4>

                        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap mt-3">
                            <h5 class="m-0 mb-2">
                                <strong>Name: </strong> <?php echo htmlspecialchars($name); ?>
                            </h5>
                            <h5 class="m-0">
                                <strong>Form Number: </strong> <?php echo htmlspecialchars($form_number); ?>
                            </h5>

                        </div>

                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-2 ">
                           <a href="download.php?form=<?php echo urlencode($_SESSION['thank_you_form_number']); ?>"
   target="_blank"
   class="btn btn-primary">
   <i class="fas fa-download" aria-hidden="true"></i> Download Form
</a>
                            <a href="payment.php?id=<?php echo urlencode($id); ?>" class="btn btn-success">
                                Proceed To Payment <i class="fas fa-arrow-right" aria-hidden="true"></i>
                            </a>


                        </div>
                        <div class="mini-note">
                            <strong>Note:</strong> Please complete your registration by making the payment.
                            After successful payment, our team will review your form and confirm your
                            registration.
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

    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
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
        $(document).ready(function () {
            $('.cawf_slider__wrapper').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                infinite: true,
                swipe: true,
                responsive: [
                    {
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

        $(document).ready(function () {
            $('.cawf_cert_slider__wrapper').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1000,
                responsive: [
                    {
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

        $(document).ready(function () {
            setTimeout(function () {
                $('#cawfRegistrationPopup').modal('show');
            }, 500);
        });
    </script>
    <script>
        document.getElementById('screenshot').addEventListener('change', function () {
            const file = this.files[0];
            const errorMsg = document.getElementById('errorMsg');
            errorMsg.textContent = ''; // Reset error

            if (file) {
                // Check file type (should be image)
                if (!file.type.startsWith('image/')) {
                    errorMsg.textContent = 'Please upload a valid image file.';
                    this.value = ''; // Clear input
                    return;
                }
                // Check file size (max 500KB)
                if (file.size > 500 * 1024) {
                    errorMsg.textContent = 'File size must be 500KB or less.';
                    this.value = ''; // Clear input
                    return;
                }
            }
        });
    </script>

</body>


</html>