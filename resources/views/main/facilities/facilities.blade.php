@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - Facilities @endsection


@section('Description') Sri Shanmugha College of Nursing was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Facilities @endsection


@section('Academics')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block"> Facilities</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Academics</li>
                    <li>Facilities</li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('content')
    <section class="section-70 section-md-114">
        <div class="shell">
            <div class="range">
                <!-- <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
                    <div class="inset-sm-left-30"><img src="{{ url('/images/facilities/hostel.jpg') }}" width="450" height="400" alt="Shanmugha nursing hostel" class="img-responsive reveal-inline-block img-rounded">
                            <div class="offset-top-20">
                            <h6 class="text-primary text-bold">Our Facilities</h6>
                        </div>
                    </div>
                </div> -->
                <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                    <h2 class="text-bold">Salient Features of the Institution</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify"><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Free break-fast for dayscholar<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Clinical practice in District Headquarters Government Hospital<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Clinical practice in Multispecialty Hospital<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Well experienced faculties<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;High-Tech AC class rooms<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Well-Equipped Laboratories<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Digital library with more than 3000 volume books<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Wi-Fi campus<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Transport facility in and around the institution to a radius of 60 KM<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;All india level Fourth rank in swatch barath<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Separate, Modern and Hygienic hostel for boys and girls<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Playground with Tennis, volley ball, cricket and shuttle courts<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;High configuration computer laboratory<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Medicinal plant garden & Museum<br><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Canteen & ATM facilities </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection