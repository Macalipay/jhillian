  
@extends('frontend.master.index')

@section('content')
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay="0.1s"><img src="frontend/img/hero/shot.png" alt="" style="width: 100%"></h1>
                                <div class="header-btn" style="text-align: center;">
                                <a href="courses.html" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Traning categories Start -->
    <section class="traning-categories black-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="frontend/img/gallery/cat1.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>Dayo Series</h3>
                                    <p>Team Jhillian Palis clashes against different teams in a 5v5 full court basketball. Stay tuned!</p>
                                    <a href="courses.html" class="border-btn">View Schedules</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="frontend/img/gallery/cat2.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>1 on 1</h3>
                                    <p>Jhillian Palis battles on a 1 versus 1 with different basketball players on a half court. Stay tuned!</p>
                                    <a href="courses.html" class="border-btn">View Schedules</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traning categories End-->
    <!--? Team -->
    <section id="buytickets" class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="frontend/img/gallery/team1.png" alt="" style="border: 1px solid white;">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">DAYO SERIES 1</a></h5>
                            <p>July 20, 2022 - 8:00 PM</p>
                            <a href="courses.html" class="border-btn">Buy Tickers</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="frontend/img/gallery/team2.png" alt="" style="border: 1px solid white;">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">DAYO SERIES 2</a></h5>
                            <p style="">July 25, 2022 - 8:00 PM</p>
                            <a href="courses.html" class="border-btn">Buy Tickers</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="frontend/img/gallery/team3.png" alt="" style="border: 1px solid white;">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">DAYO SERIES 3</a></h5>
                            <p>July 30, 2022 - 8:00 PM</p>
                            <a href="courses.html" class="border-btn">Buy Tickers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30 ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(frontend/img/gallery/gallery1.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>2x2 </h3>
                                <a href="gallery.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(frontend/img/gallery/gallery2.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>GOTSKILLS BASKETBALL </h3>
                                <a href="gallery.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(frontend/img/gallery/gallery3.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>JHILLIAN ON KUMU </h3>
                                <a href="gallery.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(frontend/img/gallery/gallery4.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>GOTSKILLS BASKETBALL 2 </h3>
                                <a href="gallery.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(frontend/img/gallery/gallery5.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>HoopX </h3>
                                <a href="gallery.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(frontend/img/gallery/gallery6.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>MAV'S ACADEMY </h3>
                                <a href="gallery.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!--? About Area-2 Start -->
    <section id="jhillian" class="about-area2 fix pb-padding pt-50 pb-80">
        <div class="support-wrapper align-items-center">
            <div class="right-content2">
                <!-- img -->
                <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <img src="frontend/img/gallery/about.png" alt="">
                </div>
            </div>
            <div class="left-content2">
                <!-- section tittle -->
                <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="front-text">
                        <h2 class="">Jhillian Palis</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="mb-40">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="courses.html" class="border-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--? Blog Area Start -->
    <section id="highlights" class="home-blog-area pt-10 pb-50">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>FEATURED HIGHLIGHTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sh9vK-fuotM" allowfullscreen></iframe>
                        </div>
                        <div class="blog-img-cap">
                            <div class="blog-cap">
                                <span>KALYE IRVING AT BATANG STEPH</span>
                                <h3><a href="https://youtu.be/sh9vK-fuotM" target="_blank">ANG MATINDING KALABAN NI KALYE IRVING AT BATANG STEPH SA 2V2 BASKETBALL ( Jhillian Palis )</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dAcARZ-9fGs" allowfullscreen></iframe>
                        </div>
                        <div class="blog-img-cap">
                            <div class="blog-cap">
                                <span>LAKAS NG KALABAN</span>
                                <h3><a href="https://youtu.be/dAcARZ-9fGs" target="_blank">SINALPAKAN SI JHILLIAN - GRABE INTENSE NITO - BATTLE OF THE YEAR | S.2. vlog 273</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pPFapTwUm_I" allowfullscreen></iframe>
                        </div>
                        <div class="blog-img-cap">
                            <div class="blog-cap">
                                <span>JHILLIAN VS. ANKLE JOEY</span>
                                <h3><a href="https://youtu.be/pPFapTwUm_I" target="_blank">PUMALAG SI JHILLIAN - PISIKALAN TALAGA - GRABE BANGGAAN | S.2. vlog 298</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Y8P-RmHsKTc" allowfullscreen></iframe>
                        </div>
                        <div class="blog-img-cap">
                            <div class="blog-cap">
                                <span>Jhillian Palis WALANG TAKOT</span>
                                <h3><a href="https://youtu.be/Y8P-RmHsKTc" target="_blank">Jhillian Palis WALANG TAKOT kahit SENIOR TEAM na ang KATAPAT</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
    <!--? video_start -->
    <div class="video-area section-bg2 d-flex align-items-center"  data-background="frontend/img/gallery/video-bg.png">
        <div class="container">
            <div class="video-wrap position-relative">
                <div class="video-icon" >
                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=VRt4WcVr5gs"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- video_end -->
    <!-- ? services-area -->
    <section class="services-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="features-icon">
                            <img src="frontend/img/icon/icon1.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Location</h3>
                            <p>Brgy Sta. Lucia Novaliches Quezon City</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="features-icon">
                            <img src="frontend/img/icon/icon2.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Phone</h3>
                            <p>(90) 277 278 2566</p>
                            <p>  (78) 267 256 2578</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="features-icon">
                            <img src="frontend/img/icon/icon3.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Email</h3>
                            <p>test@jhillianpalis.com</p>
                            <p>contact56@jhillianpalis.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection