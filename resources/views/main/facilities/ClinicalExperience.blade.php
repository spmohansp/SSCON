@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - Clinical_Experience @endsection


@section('Description') Sri Shanmugha College of Nursing was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Clinical_Experience @endsection


@section('Academics')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block"> Clinical Experience</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About</li>
                    <li>Clinical Experience</li>
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
                            <h6 class="text-primary text-bold">Clinical Experience</h6>
                        </div>
                    </div> -->
                </div>
                <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                    <h2 class="text-bold">Clinical Experience</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Clinical experience of students are offered at Maruthi Medical center Hospital Erode, Erode Government head quarters Hospital Erode,Government hospital Bhavani,Sankari,Edappadi which comprises of over 1000 bed strength in all. A variety of patients are available for the students to learn, both male and female, of all ages, at different stages of illness. The faculties are posted for gained the students in all the areas at a ratio of 1: 10.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection