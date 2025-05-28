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
    <title>CAWF | Home</title>
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

        .company-experience {
            right: 90px;
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

    <!-- Hero Section Start -->
    <div class="hero hero-slider-layout">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                include('db_con.php');
                $result = $con->query("SELECT image_path,title, details FROM add_banner");

                while ($row = $result->fetch_assoc()):
                    ?>
                <!-- Hero Slide Start -->
                <div class="swiper-slide ">
                    <div class="hero-slide" style="height: 100%;">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image" style="height: 100%;">
                            <img src="admin/<?php echo ($row['image_path']); ?>" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title dark-section">
                                            <!-- <h3 class="wow fadeInUp">Welcome to CAWF</h3>
                                                <h1 class="text-anime-style-2" data-cursor="-opaque">
                                                    <?php echo ($row['title']); ?>
                                                </h1> -->
                                            <p class="wow fadeInUp text-justify d-none d-xl-block "
                                                data-wow-delay="0.25s"> <?php echo ($row['details']); ?></p>
                                                
                                            <br><br>
                                        </div>
                                        <!-- Section Title End -->

                                    </div>
                                    <!-- Hero Content End -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

                <?php endwhile; ?>
            </div>
            <div class="hero-pagination"></div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <!-- About Image Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="images\home-image\1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- About Image Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="images\home-image\2.jpg" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- Company Experience Start -->
                        <div class="company-experience">
                            <img style="height:90px;" src="images/logo/cawf black.png" alt="">

                        </div>
                        <!-- Company Experience End -->
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">

                            <h2 class="text-anime-style-2" data-cursor="-opaque"
                                style="border-bottom: 2px solid #000; width: 50%;">About <span>CAWF</span></h2>
                            <p class="wow fadeInUp text-justify text-dark" data-wow-delay="0.25s">Cine Artist & Workers
                                Welfare
                                Federation (CAWF) is a welfare organization that supports artists and workers in the
                                film, television, and entertainment industry. We aim to protect their rights, provide
                                opportunities, and offer support in times of need.
                                <br><br>
                                Our mission is to uplift the lives of those working behind and in front of the camera by
                                offering guidance, training, legal help, medical aid, and financial support. Whether
                                you're an actor, technician, writer, or worker, we stand by your side for a better and
                                secure future.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <!-- About List Btn Box Start -->
                                    <div class="about-list-btn">
                                        <!-- About Content List Start -->
                                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                            <ul class="text-dark">
                                                <li>Welfare Schemes for Artists & Workers</li>
                                                <li>Legal & Employment Rights Protection</li>
                                                <li>Skill Development & Training Programs</li>
                                                <li>ID Cards & Worker Registration</li>
                                            </ul>
                                        </div>
                                        <!-- About Content List End -->


                                    </div>
                                    <!-- About List Btn Box End -->
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->


    <!-- Our Story Start -->
    <div class="our-story" style="background-color: #b57745;">
        <div class="container">


            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Story Image Start -->
                    <div class="our-story-img">
                        <figure class="reveal image-anime">
                            <img src="images\home-image\3.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Our Story Image End -->
                </div>

                <div class="col-lg-6">
                    <div class="our-story-content">
                        <div class="our-story-content-body">
                            <div class="section-title">

                                <h2 class="text-anime-style-2 text-light" data-cursor="-opaque"><span>Our Story</span>
                                </h2>
                            </div>
                            <p class="text-justify text-light">

                                Cine Artist & Workers Welfare Federation (CAWF) was born with a single vision — to
                                uplift, empower, and protect every individual working in the world of cinema, media, and
                                entertainment. From junior artists and backstage technicians to rising models and
                                celebrated performers, CAWF stands as a strong support system for all.

                                <br><br>
                                Our Modeling Campaigns are designed to bring fresh talent into the spotlight — guiding,
                                mentoring, and launching them into mainstream media. We don’t just promote glamour; we
                                promote skill, dedication, and authenticity.
                                <br><br>
                                Taking our vision one step ahead, we founded LAMAA — Life & Media Artist Academy, a
                                training ground for future stars. At LAMAA, budding actors, models, influencers, and
                                creators receive professional guidance, industry exposure, and life-changing
                                opportunities to rise and shine.
                                <br><br>
                                From providing welfare support and legal aid to hosting awareness drives and talent
                                showcases, CAWF is not just an organization — it's a movement. A movement that says
                                <b> “From Set to Success: We’re With You.”</b>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Story End -->

    <div class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Gallery</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Moments That Define <span>Our
                                Mission</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>


            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Choose Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                            <li><a href="#" data-filter=".Uttar-Pradesh">Uttar Pradesh</a></li>
                            <li><a href="#" data-filter=".Delhi">Delhi</a></li>
                             <li><a href="#" data-filter=".Haryana">Haryana</a></li>
                            <li><a href="#" data-filter=".rakshak-award">Rakshak Award</a></li>
                            
                        </ul>
                    </div>
                    <!-- Choose Our Project Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">

                        <div class="col-md-4 project-item-box rakshak-award">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/WhatsApp%20Image%202025-02-16%20at%2018.40.32-c659bf6.jpeg/:/rs=w:1280,h:591"
                                            alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">Rakshak Award</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>


                        <div class="col-md-4 project-item-box Uttar-Pradesh">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/up-1.jpeg"
                                            alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-4 project-item-box Uttar-Pradesh">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/up-2.jpeg"
                                            alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-4 project-item-box Uttar-Pradesh">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/up-3.jpeg"
                                            alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-4 project-item-box Uttar-Pradesh">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/up-4.jpeg"
                                            alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-4 project-item-box Delhi">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/d-1.jpeg"
                                            alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-4 project-item-box Delhi">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/d-2.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                         <div class="col-md-4 project-item-box Haryana">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/hr-2.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                         <div class="col-md-4 project-item-box Haryana">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/hr-1.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                         <div class="col-md-4 project-item-box Haryana">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/hr.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                         <div class="col-md-4 project-item-box Haryana">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/hr-4.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                         <div class="col-md-4 project-item-box Haryana">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/hr-5.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                         <div class="col-md-4 project-item-box Haryana">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/hr-6.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                         <div class="col-md-4 project-item-box Haryana">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/hr-7.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                         <div class="col-md-4 project-item-box Haryana">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/hr-8.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                        <div class="col-md-4 project-item-box rakshak-award">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="cine-images/r-1.jpeg" alt="">
                                    </figure>
                                </div>

                                <div class="project-content">
                                    <h3><a href="#">Rakshak Award</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>

    <div class="our-work" style="background-color: #faebd7;">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">

                        <h2 class="text-anime-style-2 " data-cursor="-opaque">Proof of Excellence from
                            <span>Around the World</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row align-items-center ">
                        <div class="cawf_cert_slider__container">
                            <div class="cawf_cert_slider__wrapper">
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/df909f7e-48ac-4cf8-9470-ed70540f4120.jpg/:/rs=w:984,h:1217"
                                        alt="Certificate 1">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/IMG-20231219-WA0009.jpg/:/"
                                        alt="Certificate 2">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/IMG-20231130-WA0016.jpg/:/rs=w:719,h:1278"
                                        alt="Certificate 3">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/IMG-20231130-WA0015.jpg/:/"
                                        alt="Certificate 4">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/IMG-20231228-WA0064.jpg/:/"
                                        alt="Certificate 5">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/42e75ffc-dd92-4db9-bbd9-02a4a65aed0c.jpg/:/"
                                        alt="Certificate 5">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/CAWF%20WEBSITE%20HEAD-9a72c94.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25"
                                        alt="Certificate 5">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/70187e46-c712-4cd6-865b-cc69c09bbb68.jpg/:/cr=t:0%25,l:3.55%25,w:92.9%25,h:100%25"
                                        alt="Certificate 5">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/348fa9b6-14e7-47dc-aec9-540f09ed4232.jpg/:/"
                                        alt="Certificate 5">
                                </div>
                                <!-- Add more slides -->
                            </div>
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>



    <div class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Video Gallery</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Experience our impact through
                            <span> events, awards & campaigns.</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="cawf-video-slider">
                        <div class="cawf-video-slide">
                            <div class="cawf-video-frame">
                                <iframe src="https://youtu.be/mzqFBbQTPmo?si=i0Q_LBansNBmOpoR" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="cawf-video-slide">
                            <div class="cawf-video-frame">
                                <iframe src="https://www.youtube.com/watch?v=S5SXGYgrkgw" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="cawf-video-slide">
                            <div class="cawf-video-frame">
                                <iframe src="https://www.youtube.com/watch?v=TdpjZmNb26w" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="cawf-video-slide">
                            <div class="cawf-video-frame">
                                <iframe src="https://www.youtube.com/watch?v=mzqFBbQTPmo" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>






    <div class="our-process">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Why Choose Us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Guiding you from raw talent <span> to
                                stardom</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p class="text-justify">At CAWF, we believe in more than just support — we believe in standing
                            by our artists and workers like family. From healthcare to legal aid, from recognition to
                            training — we are committed to uplifting every life behind the screen.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Process Image Start -->
                    <div class="our-process-image">
                        <figure class="image-anime reveal">
                            <img src="images\home-image\4.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Our Process Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Process Step Box Start -->
                    <div class="process-steps-box">
                        <!-- Process Step Item Start -->
                        <div class="process-step-item wow fadeInUp">
                            <div class="process-step-no">
                                <h2>01</h2>
                            </div>
                            <div class="process-step-content">
                                <h3>Full Support, On and Off Set</h3>
                                <p class="text-justify">We provide medical aid, financial help, and emotional support to
                                    our members during both professional and personal challenges.</p>
                            </div>
                        </div>
                        <!-- Process Step Item End -->

                        <!-- Process Step Item Start -->
                        <div class="process-step-item active wow fadeInUp" data-wow-delay="0.25s">
                            <div class="process-step-no">
                                <h2>02</h2>
                            </div>
                            <div class="process-step-content">
                                <h3> Legal Protection for Every Worker</h3>
                                <p class="text-justify">From contract disputes to payment delays, our legal team
                                    ensures your rights are protected at every step of your journey.
                                </p>
                            </div>
                        </div>
                        <!-- Process Step Item End -->

                        <!-- Process Step Item Start -->
                        <div class="process-step-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="process-step-no">
                                <h2>03</h2>
                            </div>
                            <div class="process-step-content">
                                <h3>Training to Build Your Future</h3>
                                <p class="text-justify">We regularly conduct skill development programs, workshops, and
                                    mentoring sessions to help you grow and stay relevant in the industry.</p>
                            </div>
                        </div>
                        <!-- Process Step Item End -->
                    </div>
                    <!-- Process Step Box End -->
                </div>
            </div>
        </div>
    </div>


    <div class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Gallery</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Captured
                            <span>Highlights of CAWF</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    include('db_con.php');
                    $result = $con->query("SELECT image_path FROM gallery");
                    ?>
                    <!-- Project Item Boxes start -->
                    <div class="row align-items-center ">

                        <div class="row gallery-items page-gallery-box">
                            <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                            <div class="col-lg-4 col-6 manufacturing">
                                <!-- image gallery start -->
                                <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                                    <a href="admin/<?php echo ($row['image_path']); ?>">
                                        <figure class="image-anime">
                                            <img src="admin/<?php echo ($row['image_path']); ?>" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- image gallery end -->
                            </div>
                            <?php endwhile; ?>
                            <?php else: ?>
                            <p class="text-center">No Gallery Images found.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>


    <div class="our-work" style="background-color: #b57745;">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">

                        <h2 class="text-anime-style-2 text-light" data-cursor="-opaque">Official Certificates &
                            <span>Government Registrations</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>


            </div>

            <div class="row">


                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row align-items-center ">
                        <div class="cawf_cert_slider__container">
                            <div class="cawf_cert_slider__wrapper">
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/df909f7e-48ac-4cf8-9470-ed70540f4120.jpg/:/rs=w:984,h:1217"
                                        alt="Certificate 1">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/IMG-20231219-WA0009.jpg/:/"
                                        alt="Certificate 2">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/IMG-20231130-WA0016.jpg/:/rs=w:719,h:1278"
                                        alt="Certificate 3">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/IMG-20231130-WA0015.jpg/:/"
                                        alt="Certificate 4">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/IMG-20231228-WA0064.jpg/:/"
                                        alt="Certificate 5">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/42e75ffc-dd92-4db9-bbd9-02a4a65aed0c.jpg/:/"
                                        alt="Certificate 5">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/CAWF%20WEBSITE%20HEAD-9a72c94.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25"
                                        alt="Certificate 5">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/70187e46-c712-4cd6-865b-cc69c09bbb68.jpg/:/cr=t:0%25,l:3.55%25,w:92.9%25,h:100%25"
                                        alt="Certificate 5">
                                </div>
                                <div class="cawf_cert_slider__slide"><img
                                        src="https://img1.wsimg.com/isteam/ip/7df9562b-d3ea-471c-940d-fb82bcadca2d/348fa9b6-14e7-47dc-aec9-540f09ed4232.jpg/:/"
                                        alt="Certificate 5">
                                </div>
                                <!-- Add more slides -->
                            </div>
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>




    <!-- Our Story Start -->
    <div class="our-story">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About LAMAA</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">LAMAA – <span>A Creative Platform for
                                Artists</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Story Header Image Start -->
                    <div class="our-story-header-img">
                        <figure class="reveal image-anime">
                            <img src="images\home-image\5.jpg" alt="">
                        </figure>

                        <figure class="reveal image-anime">
                            <img src="images/home-image/6.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Our Story Header Image End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Story Image Start -->
                    <div class="our-story-img">
                        <figure class="reveal image-anime">
                            <img src="images/home-image/7.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Our Story Image End -->
                </div>

                <div class="col-lg-6">
                    <div class="our-story-content">
                        <div class="our-story-content-body">
                            <p>LAMAA (La Modeling & Acting Academy) is where passion meets profession. As a leading
                                institute for acting, modeling, and performing arts, we empower aspiring talents to
                                unlock their true potential through industry-driven, hands-on training. Backed by over a
                                decade of real-world experience, LAMAA offers a unique blend of creativity,
                                confidence-building, and career-focused mentorship.</p>
                            <p>LAMAA is a powerhouse of talent transformation, where dreams take shape and stars are
                                born. With expert mentors from the film, fashion, and television industries, we provide
                                immersive training in acting, modeling, and on-camera performance. Our focus is not just
                                on teaching—but on launching careers.
                            </p>
                            <p>If you are passionate about performing arts and want to join LAMAA, simply fill out the
                                registration form available on our website. Submit your basic details along with a valid
                                ID and a recent photo.
                            </p>
                            <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                                <a href="lamma/index.php" class="btn-default"><span>About LAMAA</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Story End -->


    <!-- Our Faqs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">FAQs</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Frequently asked <span>questions</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="contact.php" class="btn-default"><span>Contact Us</span></a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Faqs Images Start -->
                    <div class="our-faqs-images">
                        <!-- Our Faqs Image Start -->
                        <div class="our-faqs-img">
                            <figure class="image-anime">
                                <img src="images\home-image\8.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Our Faqs Image End -->

                        <!-- Faqs Image Cta Box Start -->
                        <div class="faqs-img-cta-box">
                            <ul>
                                <li><a href="tel:+919555584040"><img src="images/icon-phone-accent.svg" alt=""> +91
                                        9555584040</a></li>
                                <li><a href="mailto:hello@cawf.in"><img src="images/icon-mail-accent.svg" alt="">
                                        hello@cawf.in</a></li>
                            </ul>
                        </div>
                        <!-- Faqs Image Cta Box End -->
                    </div>
                    <!-- Our Faqs Images End -->
                </div>

                <div class="col-lg-6">
                    <div class="our-faq-section">
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="faqaccordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What is CAWF?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>
                                            CAWF stands for Cine Artist & Workers Welfare Federation. It is a non-profit
                                            organization that supports and empowers people working in the film and TV
                                            industry.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        What is the process for CAWF Card registration?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Simply visit our official website, go to the ‘Registration’ section, fill in
                                            your details, upload the payment screenshot and required documents, and
                                            submit the form. We will verify the payment and then email you the card link
                                            on your provided email ID.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        What benefits do members get?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Members receive access to medical support, emergency financial help, legal
                                            aid, training workshops, and welfare programs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        What is LAMAA Academy?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>
                                            LAMAA is a professional training and grooming academy for aspiring artists,
                                            models, and creative individuals, helping them build careers in the
                                            performing arts industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        How will I get confirmation after registration?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Once your payment screenshot and details are verified, you’ll receive a
                                            confirmation on your provided email ID from our team.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->


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

    <!-- Registration Popup Modal -->
    <div class="modal fade cawf-popup" id="cawfRegistrationPopup" tabindex="-1" aria-hidden="true">
        <?php

        $result = $con->query("SELECT image_path FROM  add_popup");
        ?>
        <div class="modal-dialog modal-dialog-centered">
            <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
            <div class="modal-content text-center p-3">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="position: absolute; right:-3px; top: -1px;"></button>
                <img src="admin/<?php echo ($row['image_path']); ?>" alt="Register"
                    class="img-fluid rounded mb-3 popup-image">
                <a href="registration.php" class="btn px-4 py-2"
                    style="background-color: #b57745; color: #ffffff;">Register
                    Now</a>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <p class="text-center">No Pop-Up Images found.</p>
            <?php endif; ?>
        </div>
    </div>


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

    document.addEventListener("DOMContentLoaded", function() {
        const iframes = document.querySelectorAll('.cawf-video-slider iframe');

        iframes.forEach(iframe => {
            const originalUrl = iframe.getAttribute('src');
            const videoId = getYouTubeVideoId(originalUrl);

            if (videoId) {
                const embedUrl = `https://www.youtube.com/embed/${videoId}`;
                iframe.setAttribute('src', embedUrl);
            }
        });

        function getYouTubeVideoId(url) {
            const regex = /(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
            const match = url.match(regex);
            return match ? match[1] : null;
        }
    });
    </script>

</body>

</html>