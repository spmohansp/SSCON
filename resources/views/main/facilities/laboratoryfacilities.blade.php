@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - Laboratory @endsection


@section('Description') Sri Shanmugha College of Nursing was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Laboratory @endsection


@section('Academics')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block">Laboratory</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Academics</li>
                    <li>Laboratory</li>
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
                    <!-- <div class="inset-sm-left-30"><img src="{{ url('/images/facilities/hostel.jpg') }}" width="450" height="400" alt="Shanmugha nursing hostel" class="img-responsive reveal-inline-block img-rounded">
                        <div class="offset-top-20">
                            <h6 class="text-primary text-bold">Laboratory</h6>
                        </div>
                    </div> -->
                </div>
                <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                    <h2 class="text-bold">Laboratory Facilities</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The laboratories for Anatomy, Nutrition, Fundamentals of Nursing Maternal Nursing, Child Health Nursing, Community Health Nursing, Maternity Nursing, Audio Visual Aids and Computers offer best learning facilities to develop the technical skills before the students have practice on patients.</p>
                </div>
                    
            </div>
        </div>
    
    </section>

@endsection