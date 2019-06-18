@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - Scholarships @endsection


@section('Description') Sri Shanmugha College of Nursing was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Scholarships @endsection


@section('Academics')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block"> Scholarships</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Academics</li>
                    <li>Scholarships</li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('content')
    <section class="section-70 section-md-114">
        <div class="shell">
            <!-- <div class="range"> -->
                <!-- <div class="cell-sm-4 cell-sm-push-2 text-sm-left"><br><br>
                    <div class="inset-sm-left-30"><img src="{{ url('/images/nursing/nursing-lab-2.jpg') }}" width="450" height="400" alt="Shanmugha nursing faculty" class="img-responsive reveal-inline-block img-rounded">
                            <div class="offset-top-20">
                            <h6 class="text-primary text-bold">Sports</h6>
                        </div>
                    </div>
                </div> -->
                <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                    <h2 class="text-bold">Scholarships</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The reservation category students belonging to SC/ST/BC/MBC/DNC community shall approach for scholarships provided from District Adi Dravida Tribal Welfare Department and District Backward Classes & Minority Welfare Department, Salem. The necessary information to be furnished in the Application Form for the same shall be forwarded by the College to the above authorities on request. The same procedure shall apply for students seeking educational loan from Nationalized Banks.</p>
                    </div>
                    
                <!-- </div> -->
            </div>
        </div>
    </section>

@endsection