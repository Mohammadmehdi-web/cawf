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
    <title>CAWF | Donate</title>
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
        .cawf-popup .modal-content {
            border-radius: 8px;
            animation: popupBounce 0.6s ease;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            background: #ffffff;
        }

        .popup-image {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
        }

        @keyframes popupBounce {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }

            50% {
                transform: scale(1.05);
                opacity: 1;
            }

            100% {
                transform: scale(1);
            }
        }

        .text-justify {
            text-align: justify;
        }

        .cawf_slider__container {
            width: 100%;
            overflow: hidden;
            padding: 10px 0;
            background: #000;
            /* optional background */
        }

        .cawf_slider__wrapper div {
            margin-left: 10px
        }

        .cawf_slider__wrapper img {
            width: 100%;
            height: 200px;
            border-radius: 8px;
            object-fit: cover;
        }


        .cawf_cert_slider__wrapper .cawf_cert_slider__slide {
            padding: 0 10px;
        }

        .cawf_cert_slider__slide img {
            width: 100%;
            height: auto;
            border-radius: 6px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            height: 400px;
            object-fit: cover;
        }

        /* Arrow custom (optional) */
        .slick-prev:before,
        .slick-next:before {
            color: #ffffff;
            font-size: 24px;
        }

        .slick-dots li button:before {
            font-size: 12px;
            color: #0e0e0e;
        }

        .slick-dots li.slick-active button:before {
            color: #000000;
        }

        .navbar-brand img {
            height: 80px;
        }

        .hero-slide .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-links h3 {
            color: #b56b33;
        }

        .header-social-box {
            border-left: 1px solid #b56b33;
            padding-left: 20px;
        }

        .header-social-links ul li:hover a {
            color: black !important;
        }

        .cawf_whatsapp-float {
            position: fixed;
            bottom: 30px;
            left: 25px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            animation: floatW 3s ease-in-out infinite;
            transition: transform 0.3s ease;
        }

        .cawf_whatsapp-float:hover {
            transform: scale(1.1);
        }

        .cawf_whatsapp-float img {
            width: 50px;
            height: 50px;
        }

        @keyframes floatW {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @media (max-width:789px) {
            .navbar-brand img {
                height: 65px;
            }

            .cawf_cert_slider__slide img {
                height: 200px;
            }

            .cawf_slider__wrapper img {
                height: 150px;
            }

            .slicknav_nav .nav-item a {
                font-weight: bold;
            }
        }

        .cawf-marquee-wrapper {
            width: 100%;
            background: #111;
            /* Dark background for contrast */
            color: #fff;
            overflow: hidden;
            position: relative;
            font-weight: bold;
            font-size: 16px;
            padding: 8px 0;
            z-index: 9999;
        }

        .cawf-marquee {
            display: inline-block;
            white-space: nowrap;
            animation: cawfMarqueeScroll 25s linear infinite;
        }

        .cawf-marquee span {
            display: inline-block;
            padding-left: 100%;
        }

        @keyframes cawfMarqueeScroll {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
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

    <!-- Page Header Start -->
    <div class="page-header parallaxie"  style="background-image: url(&quot;images/about-image/9.jpg&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 64.4414px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Donate <span>Us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Donate Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="page-contact-us" style="background-color: #faebd7;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Donate Us </h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><span>Contribute in Just a Scan</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Your support and contributions will enable us
                                to meet our goals and fund our mission.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Box Start -->
                        <div class="contact-info-box">
                            <img src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/a2380b5c-4c3a-4af7-96ea-de96dddb143e%20Copy.jpeg/:/cr=t:5%25,l:3.3%25,w:94.96%25,h:94.96%25/rs=w:1280"
                                alt="">
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-7">
                    <!-- Page Contact Form Start -->
                    <div class="contact-us-form">
                        <div class="section-title">
                            <h3 class="text-anime-style-2" data-cursor="-opaque">Submit Your Info & <span>Payment
                                    Screenshot </span></h3>
                        </div>

                        <div class="contact-form">
                            <!-- Contact Form Start -->
                            <form method="POST" action="admin/save_donation.php" id="enquiryForm"
                                enctype="multipart/form-data" data-toggle="validator" class="wow fadeInUp"
                                data-wow-delay="0.5s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Full Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>


                                    <div class="form-group col-md-6 mb-4">
                                        <input type="tel" name="phone" class="form-control" id="phone"
                                            placeholder="Enter your phone number" pattern="[0-9]{10}" maxlength="10"
                                            title="Please enter a 10-digit mobile number" required>
                                    </div>


                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter your E-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="address" class="form-control" id="address"
                                            placeholder="Full Address" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label for="screenshot">Payment Screenshot/Image:</label>
                                        <input type="file" name="image_path" class="form-control" id="image_path"
                                            accept="image/*" required>
                                        <div class="help-block with-errors"></div>
                                        <small id="errorMsg" class="help-block text-danger"></small>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4"
                                            placeholder="Write Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>Submit</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                    </div>
                    <!-- Page Contact Form End -->
                </div>
            </div>
        </div>
    </div>


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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $('#enquiryForm').on('submit', function (e) {
                e.preventDefault();

                // Validate 10-digit phone number
                var phone = $('#phone').val().trim();
                if (!/^\d{10}$/.test(phone)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Invalid Phone Number',
                        text: 'Please enter a valid 10-digit phone number.'
                    });
                    return false;
                }

                // Validate file input
                var fileInput = $('#image_path')[0];
                if (fileInput.files.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Missing Image',
                        text: 'Please upload a payment screenshot.'
                    });
                    return false;
                }

                var formData = new FormData(this);

                $.ajax({
                    url: 'admin/save_donation.php',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log("Server response:", response);
                        if (response.trim() === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Thank You!',
                                text: 'Your donation has been received. We truly appreciate your support.'
                            }).then(function () {
                                $('#enquiryForm')[0].reset();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Submission Failed',
                                text: 'Please try again later.'
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                        Swal.fire({
                            icon: 'error',
                            title: 'AJAX Error',
                            text: 'Something went wrong. Please try again later.'
                        });
                    }
                });
            });
        });
    </script>

</body>


</html>