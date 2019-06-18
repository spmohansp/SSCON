@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - Cafeteria @endsection


@section('Description') Sri Shanmugha College of Nursing was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Cafeteria @endsection


@section('Academics')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block"> Cafeteria</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Academics</li>
                    <li>Cafeteria</li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('content')
    <section class="section-70 section-md-114">
        <div class="shell">
            <div class="range">
                <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
                    <div class="inset-sm-left-30"><img src="{{ url('/images/college/cafeteria1.jpg') }}" width="450" height="400" alt="Shanmugha nursing hostel" class="img-responsive reveal-inline-block img-rounded">
                            <div class="offset-top-20">
                            <h6 class="text-primary text-bold">Our Cafeteria</h6>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                    <h2 class="text-bold">Our Cafeteria</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <i>“Every man should eat and enjoy the fruit of all his labour; it is the gift of god”</i>
                        <p align="justify">&nbsp;&nbsp;&nbsp;Inside the sprawling campus of our Sri Shanmugha College of Nursing there is a cafeteria that function to serve the students and staff members.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp;&ensp;Well manpowered cafeteria<br>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp;&ensp;A hygienic catering<br>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp;&ensp;Purified Drinking water<br>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp;&ensp;Well equipped with modernized cooking appliances<br>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp;&ensp;An Audio & Visual Display Room<br>
                        </p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;The Campus Cafe is open from 8.00 A.M. to 8.00 P.M. on all working days including Saturdays. A wide variety of South Indian dishes are available. During lunch time Meals are available at very nominal rates. Separate stall is available for vegetarian and non-vegetarian.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;The College Cafeteria is a large spacious area, with the green surroundings and a variety of refreshments. The cafe is provided with modern furniture and electrical automatic cooking and storing facilities, which provides hot lunch and snacks both to the students and staff at reasonable price.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;It is well maintained with efficient service.It is a place where students relax with friends to enjoy delicious, healthy and quality food. It is definitely a place of treat for all students</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection