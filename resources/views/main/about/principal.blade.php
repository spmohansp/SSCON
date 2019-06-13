@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - Our Principal @endsection


@section('Description') Sri Shanmugha College of Nursing was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Our Principal @endsection


@section('About')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block">Our Principal</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About</li>
                    <li>Our Principal</li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('content')
    <section class="section-70 section-md-114">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-sm-4 text-sm-left">
                    <div class="inset-sm-right-30"><img src="" width="340" height="340" class="img-responsive reveal-inline-block">
                        <div class="offset-top-15 offset-sm-top-30">
                            <ul class="list list-unstyled">
                                <li><span class="icon icon-xs mdi mdi-email-open text-middle text-madison"></span><a href="mailto:principal@shanmughapharmacy.edu.in" class="reveal-inline-block inset-left-10">principal@shanmughanursing.edu.in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 text-left">
                    <div>
                        <h2 class="text-bold">Dr.K.Uthramani</h2>
                    </div>
                    <p class="offset-top-10">Principal Sri Shanmugha College of Nursing</p>
                    <div class="offset-top-15 offset-sm-top-30">
                        <hr class="divider bg-madison hr-left-0">
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <h6 class="text-bold">Our Principal</h6>
                        <div class="text-subline"></div>
                    </div>
                    <div class="offset-top-20">
                        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sri Shanmugha College of Nursing for Women was started in the year 2018 with the fore sight and vision of our Chairman <strong>to prepare professional nurses,</strong> in order to improve standards of nursing service through quality education. We offer, <strong>B.Sc. Nursing.</strong> Our college has <strong>recognition from  Tamilnadu  State Nursing Council College</strong> is equipped with qualified and competent teachers, good physical infrastructure, Library and most importantly students get opportunity for clinical learning in different hospital.
                            <br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nursing students do have benefit of contributions from interdisciplinary teaching faculty and <strong>ample opportunity for extra- curricular activities</strong> as college has excellent facilities for the same.
                            <br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our college expects all the students to maintain strict discipline, decency and decorum inside and outside the campus. I expect your wholehearted co-operation and compliance in this regard. I <strong>warmly invite you to be a proud nursing student of Sri Shanmugha College of nursing for women.</strong> I extend my best wishes to you all for a bright future.</p><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection