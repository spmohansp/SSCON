@extends('main.layout.master')

@section('title')Sri Shanmugha College of Pharmacy - Placement Cell @endsection


@section('Description') Sri Shanmugha College of Pharmacy was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle')Placement Cell @endsection


@section('Committes')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block">Placement Cell</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Committe</li>
                    <li>Placement Cell</li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('content')


    <main class="page-content section-70 section-md-114">
        <div class="shell text-left">
            <div class="range range range-xs-center">
                <div class="cell-xs-10 cell-sm-8">
                    <h6 class="text-bold">Placement Cell</h6>
                    <p align="justify">&ensp;&ensp;&ensp;Our Sri Shanmugha College of Pharmacy have formed placement cell in view of organizing campus interviews by inviting various companies for the placement of the student for jobs. It provides placement assistance to students of D.Pharmacy and B.Pharmacy courses. Our placement cell also helps in managing industry interactions and industry relations.</p>
                    <p align="justify">&ensp;&ensp;&ensp;The Placement Cell will organizes career guidance programmes for all the students starting from first year. The cell arranges training programmes like Mock Interviews, Group Discussions, and Communication Skills Workshop etc. Also the cell will organizes Public Sector Exam Training for students who are interested to join Government Sectors.</p>
                    <div class="offset-top-60">
                        <h6 class="text-bold">Committee Members of Placement Cell</h6>
                        <p>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp;
                            Mr. R.V. Dhinesh, BE., MBA., Director -Placement
                        </p>
                         <p>
                             <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp;
                             Mr. T. Boopathi,Placement officer
                         </p>
                        <p>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp;
                            Mr. Jimmy Alex. M.Pharm., Placement officer
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection