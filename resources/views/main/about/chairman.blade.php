@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing - About Chairman @endsection


@section('Description') Sri Shanmugha College of Nursing was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') About Chairman @endsection


@section('About')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block">Our Chairman</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About</li>
                    <li>Our Chairman</li>
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
                    <div class="inset-sm-right-30"><img src="{{ url('/images/about/chairman.jpg') }}" width="340" height="340" alt="chairman shanmugha educational institution" class="img-responsive reveal-inline-block AboutImage">
                        <div class="offset-top-15 offset-sm-top-30">
                            <ul class="list list-unstyled">
                                <li><span class="icon icon-xs mdi mdi-email-open text-middle text-madison"></span><a href="mailto:chairman@shanmugha.edu.in" class="reveal-inline-block inset-left-10">chairman@shanmugha.edu.in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 text-left">
                    <div>
                        <h2 class="text-bold">Thiru. K.Shanmugham</h2>
                    </div>
                    <p class="offset-top-10">Chairman - Sri Shanmugha Educational and Charitable Trust</p>
                    <div class="offset-top-15 offset-sm-top-30">
                        <hr class="divider bg-madison hr-left-0">
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <h6 class="text-bold">Our Chairman</h6>
                        <div class="text-subline"></div>
                    </div>
                    <div class="offset-top-20">
                        <p>Sri Shanmugha College of Nursing is sponsored by Sri Shanmugha Educational and Charitable Trust. Thiru. K. Shanmugham is the Chairman of the Trust. His vision is to provide quality and enriched educational system for students and to build confidence in them to prove their realm of success. Under the able guidance and patronage of Thiru. K. Shanmugham, Chairman, Thiru.S.Prabahar, Vice-Chairman has developed excellent facilities such as spacious air-conditioned classrooms, seminar halls, well-equipped laboratories, library, sports facilities and steadfast high speed Internet connectivity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection