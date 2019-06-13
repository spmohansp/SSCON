@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - Courses Offered @endsection


@section('Description') Sri Shanmugha College of Nursing was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle')Courses Offered @endsection


@section('Academics')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block">Courses Offered</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Course</li>
                    <li>Courses Offered</li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <section class="offset-top-110">
        <div class="shell">

            <div class="offset-top-30 range range-xs-center range-lg-condensed section-products">
                <div class="cell-xs-10 cell-lg-12 cell-sm-6 cell-md-4 offset-top-30 offset-lg-top-0">
                    <div class="product">
                        <div class="product-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="/images/nursing/nursing-lab-2.jpg" width="400" height="400" alt="" class="img-responsive CourseImage">
                                </div>
                                <div class="col-sm-9">
                                    <div class="offset-top-10">
                                        <h4 class="text-primary">B.Sc Nursing</h4>
                                    </div>
                                    <div class="offset-top-22">
                                        <p style="text-align: justify;">A pass in Higher Secondary Course with Physics, Chemistry, Biology or Botany and Zoology not less than 45 % aggregate marks. (SC/SCA/ST categories must have obtained pass in H.S.C)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="offset-top-30 range range-xs-center range-lg-condensed section-products">
                <div class="cell-xs-10 cell-lg-12 cell-sm-6 cell-md-4 offset-top-30 offset-lg-top-0">
                    <div class="product">
                        <div class="product-body">

                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="offset-top-10">
                                        <h4 class="text-primary ">D.PHARM (2 YEARS)</h4>
                                    </div>
                                    <div class="offset-top-22">
                                        <p style="text-align: justify;">Candidate must have completed Hsc or Equivalent Exam in following group of subjects with minimum eligible marks Physics, Chemistry, Botany and Zoology or Physics, Chemistry, Biology or Mathematics with any other subjects.</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <img src="/images/slider/pharmacy-class.jpg" width="400" height="400" alt="" class="img-responsive CourseImage">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-top-30 range range-xs-center range-lg-condensed section-products">
                <div class="cell-xs-10 cell-lg-12 cell-sm-6 cell-md-4 offset-top-30 offset-lg-top-0">
                    <div class="product">
                        <div class="product-body">

                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="/images/slider/library.jpg" width="400" height="400" alt="" class="img-responsive CourseImage">
                                </div>
                                <div class="col-sm-9">
                                    <div class="offset-top-10">
                                        <h4 class="text-primary">B.PHARM LATERAL ENTRY (3 YEARS)</h4>
                                    </div>
                                    <div class="offset-top-22">
                                        <p style="text-align: justify;">Candidates should have aggregate of 40% marks in the first and second year D.Pharm. Examination with a pass in H.S.C. (SC/SCA/ST categories must have obtained pass in H.S.C. & D. Pharm Course)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
@endsection