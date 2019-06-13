@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - About Institution @endsection


@section('Description') Sri Shanmugha College of Nursing was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') About Institution @endsection


@section('About')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block"> About Institution</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About</li>
                    <li><a href="{{ url('/about-institution') }}"> About Institution</a></li>
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
                    <div class="inset-sm-left-30"><img src="{{ url('/images/college/shanmugha-pharmacy-college-building.jpg') }}" width="450" height="400" alt="Shanmugha pharmacy" class="img-responsive reveal-inline-block img-rounded">
                        <div class="offset-top-20">
                            <h6 class="text-primary text-bold">Our Institution</h6>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                    <h2 class="text-bold">Our Institution</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;<b>Sri Shanmugha College of Nursing</b> was established in the year 2017 by the industrialist and philanthropist, Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University, Chennai, Approved by the Nursing Council of India (PCI) and All India Council of Technical Education (AICTE), New Delhi. The college is located in an Extensive campus of about 120 acres on the state highway connecting Sankari and Tiruchengode. The primary objective of Sri Shanmugha College of Nursing is to provide quality education and enables the students to excel in the field of Nursing. The institution facilitates them to become skilled in pursing field, analyze the concepts and apply it for the real benefits which also ensures them to become confident and competent in Pharmaceutical field.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection