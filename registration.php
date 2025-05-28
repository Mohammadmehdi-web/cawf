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
    <title>CAWF | Registration</title>
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

        /* General Form Styling */
        .contact-form-wrapper {
            margin: 0 auto;
            padding: 40px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form-wrapper .section-title {
            margin-bottom: 30px;
            text-align: center;
        }

        .contact-form-wrapper .section-title h2 {
            font-size: 30px;
            color: #333;
            font-weight: 600;
        }

        .contact-form-wrapper .form-group {
            margin-bottom: 20px;
        }

        .contact-form-wrapper .form-group label {
            font-size: 14px;
            color: #333;
            font-weight: 500;
            margin-bottom: 9px;
        }

        .contact-form-wrapper .form-control {
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .contact-form-wrapper .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }

        .contact-form-wrapper .form-check-label {
            font-size: 14px;
            color: #555;
        }

        .contact-form-wrapper .form-check-input {
            margin-right: 10px;
        }

        .contact-form-wrapper .btn {
            background-color: #b56b33;
            color: #fff;
            font-size: 16px;
            padding: 12px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .contact-form-wrapper .btn:hover {
            background-color: #b56b33;
        }

        .contact-form-wrapper .form-check {
            margin-top: 15px;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .contact-form-wrapper .form-group {
                margin-bottom: 15px;
            }

            .contact-form-wrapper .form-control {
                font-size: 14px;
                padding: 8px;
            }

            .contact-form-wrapper .btn {
                width: 100%;
                font-size: 18px;
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            .contact-form-wrapper {
                padding: 20px;
            }

            .contact-form-wrapper .section-title h2 {
                font-size: 24px;
            }

            .contact-form-wrapper .form-group label {
                font-size: 12px;
            }
        }

        .contact-form .contact-form-wrapper .form-group .form-control {
            height: 54px;
            padding: 2px 25px;
            border: 1px solid #c0996f;
        }

        .contact-form-wrapper .form-group textarea {
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            resize: vertical;
            transition: all 0.3s ease-in-out;
        }

        .contact-form-wrapper .form-group textarea:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }

        .contact-area .contact-form .contact-form-wrapper.form-style {
            padding-right: 42px;
        }

        .contact-area {
            background: #c0996f42;
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
    <div class="page-header parallaxie"
        style="background-image: url(&quot;images/about-image/9.jpg&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 64.4414px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Registration</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="contact-area page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form">
                        <form class="contact-form-wrapper form-style" id="enquiryForm" method="POST"
                            action="add_form.php" enctype="multipart/form-data">
                            <input type="hidden" name="form_number" value="<?php echo $form_number; ?>">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <h2 class="title">Registration Form</h2>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image_path">Upload Profile Image*</label>
                                        <input class="form-control" type="file" id="image_path" name="image_path"
                                            accept=".jpg,.jpeg,.png,.gif" required>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="program_type">Program Type*</label>
                                        <select class="form-control" id="program_type" name="program_type" required>
                                            <option value="" disabled selected>-- Select Program Type --</option>
                                            <option value="Modelling">Modelling</option>
                                            <option value="acting">Acting</option>
                                            <option value="Photography">Photography</option>
                                            <option value="Videography">Videography</option>
                                            <option value="Cinematography">Cinematography</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">Full Name*</label>
                                        <input class="form-control" type="text" id="first_name" name="first_name"
                                            placeholder="Enter Full Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">Pan Number*</label>
                                        <input class="form-control" type="text" id="pan_no" name="pan_no"
                                            placeholder="Enter Pan Number" maxlength="10" required>
                                        <small id="pan_error" class="text-danger"></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Mobile Number*</label>
                                        <input class="form-control" type="text" id="phone" name="phone"
                                            placeholder="Enter Mobile Number" maxlength="10" required>
                                        <small id="phone_error" class="text-danger"></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email*</label>
                                        <input class="form-control" type="email" id="email" name="email"
                                            placeholder="Enter Email" required>
                                        <small id="email_error" class="text-danger"></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth*</label>
                                        <input class="form-control" type="date" id="dob" name="dob" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender*</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="Male"
                                                required>
                                            <label class="form-check-label">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="Female"
                                                required>
                                            <label class="form-check-label">Female</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="aadhaar">Aadhaar Number*</label>
                                        <input class="form-control" type="text" id="aadhaar" name="aadhaar"
                                            placeholder="Enter Aadhaar Number" maxlength="12" required>
                                        <small id="aadhaar_error" class="text-danger"></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address*</label>
                                        <textarea class="form-control" id="address" name="address" rows="3"
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms" name="terms"
                                            required>
                                        <label class="form-check-label" for="terms">
                                            I declare that the above info is true and correct to the best of my
                                            knowledge.
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- Message Notification -->
                        <div class="form-message"></div>
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
    <script>
        $('#enquiryForm').on('submit', function (e) {
            e.preventDefault();

            // Clear previous errors
            $('#phone_error').text('');
            $('#pan_error').text('');
            $('#aadhaar_error').text('');
            $('#email_error').text('');

            // Get values
            let phone = $('#phone').val().trim();
            let pan_no = $('#pan_no').val().trim().toUpperCase();
            let aadhaar = $('#aadhaar').val().trim();
            let email = $('#email').val().trim();

            // Refill uppercased PAN into input
            $('#pan_no').val(pan_no);

            let valid = true;

            // Mobile validation
            if (!/^\d{10}$/.test(phone)) {
                $('#phone_error').text('Please enter a valid 10-digit mobile number.');
                valid = false;
            }

            // PAN validation
            if (!/^[A-Z]{5}[0-9]{4}[A-Z]$/.test(pan_no)) {
                $('#pan_error').text('Please enter a valid PAN number (e.g., ABCDE1234F).');
                valid = false;
            }

            // Aadhaar validation
            if (!/^\d{12}$/.test(aadhaar)) {
                $('#aadhaar_error').text('Please enter a valid 12-digit Aadhaar number.');
                valid = false;
            }

            // Email validation (optional: basic check)
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                $('#email_error').text('Please enter a valid email address.');
                valid = false;
            }

            // If all valid, check for duplicates
            if (valid) {
                $.ajax({
                    url: 'check_duplicate.php',
                    type: 'POST',
                    data: {
                        phone: phone,
                        pan_no: pan_no,
                        aadhaar: aadhaar,
                        email: email
                    },
                    success: function (response) {
                        let res = JSON.parse(response);
                        if (res.exists) {
                            if (res.phone) $('#phone_error').text('This phone is already registered.');
                            if (res.pan_no) $('#pan_error').text('This PAN is already registered.');
                            if (res.aadhaar) $('#aadhaar_error').text('This Aadhaar is already registered.');
                            if (res.email) $('#email_error').text('This email is already registered.');
                        } else {
                            // If no duplicates, finally submit the form
                            document.getElementById("enquiryForm").submit();
                        }
                    }
                });
            }
        });

        // Optional: Auto uppercase PAN input while typing
        $('#pan_no').on('input', function () {
            this.value = this.value.toUpperCase();
        });
    </script>

    <script>
        document.getElementById("image_path").addEventListener("change", function () {
            const file = this.files[0];
            const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

            if (file && !allowedTypes.includes(file.type)) {
                alert("Invalid file type. Please upload JPG, PNG images only.");
                this.value = '';
            }
        });
    </script>
</body>


</html>