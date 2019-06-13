@extends('main.layout.master')

@section('title')Sri Shanmugha College of Pharmacy - Hostel @endsection


@section('Description') Sri Shanmugha College of Pharmacy was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Hostel @endsection


@section('Academics')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block"> Hostel</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About</li>
                    <li>Hostel</li>
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
                    <div class="inset-sm-left-30"><img src="{{ url('/images/facilities/hostel.jpg') }}" width="450" height="400" alt="Shanmugha pharmacy hostel" class="img-responsive reveal-inline-block img-rounded">
                            <div class="offset-top-20">
                            <h6 class="text-primary text-bold">Our Hostel</h6>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                    <h2 class="text-bold">Our Hostel</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;<b>Sri Shanmugha College of Pharmacy</b> (SSCOP) provides accommodation to students wishing to reside in the hostels. Hostel in the institute is an independent unit in respect to its internal administration under the overall supervision is done by the Principal and the Hostel Management. The hostel is administered by a Warden appointed by the Chairman and he/she will be assisted by the assistant warden.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;Hostel has a Hostel Council which is an advisory body comprising the Warden (as its Chairman), the assistant warden and the elected student secretaries as its members. The Hostel Council plans the students activities for a year which includes preparation for the sports budget, recreational and other social activities and is also responsible for the functioning of mess with the help of the mess committee.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;The Hostel Office is located within the hostel premises. The Office maintains all the files, registers, records, ledgers, account books, suppliers bill, payment registers and etc., pertaining to the hostel residents, mess and the employees. The Hostel Office will be in service on all weekdays.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;Every student who has been admitted in the institution is required to pay the prescribed hostel fee and establishment charges along with a refundable hostel mess caution deposit. These fee are subjected to revision. The change in rooms is effected in accordance with the rules followed by hostel and with the warden’s approval.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;Each room is provided with a cot, a table, a chair, a bookshelf, and a ceiling fan. Residents cannot move the furniture or fittings from one room to another. Private cooking in the rooms is prohibited. Smoking, consumption of alcoholic drinks and use of narcotic drugs is strictly prohibited.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;Guests of the residents may be permitted to stay in the hostel by the Chairman on necessary payment in the office.During night time guests will be permitted in a student room with the warden’s prior permission.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;Boys are not allowed to visit girls hostel and vice-versa.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;A number of recreational, sports, literary and social activities take place in the hostel during the academic year. A few rooms in the hostel are used for common facilities such as the Library, Computer Room, Indoor Sports etc.Laundry facilities is available in the hostel. Students can relax in the evenings or on holidays or spend their leisure time in the Common Room which is equipped with a T.V, a music system, newspapers and magazines. The Hostel Library has a good collection of general books, fiction, comics etc.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;An external security agency is contracted for providing security and it is monitored by the Warden and the Assistant Warden.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;Application for Admission to the Hostel shall be made in the prescribed form.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection