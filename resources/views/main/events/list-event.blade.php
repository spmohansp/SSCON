@extends('main.layout.master')

@section('title')Sri Shanmugha College of Pharmacy - Events @endsection


@section('Description') Sri Shanmugha College of Pharmacy was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Events @endsection


@section('Events')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block">Our Events</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Events</li>
                </ul>
            </div>
        </div>
    </section>
@endsection


@section('content')

    <section class="section-100 section-md-114">
        <div class="shell-wide">
            <div class="range range-xs-center">
                <div class="cell-lg-12 offset-top-100 offset-lg-top-0">
                    <!-- <div class="hr divider bg-madison"></div> -->
                    <div class="offset-top-100"></div>
                    <div id="child-calendar-carousel" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-items="1" data-for=".carousel-parent" class="slick-slider">

                        <div class="item">
                            <div class="shell-wide">
                                <div class="range range-xs-center range-xl-left">

                                    <!-- Events images -->


                                    <!-- <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-sm-top-0">
                                        <article class="post-event">
                                            <div class="post-event-img-overlay"><img src="/images/events/shanmugha-pharmacy-woments-day-2019.jpg" width="420" height="420" alt="WOMEN’S DAY CELEBRATION 2019" class="img-responsive">
                                                <div class="post-event-overlay context-dark">
                                                    <div class="offset-top-20"><a href="{{ url('/images/news-letter/Womens-day-celebration-8-Mar-2019.pdf') }}" class="btn btn-default">More</a></div>
                                                </div>
                                            </div>
                                            <div class="unit unit-lg">
                                                <div class="unit-left">
                                                    <div class="post-event-meta text-center">
                                                        <div class="h3 text-bold reveal-inline-block reveal-lg-block">08</div>
                                                        <p class="reveal-inline-block reveal-lg-block">March</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">2019</span>
                                                    </div>
                                                </div>
                                                <div class="unit-body">
                                                    <div class="post-event-body text-lg-left">
                                                        <h6><a href="{{ url('/images/news-letter/Womens-day-celebration-8-Mar-2019.pdf') }}" target="_blank">WOMEN’S DAY CELEBRATION</a></h6>
                                                        <ul class="list-inline list-inline-xs">
                                                            <li><span class="inset-left-10 text-dark text-middle">WOMEN’S DAY CELEBRATION</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div> -->


                                    <!-- <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-sm-top-0">
                                        <article class="post-event">
                                            <div class="post-event-img-overlay"><img src="/images/events/pongal.jpg" width="420" height="420" alt="Pongal Celebration Shanmugha Pharmacy 2019" class="img-responsive">
                                                <div class="post-event-overlay context-dark">
                                                    <div class="offset-top-20"><a href="#" class="btn btn-default">More</a></div>
                                                </div>
                                            </div>
                                            <div class="unit unit-lg">
                                                <div class="unit-left">
                                                    <div class="post-event-meta text-center">
                                                        <div class="h3 text-bold reveal-inline-block reveal-lg-block">12</div>
                                                        <p class="reveal-inline-block reveal-lg-block">January</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">2019</span>
                                                    </div>
                                                </div>
                                                <div class="unit-body">
                                                    <div class="post-event-body text-lg-left">
                                                        <h6><a href="#">Pongal Celebration</a></h6>
                                                        <ul class="list-inline list-inline-xs">
                                                            <li><span class="inset-left-10 text-dark text-middle">Pongal Celebration</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div> -->


                                    <!-- <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-sm-top-0">
                                        <article class="post-event">
                                            <div class="post-event-img-overlay"><img src="/images/events/iv3.jpg" width="420" height="420" alt="Shanmugha college of Pharmacy Industrial Visit 2018" class="img-responsive">
                                                <div class="post-event-overlay context-dark">
                                                    <div class="offset-top-20"><a href="#" class="btn btn-default">More</a></div>
                                                </div>
                                            </div>
                                            <div class="unit unit-lg">
                                                <div class="unit-left">
                                                    <div class="post-event-meta text-center">
                                                        <div class="h3 text-bold reveal-inline-block reveal-lg-block">14</div>
                                                        <p class="reveal-inline-block reveal-lg-block">December</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">2018</span>
                                                    </div>
                                                </div>
                                                <div class="unit-body">
                                                    <div class="post-event-body text-lg-left">
                                                        <h6><a href="#">Industrial Visit</a></h6>
                                                        <ul class="list-inline list-inline-xs">
                                                            <li><span class="inset-left-10 text-dark text-middle">Industrial Visit</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div> -->


                                    <!-- <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-sm-top-0">
                                        <article class="post-event">
                                            <div class="post-event-img-overlay"><img src="/images/events/educationalvisit1.jpg" width="420" height="420" alt="" class="img-responsive">
                                                <div class="post-event-overlay context-dark">
                                                    <div class="offset-top-20"><a href="#" class="btn btn-default">More</a></div>
                                                </div>
                                            </div>
                                            <div class="unit unit-lg">
                                                <div class="unit-left">
                                                    <div class="post-event-meta text-center">
                                                        <div class="h3 text-bold reveal-inline-block reveal-lg-block">12</div>
                                                        <p class="reveal-inline-block reveal-lg-block">November</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">2018</span>
                                                    </div>
                                                </div>
                                                <div class="unit-body">
                                                    <div class="post-event-body text-lg-left">
                                                        <h6><a href="#">Educational Visit</a></h6>
                                                        <ul class="list-inline list-inline-xs">
                                                            <li><span class="inset-left-10 text-dark text-middle">Educational Visit</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div> -->

                                    <!-- <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-sm-top-0">
                                        <article class="post-event">
                                            <div class="post-event-img-overlay"><img src="/images/slider/college.jpg" width="420" height="420" alt="" class="img-responsive">
                                                <div class="post-event-overlay context-dark">
                                                    <div class="offset-top-20"><a href="event-page.html" class="btn btn-default">More</a></div>
                                                </div>
                                            </div>
                                            <div class="unit unit-lg">
                                                <div class="unit-left">
                                                    <div class="post-event-meta text-center">
                                                        <div class="h3 text-bold reveal-inline-block reveal-lg-block">25</div>
                                                        <p class="reveal-inline-block reveal-lg-block">September</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">2018</span>
                                                    </div>
                                                </div>
                                                <div class="unit-body">
                                                    <div class="post-event-body text-lg-left">
                                                        <h6><a href="#">World Pharmacist day</a></h6>
                                                        <ul class="list-inline list-inline-xs">
                                                            <li><span class="inset-left-10 text-dark text-middle">World Pharmacist day</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div> -->

                                    <!-- End Events images -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








