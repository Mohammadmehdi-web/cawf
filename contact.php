<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>CAWF | Contact Us</title>
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
    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <style>
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
            color: #ffffff;
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
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/logo/cawf black.png" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <header class="main-header" id="header">
        <header class="main-header" id="header">
            <?php
            include('header.php');
            ?>
        </header>
    </header>
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="page-header parallaxie" style="background-image: url(&quot;images/home-image/cawf-contact-banner.jpg&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 64.4414px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch <span>with us</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Reach out to explore how CAWF can support your
                                creative journey.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Box Start -->
                        <div class="contact-info-box">
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="images/icon-phone.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <a href="tel:+919555584040">+91 9555584040</a>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="images/icon-mail.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <a href="mailto:hello@cawf.in" target="_blank">hello@cawf.in</a>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/icon-location.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Our Address</h3>
                                    <a href="https://maps.app.goo.gl/uDZSvVwaLxqy85NT8 " target="_blank">C13 Shivalik
                                        Colony, Basant Kaur Marg, Malviya Nagar, India, Delhi</a>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-7">
                    <!-- Page Contact Form Start -->
                    <div class="contact-us-form">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Contact <span>Us</span></h2>
                        </div>

                        <div class="contact-form">
                            <!-- Contact Form Start -->
                            <form method="POST" action="save_contact.php" id="enquiryForm" class="wow fadeInUp"
                                data-wow-delay="0.5s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="tel" name="phone" class="form-control" id="phone"
                                            placeholder="Enter your phone number" pattern="[0-9]{10}" maxlength="10"
                                            title="Please enter a 10-digit mobile number" required>
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter your email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>


                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="state" class="form-control" id="state"
                                            placeholder="Enter state Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="city" class="form-control" id="city"
                                            placeholder="Enter your city" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4"
                                            placeholder="Write Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>submit </span></button>
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
    <!--  Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container-flude">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Start -->
                    <div class="" style="margin-bottom: 5rem;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.0450536524177!2d77.20934327616186!3d28.538365488349545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce376bb6ba515%3A0xcf4819652e5640ad!2sThe%20Desire%20Hostel!5e0!3m2!1sen!2sin!4v1748006130413!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $('#enquiryForm').submit(function (e) {
                e.preventDefault();

                var phone = $('#phone').val().trim();
                if (!/^\d{10}$/.test(phone)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Invalid Phone Number',
                        text: 'Please enter a valid 10-digit phone number.'
                    });
                    return false;
                }

                var formData = $(this).serialize();

                $.ajax({
                    url: 'save_contact.php',
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        if (response == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'ThankYou!',
                                text: 'Your message has been sent successfully.',
                            }).then(function () {
                                $('#enquiryForm')[0].reset();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong. Please try again later.',
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong. Please try again later.',
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>