<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>LAMAA | Home</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/cawf-logo-1.jpg" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,900,900i" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--== Font-awesome Icons CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!--== Icofont Min Icons CSS ==-->
    <link href="assets/css/icofont.min.css" rel="stylesheet"/>
    <!--== lastudioIcons CSS ==-->
    <link href="assets/css/lastudioIcons.css" rel="stylesheet"/>
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <!--== Aos CSS ==-->
    <link href="assets/css/aos.css" rel="stylesheet"/>
    <!--== FancyBox CSS ==-->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet"/>
    <!--== Slicknav CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet"/>
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet"/>
    <!--== Slick CSS ==-->
    <link href="assets/css/slick.css" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
      .collection-area.collection-winter-area {
    background-color: #eee;
    padding: 100px 0 94px;
    margin-top: 8rem;
}
      .title-stroke{
          color: #A64637;
    font-size: 60px;
    font-style: italic;
    font-weight: 700;
    line-height: 1;
    text-transform: uppercase;
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: currentColor;
}


      .register-btn {
        background: linear-gradient(135deg, #ff416c, #ff4b2b);
        padding: 12px 25px;
        color: #fff;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 16px;
        box-shadow: 0 0 15px rgba(255, 75, 43, 0.5);
        animation: blinkGlow 1.5s infinite;
        transition: background 0.3s ease, transform 0.2s ease;
        display: inline-block;
      }

      .register-btn:hover {
        background: linear-gradient(135deg, #ff4b2b, #ff416c);
        transform: scale(1.05);
      }

      /* Blinking glow animation */
      @keyframes blinkGlow {
        0%, 100% {
          box-shadow: 0 0 10px rgba(255, 75, 43, 0.4), 0 0 20px rgba(255, 75, 43, 0.3);
        }
        50% {
          box-shadow: 0 0 20px rgba(255, 75, 43, 0.8), 0 0 30px rgba(255, 75, 43, 0.6);
        }
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
      .header-area.header-default .header-navigation-area .main-menu {
        margin-left: 0px !important;
      }
      .header-area.sticky-header.sticky.header-style5 .header-logo-area .logo-light{
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
        .category-area.category-style9-area{
            margin-top: 5rem;
        }
        .text-justify{
            text-align: justify;
        }
         @media only screen and (max-width: 1199px) {
    .header-area.header-default .container-fluid {
        padding: 0px 30px;
    }
    .header-area.header-default.header-style5 .header-logo-area img{
      padding-top: 10px;
      padding-bottom: 14px;
    }
}

  @media (max-width: 768px) {
      .phone-link, .demo-btn {
          font-size: 0.9rem;
          display: flex
  ;
          justify-content: center;
          align-items: center;
      }
  }
  @media screen and (min-width: 768px) {
      .res-dd-none {
          display: none !important;
      }
  }
  @media only screen and (max-width: 767px) {
    .home-five-wrapper .header-area.header-default.header-style5 .container-fluid {
        padding: 0px 15px;
    }
}

.phone-link {
    flex: 1;
    text-decoration: none;
    color: #a64637;
    font-size: 1rem;
    font-weight: bold;
    display: flex
;
    align-items: center;
    justify-content: center;
    gap: 10px;
    height: 100%;
    background-color: white;
}
    </style>

</head>

<body>

<!--wrapper start-->
<div class="wrapper home-five-wrapper">

  <!--== Start Preloader Content ==-->
  <div class="preloader-wrap">
    <div class="preloader">
      <img src="./assets/img/cawf-logo-1.jpg" alt="" srcset="">
    </div>
  </div>
  <!--== End Preloader Content ==-->

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default header-transparent header-style5 sticky-header">
    <div class="container-fluid">
      <div class="row row-gutter-0 align-items-center">
        <div class="col-4 col-xs-3 col-sm-3 col-md-3 col-xl-2 col-xxl-3">
          <div class="header-logo-area">
            <a href="index.html">
              <img class="logo-main" src="assets/img/cawf white.png" alt="Logo" />
              <img class="logo-light" src="assets/img/cawf black.png" alt="Logo" />
            </a>
          </div>
        </div>
        <div class="col-md-7 col-xl-7 col-xxl-6 d-none d-xl-block">
          <div class="header-align">
            <div class="header-navigation-area">
              <ul class="main-menu nav justify-content-center position-relative">
                <li class=" active"><a href="../index.php">Home</a></li>
                <li><a href="../about.php">About Us</a></li>
                <li><a href="index.php">LAMAA</a></li>
                <li><a href="../registration.php">Registration</a></li>
                <li><a href="../contact.php">Contact Us</a></li>      
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col-8 col-xs-9 col-sm-9 col-md-9 col-xl-3 col-xxl-3">
          <div class="header-action-area">    
            <div class="header-action-login">    
            </div>         
            <button class="btn-menu d-xl-none">
              <i class="lastudioicon-menu-3-1"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->
  
  <main class="main-content">
    <!-- Popup Form -->
    

    <script>
      // Show popup on page load
      window.onload = function() {
        document.getElementById("popup").style.display = "block";
      };

      // Close popup
      function closePopup() {
       document.getElementById("popup").style.display = "none";
      }
    </script>
    <!-- Popup form + script end -->

    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area slider-home5">
      <div class="home-slider-content">
        <!-- Start Slide Item -->
        <div class="home-slider-item">
          <div class="col-left">
            <div class="category-items-style4">
              <div class="category-item hover-effect effect-style1">
                <div class="thumb">
                  <a href="index.php"><img src="assets/img/banner/lamaa-banner-1.jpg" alt="Moren-Shop"></a>
                  <div class="effect-content"></div>
                </div>
                <div class="content">
                  <h4 class="title"></h4>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-right">
            <div class="inner-content">
              <div class="title-style">
                <h2 class="title"> LAmaa</h2>
                <h3 class="title-stroke">CAWf</h3>
                <h4 class="sub-title"></h4>
              </div>
              <div class="category-items-style6">
                <div class="row row-gutter-50">
                  <div class="col-6">
                    <div class="category-item hover-effect effect-style1">
                      <div class="thumb">
                        <a href="index.php"><img src="assets/img/Main banner/2.jpg" alt="Moren-Shop"></a>
                        <div class="effect-content"></div>
                      </div>
                      <div class="content">
                        <h4 class="title"></h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="category-item hover-effect effect-style1">
                      <div class="thumb">
                        <a href="index.php"><img src="assets/img/Main banner/3.jpg" alt="Moren-Shop"></a>
                        <div class="effect-content"></div>
                      </div>
                      <div class="content">
                        <h4 class="title"></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="inner-content text-justify">
                <p>LAMAA – La Modeling & Acting Academy is a premier training institute dedicated to shaping the next generation of models and actors. With over a decade of industry experience, we offer expert-led, hands-on training in acting, fashion, and commercial modeling. </p>
                
              </div>
              <div class="inner-content text-justify" style="margin-top: 16px;">
                <p>LAMAA serves as a launchpad for aspiring talent aiming to build successful careers in cinema, television, fashion modeling, commercial advertising, and soon, media production.</p>
              </div>
              
            </div>
          </div>
        </div>
        <!-- End Slide Item -->
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Why choose Us  Wrapper ==-->
    <section class="collection-area collection-winter-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="align-items">
              <div class="col-left">
                <div class="content" data-aos="fade-up" data-aos-duration="1000">
                  <div class="section-title">
                    <h2 class="title"><span>Why</span> Choose Us </h2>
                    <p class="text-justify">At LAMAA, we don’t just teach — we launch futures. With a focus on real-world learning, small class sizes, and creative freedom, our students explore every angle of performance art. Whether it's your first audition or your first ramp walk, we make sure you're ready, confident, and connected to the industry.Choosing LAMAA means choosing excellence. Our expert-led programs are tailored to transform raw talent into polished performers.</p>
                  </div>
                </div>
              </div>
              <div class="col-right">
                <div class="category-items-style7">
                  <div class="category-item hover-effect effect-style1 item-one">
                    <div class="thumb">
                      <a href="#"><img src="assets/img/Why Choose Us/8.jpg" alt="Moren-Images"></a>
                      <div class="effect-content"></div>
                    </div>
                  </div>
                  <div class="category-item hover-effect effect-style1 item-two">
                    <div class="thumb">
                      <a href="#"><img src="assets/img/Why Choose Us/7.jpg" alt="Moren-Images"></a>
                      <div class="effect-content"></div>
                    </div>
                  </div>
                  <div class="category-item hover-effect effect-style1 item-three">
                    <div class="thumb">
                      <a href="#"><img src="assets/img/Why Choose Us/9.jpg" alt="Moren-Images"></a>
                      <div class="effect-content"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Why Choose Us Wrapper ==-->
    <!--== Start Unlesh category Area Wrapper ==-->
    <section class="category-area category-style8-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="category-items-style12 item-one">
              <div class="category-item hover-effect effect-style1">
                <div class="thumb">
                  <img src="assets/img/Why Choose Us/10.jpg" alt="shop-Image">
                  <div class="effect-content"></div>
                </div>
                
              </div>
              <div class="category-item hover-effect effect-style1">
                <div class="thumb">
                  <img src="assets/img/Why Choose Us/12.jpg" alt="shop-Image">
                  <div class="effect-content"></div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="section-title">
              <h2 class="title">Our Mission &</h2>
              <h3 class="title-stroke">Vission</h3>
              <p class="text-justify" style="margin-bottom: 1rem;">Our mission is to empower aspiring actors and models with the skills, confidence, and industry exposure needed to succeed in the world of cinema, television, and fashion. We are committed to nurturing talent through personalized, practical training and creating a platform where creativity meets real-world opportunities.We aim to be a launchpad for aspiring actors and models.</p>
               <p class="text-justify" style="margin-top: 0px !important;">Our vision is to become a leading academy for creative and performing arts in India, recognized for nurturing talent and delivering industry-ready professionals in acting, modeling, and filmmaking. We envision a platform where creativity is celebrated, individuality is respected, and every aspiring artist finds the guidance, support, and opportunity to shine on global stages.</p>
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="category-items-style12 item-two">
              <div class="category-item hover-effect effect-style1">
                <div class="thumb">
                  <img src="assets/img/Why Choose Us/11.jpg" alt="shop-Image">
                  <div class="effect-content"></div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Unlesh category Area Wrapper ==-->

    <!--== Start Products Area Wrapper ==-->
    <section class="product-area product-style1-area style-two">
      <div class="container">
        <div class="row ">
          <div class="col-md-8 col-lg-6 m-auto">
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
              <h2 class="title" style="font-style: italic;">Our</h2>
              <h3 class="title-stroke">Courses</h3>
            </div>
          </div>
        </div>
        <div class="row row-gutter-150 product-items-style3">
          
          <div class="col-sm-6 col-md-4">
            <!-- Start Product Item -->
            <div class="product-item">
              <div class="product-thumb">
                <a href="#">
                  <img src="assets/img/other catagory/13.jpg" alt="Moren-Shop">
                  <span class="thumb-overlay"></span>
                </a>
                
              </div>
              <div class="product-info">
                <div class="content-inner">
                  <h4 class="title"><a href="#">Diploma in Fashion & Commercial Modelling</a></h4>
                  <h5 class="category"><a href="#"></a></h5>
                </div>
                
              </div>
            </div>
            <!-- End Product Item -->
          </div>
          <div class="col-sm-6 col-md-4">
            <!-- Start Product Item -->
            <div class="product-item mt-xs-50">
              <div class="product-thumb">
                <a href="#">
                  <img src="assets/img/other catagory/14.jpg" alt="Moren-Shop">
                  <span class="thumb-overlay"></span>
                </a>      
              </div>
              <div class="product-info">
                <div class="content-inner">
                  <h4 class="title"><a href="#">Diploma In Acting for Film & Television</a></h4>
                  <h5 class="category"><a href="#"></a></h5>
                </div>
              </div>
            </div>
            <!-- End Product Item -->
          </div>
          <div class="col-sm-6 col-md-4">
            <!-- Start Product Item -->
            <div class="product-item mt-sm-50">
              <div class="product-thumb">
                <a href="#">
                  <img src="assets/img/other catagory/15.jpg" alt="Moren-Shop">
                  <span class="thumb-overlay"></span>
                </a>     
              </div>
              <div class="product-info">
                <div class="content-inner">
                  <h4 class="title"><a href="#">Diploma in Cinematography</a></h4>
                  <h5 class="category"><a href="#"></a></h5>
                </div>
              </div>
            </div>
            <!-- End Product Item -->
          </div>
        </div>
      </div>
    </section>
    <!--== End Products Area Wrapper ==-->

    <!--== Start Our Training category Area Wrapper ==-->
    <section class="category-area category-style9-area">
      <div class="container">
        <div class="row row-gutter-0">
          <div class="col-lg-6">
            <div class="section-title">
              <h2 class="title">Our Training</h2>
              <h3 class="title-stroke">Expertise</h3>
            </div>
            <div class="col-items">
              <div class="col-left">
                <div class="category-items-style12 item-one">
                  <div class="category-item hover-effect effect-style1">
                    <div class="thumb">
                      <img src="assets/img/training/16.jpg" alt="shop-Image">
                      <div class="effect-content"></div>
                    </div>
                    
                  </div>
                </div>
                <div class="category-items-style12 item-two">
                  <div class="category-item hover-effect effect-style1">
                    <div class="thumb">
                      <img src="assets/img/training/17.jpg" alt="shop-Image">
                      <div class="effect-content"></div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-right">
                <div class="category-items-style12 item-three">
                  <div class="category-item hover-effect effect-style1">
                    <div class="thumb">
                      <img src="assets/img/training/18.jpg" alt="shop-Image">
                      <div class="effect-content"></div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="content">
              <div class="inner-content">
                <p class="text-justify">At LAMAA, we specialize in delivering immersive, industry-standard training that transforms passion into professional excellence. Our programs are rooted in hands-on, performance-based learning, guided by experienced mentors from the film, television, and fashion industries.</p>
                <p class="text-justify">We emphasize practical exposure — including live shoots, auditions, showreel creation, and real casting simulations — so that students don’t just learn the craft, but truly live it. Each training module is thoughtfully designed to nurture individual strengths, enhance on-camera confidence, and prepare students to navigate the competitive industry with clarity, creativity, and conviction.</p>          
              </div>
            </div>
            <div class="category-items-style12 item-four">
              <div class="category-item hover-effect effect-style1">
                <div class="thumb">
                  <img src="assets/img/training/19.jpg" alt="shop-Image">
                  <div class="effect-content"></div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Our Training category Area Wrapper ==-->

    <!--== Start Instagram Gallery Area Wrapper ==-->
    <section class="gallery-area gallery-style5-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6 m-auto">
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
              
              <h3 class="title-stroke">Gallery</h3>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1200">
          <div class="col-md-12">
            <div class="galery-masonry-style1 masonry-grid">
              <div class="masonry-item">
                <div class="gallery-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/img/gallery/s1.jpg" alt="Moren-Image"></a>
                  </div>
                </div>
              </div>
              <div class="masonry-item item-size2">
                <div class="gallery-item">
                  <div class="thumb">
                    <a href="#ml"><img src="assets/img/instagram/1.jpg" alt="Moren-Image"></a>
                  </div>
                </div>
              </div>
              <div class="masonry-item">
                <div class="gallery-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/img/gallery/s3.jpg" alt="Moren-Image"></a>
                  </div>
                </div>
              </div>
              <div class="masonry-item item-size2">
                <div class="gallery-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/img/instagram/2.jpg" alt="Moren-Image"></a>
                  </div>
                </div>
              </div>
              <div class="masonry-item">
                <div class="gallery-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/img/gallery/s5.jpg" alt="Moren-Image"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Insta Gallery Area Wrapper ==-->

  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area footer-style6">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-logo-area">
              <a href="index.html">
                <img class="logo-main" src="assets/img/cawf black.png" alt="Logo" />
              </a>
            </div>
          </div>
        </div>
        <div class="row row-gutter-60">
          <div class="col-sm-6 col-lg-3">
            <div class="widget-item">
              <h4>Contact Us</h4>
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="https://maps.app.goo.gl/EzFr5MHJBDwQqtz38" target="_blank">C13 Shivalik Colony, Basant Kaur Marg, Malviya Nagar, India, Delhi</a></li>
                  <li><a href="mailto://hello@cawf.in">hello@cawf.in</a></li>
                  <li><a href="tel://+919555584040">+91 9555584040</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="widget-item ml-39 ml-md-0 mt-xs-30">
              <h4>Quick Links</h4>
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                   <li><a href="../index.php">home</a></li>
                    <li><a href="../about.php">About us</a></li>
                   
                    <li><a href="../contact.php">Contact us</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="widget-item ml-45 ml-md-0 mt-md-30">
              <h4>Important Links</h4>
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="../registration.php">Registration</a></li>
                  <li><a href="../terms-and-condition.html" target="_blank">Terms & Condition</a></li>
                  <li><a href="../privacy-and-policy.html" target="_blank">Privacy & Policy</a></li>
                  <li><a href="../refund.html" target="_blank">Refund & Cancellation Policy</a></li>
                    
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 pl-27 pl-md-15 mt-md-30">
            <div class="widget-item">
              <h4>social</h4>
              <div class="widget-social-icons">
                <a href="https://www.facebook.com/people/cawfindia/100093630427177/?rdid=NWYlETME5Dlhjc0d&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F15w7G7Ao36" target="_blank"><i class="lastudioicon lastudioicon-b-facebook"></i></a> 
                <a href="https://www.instagram.com/cawf.india/#" target="_blank"><i class="lastudioicon lastudioicon-b-instagram"></i></a>
                <a href="https://www.youtube.com/@CAWF.official" target="_blank"><i class="lastudioicon lastudioicon-b-youtube"></i></a>
                
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
       <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-6">
               <div class="footer__bottom-right text-lg-end">
                  <p>Copyright © 2025 CAWF, All Rights Reserved.<a
                     href="#"
                     target="_blank"></a></p>
               </div>
            </div>
             <div class="col-12 col-lg-6">
                <div class="footer__bottom-left">
                   <ul class="footer__bottom-list  justify-content-lg-start" style="margin-bottom: 0px;">
                      <li class="text-right"><a href="http://auctech.in/"  target="_blank" >Design and Developed by <span class="text-warning" style="font-weight: 600;">Auctech Marcom</span> </a></li>
                   </ul>
                </div>
             </div>
             
          </div>
       </div>
    </div>
      </div>
    </div>
  </footer>
  <!--== End Footer Area Wrapper ==-->
  
  <!--== Scroll Top Button ==-->
  <div class="scroll-to-top"><span class="icofont-arrow-up"></span></div>

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay d-none"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-close"><i class="icofont-close-line"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
        <!-- Off Canvas Footer -->
        <div class="off-canvas-footer"></div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jquery Appear Js ===-->
<script src="assets/js/jquery.appear.js"></script>
<!--=== jquery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jquery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jquery Aos Min Js ===-->
<script src="assets/js/aos.min.js"></script>
<!--=== jquery Slicknav Js ===-->
<script src="assets/js/jquery.slicknav.js"></script>
<!--=== jquery Countdown Js ===-->
<script src="assets/js/jquery.countdown.min.js"></script>
<!--=== jquery Tippy Js ===-->
<script src="assets/js/tippy.all.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!--=== jquery Vivus Js ===-->
<script src="assets/js/vivus.js"></script>
<!--=== Parallax Min Js ===-->
<script src="assets/js/parallax.min.js"></script>
<!--=== Slick  Min Js ===-->
<script src="assets/js/slick.min.js"></script>
<!--=== jquery Wow Min Js ===-->
<script src="assets/js/wow.min.js"></script>
<!--=== jquery Zoom Min Js ===-->
<script src="assets/js/jquery-zoom.min.js"></script>

<!--=== Custom Js ===-->
<script src="assets/js/custom.js"></script>
<div class="sticky-footer res-dd-none">
        <!-- Left Section: Phone Number -->
        <a href="https://wa.me/919555584040" class="phone-link" target="_blank">
            <img width="25" height="25" src="https://img.icons8.com/sf-black-filled/64/a64637/whatsapp.png" alt="whatsapp"/> +91 9555584040
        </a>
        <!-- Right Section: Request a Demo Button -->
        <a class="demo-btn" href="../contact.php">Contact Us</a>
</div>

</body>

</html>