{{--    <section class="section-70 section-md-114 bg-catskill">--}}
{{--        <div class="shell">--}}
{{--            <div class="range text-sm-left range-xs-center">--}}


{{--            @for($i=0;$i<10;$i++)--}}
{{--                <div class="cell-sm-6 cell-md-4">--}}
{{--                    <article class="post-news post-news-wide"><a href="news-post-page.html"><img src="assets/images/blog/news-01-370x240.jpg" width="700" height="455" alt="" class="img-responsive"></a>--}}
{{--                        <div class="post-news-body">--}}
{{--                            <h6><a href="news-post-page.html">World Pharmacist day</a></h6>--}}
{{--                            <div class="offset-top-20">--}}
{{--                                <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>--}}
{{--                            </div>--}}
{{--                            <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            --}}


{{--            <div class="offset-top-60 text-md-left">--}}
{{--                <!-- Bootstrap Pagination-->--}}
{{--                <nav>--}}
{{--                    <ul class="pagination">--}}
{{--                        <li class="disabled"><span aria-label="Previous"><span aria-hidden="true" class="fa-chevron-left"></span></span></li>--}}
{{--                        <li class="active"><span>1</span></li>--}}
{{--                        <li><a href="#">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li><a href="#" aria-label="Next"><span aria-hidden="true" class="fa-chevron-right"></span></a></li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection