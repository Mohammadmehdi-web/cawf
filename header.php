<style>
    .main-menu ul li.nav-item .nav-link {
    font-size: 14px;
    font-weight: 500;
    padding: 10px 10px;
    color: black;
    text-transform: capitalize;
    transition: all 0.3s ease-in-out;
}
@keyframes colorBlink {
  0%   { color: red; }
  16%  { color: orange; }
  32%  { color: yellow; }
  48%  { color: green; }
  64%  { color: blue; }
  80%  { color: purple; }
  100% { color: red; }
}

.multicolor-blink {
  animation: colorBlink 1.5s infinite;
  font-weight: bold; /* optional: make it stand out */
}
@keyframes colorBlinkFade {
  0%   { color: red; opacity: 1; }
  16%  { color: orange; opacity: 0.8; }
  32%  { color: yellow; opacity: 0.6; }
  48%  { color: green; opacity: 0.8; }
  64%  { color: blue; opacity: 0.6; }
  80%  { color: purple; opacity: 0.8; }
  100% { color: red; opacity: 1; }
}

.multicolor-blink {
  animation: colorBlinkFade 2s infinite;
  font-weight: bold;
}
</style>

<div class="cawf-marquee-wrapper">
    <div class="cawf-marquee">
        <span>
            🚨 Important Notice: Registrations open for LAMAA Academy | Join CAWF to support artists & workers 🎬✨
        </span>
    </div>
</div>
<div class="header-sticky">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo Start -->
            <a class="navbar-brand" href="index.php">
                <img src="images/logo/cawf black.png" alt="Logo">
            </a>
            <!-- Logo End -->

            <!-- Main Menu Start -->
            <div class="collapse navbar-collapse main-menu">
                <div class="nav-menu-wrapper">
                    <ul class="navbar-nav mr-auto" id="menu">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="lamaa/index.php">LAMAA</a></li>
                        <li class="nav-item submenu"><a class="nav-link" href="index.html">Our Team</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="index-2.html">Delhi Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-video.html">UP Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-slider.html">Haryana Team</a></li>
                                    </ul>
                                </li>
                        <li class="nav-item"><a class="nav-link" href="#">Upcoming Projects</a></li>
                        <li class="nav-item"><a class="nav-link " href="registration.php">Registration <img src="images\about-image\gif.gif" alt="" srcset="" style="height:25px ;width:25px"></a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="donate-us.php">Donate Us</a></li>
                    </ul>
                </div>

                <!-- Header Social Box Start -->
                <div class="header-social-box d-inline-flex">
                    <!-- Header Social Links Start -->
                    <div class="header-social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/people/cawfindia/100093630427177/?rdid=NWYlETME5Dlhjc0d&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F15w7G7Ao36"
                                    target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/cawf.india/#" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/@CAWF.official" target="_blank"><i
                                        class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- Header Social Links End -->
                </div>
                <!-- Header Social Box End -->
            </div>
            <!-- Main Menu End -->
            <div class="navbar-toggle"></div>
        </div>
    </nav>
    <div class="responsive-menu"></div>
</div>