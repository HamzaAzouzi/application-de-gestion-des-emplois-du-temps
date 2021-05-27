<?php
require_once "view/includes/header.php";

if ($_SESSION['logged'] == 0) {
    header("location:http://localhost/brief5/user/login");
}
?>



<div  style="overflow: hidden; height:90vh ;width:100% ;     background-color: #BCDDFF;" class=" single-slider slider-height d-flex align-items-center slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1375px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
    <div class="container " style="overflow: hidden; height:100vh ;">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-3 col-md-4">
                <div class="hero__caption">
                    <span data-animation="fadeInLeft" data-delay=".2s" class="" style="animation-delay: 0.2s;">Popular Online Courses</span>
                    <h1 data-animation="fadeInLeft" data-delay=".4s" class="" style="animation-delay: 0.4s;">The New Way To Learn Properly in With Us!</h1>

                    <div class="hero__btn">
                        <a href="http://localhost/brief5/salle" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s" tabindex="0" style="animation-delay: 0.8s;">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="hero-man  d-lg-block f-right" data-animation="jello" data-delay=".4s" style="animation-delay: 0.4s;">
                    <img src="/brief5/assets/img/homePic.webp" alt="" data-pagespeed-url-hash="2056260475" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
            </div>
        </div>
    </div>
</div>