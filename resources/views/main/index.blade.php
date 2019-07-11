@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - Home @endsection


@section('Description') Sri Shanmugha College of Nursing (SSCOP) is sponsored by Sri Shanmugha Educational and Charitable Trust has providing excellence in Nursing Education. @endsection

@section('MobileTitle') Home @endsection


@section('Home')active @endsection

@section('content')

    <div id="popup" style="display: block;">
        <button id="close">X</button>
    </div>

    <section>
        <!-- Swiper-->
       <!--  <div data-height="47.179%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
            <div class="swiper-wrapper">
                <div data-slide-bg="/images/slider/college.jpg" style="background-position: 50% center" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="range range-xs-center">
                                <div class="cell-md-9 text-center cell-xs-10">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-slide-bg="/images/slider/library.jpg" style="background-position: 70% center" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="range range-xs-center">
                                <div class="cell-md-9 text-center cell-xs-10">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-slide-bg="/images/slider/pharmact-lab.jpg" style="background-position: 70% center" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="range range-xs-center">
                                <div class="cell-md-9 text-center cell-xs-10">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-slide-bg="/images/slider/pharmacy-class.jpg" style="background-position: 60% center" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="range range-xs-center">
                                <div class="cell-md-9 text-center cell-xs-10">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div data-slide-bg="/images/slider/auditorium.jpg" style="background-position: 60% center" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="range range-xs-center">
                                <div class="cell-md-9 text-center cell-xs-10">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div> -->

        <!-- <div data-height="47.179%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
            <div id="swiper-wrapper">
                <img class="imageSlides" src="/images/nursing/nursing-lab-1.jpg" style="background-position: 50% center" class="swiper-slide">
                <img class="imageSlides" src="/images/nursing/nursing-lab-2.jpg" style="background-position: 70% center" class="swiper-slide">
                <img class="imageSlides" src="/images/nursing/shanmugha-hospital-image.jpg" style="background-position: 70% center" class="swiper-slide">
                <img class="imageSlides" src="/images/slider/pharmacy-class.jpg" style="background-position: 60% center" class="swiper-slide">
                <img class="imageSlides" src="/images/slider/auditorium.jpg" style="background-position: 60% center" class="swiper-slide">
                <span id ="leftArrow" class="slideshowArrow">&triangleleft;</span>
                <span id ="rightArrow" class="slideshowArrow">&triangleright;</span>
                <div class="slideshowCircles">
                    <span class="circle dot"></span>
                    <span class="circle"></span>
                    <span class="circle"></span>
                    <span class="circle"></span>
                    <span class="circle"></span>
                    

                </div>
  
            </div>
        </div> -->
        <div data-height="47.179%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
            <div class="swiper-wrapper">
                <div data-slide-bg="{{ url("/images/nursing/nursing-lab-1.jpg") }}" style="background-position: 50% center" class="swiper-slide"></div>
                <div data-slide-bg="{{ url("/images/nursing/nursing-lab-2.jpg") }}" style="background-position: 50% center" class="swiper-slide"></div>
                <div data-slide-bg="{{ url("/images/nursing/shanmugha-hospital-image.jpg") }}" style="background-position: 50% center" class="swiper-slide"></div>
                <!-- <div data-slide-bg="{{ url("/images/slider/auditorium.jpg") }}" style="background-position: 60% center" class="swiper-slide"></div> -->
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <div class="newsLetterStyle"><span style="color: white;">News Letter</span></div>
        <div class="news NewsS">
            <marquee id="scroll_news" style="font-family:Book Antiqua; color: #FFFFFF" bgcolor="#161a63">
                <div onmouseover="document.getElementById('scroll_news').stop();" onmouseout="document.getElementById('scroll_news').start();">
                    <p style="color: white">
                        <span class="fa fa-newspaper-o" aria-hidden="true"></span> Welcome To Shanmugha Nursing                    </p>
                </div>
            </marquee>
        </div>
    
    <section>
        <div class="row">
            <div class="col-sm-9">
                <div class="col-xs-12">
                    <div class="bg-lightest section-30 inset-left-30 inset-right-30">
                        <div>
                            <h3 class="text-bold">Our Institution</h3>
                            <p align="justify">&nbsp;&nbsp;&nbsp;<b><font size="4">Sri Shanmugha College of Nursing</b> is sponsored by Sri Shanmugha Educational and Charitable Trust. Thiru. K. Shanmugham is the Chairman of the Trust. Under the able guidance and patronage of Thiru. K. Shanmugham, Chairman, Thiru.S.Prabahar, Vice-Chairman, Sri Shanmugha College of Engineering and Technology, has developed excellent facilities such as spacious air-conditioned classrooms, seminar halls, well-equipped laboratories, workshops, library and steadfast high speed Internet connectivity.Sri Shanmugha College of Nursing was established in the year 2017 .The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University, Chennai and Tamilnadu Nursing And Midwives Council. The college is located in an Extensive campus of about 120 acres on the state highway connecting Sankari and Tiruchengode. The primary objective of Sri Shanmugha College of Nursing is to provide quality education and enables the students to excel in the field of Nursing. The institution facilitates them to become skilled in nursing field, analyze the concepts and apply it for the real benefits which also ensures them to become confident and competent in Nursing field.</font></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="margin-bottom: 1%">
                <div class="holder">
                    <iframe width="350" height="270" src="https://www.youtube.com/embed/vN9BnWZ-E3g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                   <!--  <ul id="ticker01">
                        <marquee direction="up" height="300" scrollamount="6" scrolldelay="150" class="sidelink" onmousedown="this.stop()" onmouseover="this.stop()" onmousemove="this.stop()" onmouseout="this.start()" vspace="10">
                            <p class="three">
                 			<span class="sidelink">
                            <li><span class="HomeNewsLetterDate">Jan<span> 2019</span></span>SPRAYS News Letter</li><br><br>
                        </marquee>
                    </ul> -->
                </div>
            </div>

        </div>
    </section>

    <section class="bg-madison context-dark text-sm-left">
        <div class="shell">
            <div class="range range-xs-center range-sm-left offset-top-0">
                <div class="cell-xs-10 cell-sm-7 cell-lg-6 section-image-aside section-image-aside-right text-sm-left">
                    <div style="background-image: url('/images/slider/library.jpg')" class="section-image-aside-img veil reveal-sm-block"></div>
                    <div class="section-image-aside-body section-70 section-md-114 inset-sm-right-70 inset-lg-right-110">
                        <h2 class="text-bold">Why Study Nursing?</h2>
                        <hr class="divider bg-madison hr-sm-left-0">
                        <div data-items="1" data-sm-margin="10" data-nav="false" data-nav-class="[&quot;owl-prev fa-angle-left&quot;, &quot;owl-next fa-angle-right&quot;]" class="owl-carousel owl-carousel-default offset-top-30 offset-md-top-50">
                            <div>
                                <div class="quote-classic-boxed text-left">
                                    <div class="quote-body">
                                        <q>Do not experience problems with finding jobs</q><br><br>
                                        <q>Wide range of future professional possibilities</q><br><br>
                                        <q>Opportunity to take part in scientific activities</q><br>
                                        <div class="offset-top-30 text-left">
                                            <div class="unit unit-horizontal">
                                                <div class="unit-left"><img src="{{ url('/assets/images/users/user-debra-banks-230x230.jpg') }}" width="80" height="80" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                                                <div class="unit-body">
                                                    <div class="offset-top-5">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            //select the POPUP FRAME and show it
            $("#popup").hide().fadeIn(1000);
            //close the POPUP if the button with id="close" is clicked
            $("#close").on("click", function (e) {
                e.preventDefault();
                $("#popup").fadeOut(1000);
            });
        });
    </script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            //select the POPUP FRAME and show it
            $("#popup").hide().fadeIn(1000);
            //close the POPUP if the button with id="close" is clicked
            $("#close").on("click", function (e) {
                e.preventDefault();
                $("#popup").fadeOut(1000);
            });
        });
        $(document).ready(function () {
            var swiper = new Swiper('.swiper-container', {
                effect: 'slide',
                speed: 700,
                autoplay: 1500,
                loop: true,
                grabCursor: true,
                autoplayDisableOnInteraction: false,
                observer: true,
                observeParents: true,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                autoHeight: true,
            });
            $("li[role='presentation']").children("a").click(function () {
                var gallerySwiper = $('.swiper-container');
                $.each(gallerySwiper, function( index, value ) {
                    value.swiper.stopAutoplay();
                    value.swiper.startAutoplay();
                });
            });
        });
    </script>
@endsection
