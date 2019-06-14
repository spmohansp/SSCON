@extends('main.layout.master')

@section('title')Sri Shanmugha College of Pharmacy - Transport @endsection


@section('Description') Sri Shanmugha College of Pharmacy was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Transport @endsection


@section('Academics')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block"> Transport</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About</li>
                    <li>Transport</li>
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
                    <div class="inset-sm-left-30"><img src="{{ url('/images/facilities/transport.jpg') }}" width="450" height="400" alt="Shanmugha pharmacy Transport" class="img-responsive reveal-inline-block img-rounded">
                            <div class="offset-top-20">
                            <h6 class="text-primary text-bold">Our Transport</h6>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                    <h2 class="text-bold">Our Transport</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;A full fledged Transport department functions in the college to provide transport facility to students and staff from various places. This service is offered ensuring a hassle-free and safe transportation.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;The College runs 10 buses for providing transport facility to students from various places in the city. The number of buses will be increased corresponding to the increase in the intake of students.
                        </p>
                    </div><br>
                    <!-- <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;The transport facility provided by the College will cover most parts of the town and nearby areas with the brand new fleet.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;College modern buses provide convenient and comfortable travel.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;Our drivers are well-educated with experience. They provide a safe journey to our students.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;Student’s own transport arrangements (two-wheelers and cars) are not permitted, in order to prevent accidents and late-comers to college. All the buses reach the campus before 08.30 a.m. so that students and faculty can have their breakfast and get ready to attend the classes at 08.50 a.m. The buses leave the campus at 5.00 pm, which helps students to reach home early and safe.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;The time mentioned below is the indicative time. The Students are asked to come to the boarding point, 10 minutes before the time indicated.</p>
                    </div> -->
                    <!-- <div class="table-layout">
                        <table class="table table-custom table-fixed bordered-table stacktable large-only">
                            <tbody>

                            <tr>
                                <th>S.No</th>
                                <th style="text-align: center;">BUS No</th>
                                <th style="text-align: center;">ROUTE</th>
                            </tr>
                            <tr class="row1">
                                <td rowspan="14" style="text-align: center; vertical-align: middle;">1</td>
                                <td rowspan="14" style="vertical-align: middle;">Paramathi Bus No: 4</td>
                                <td>Kumbupudupalam</td>
                            </tr>
                            <tr class="row2">
                                <td>Thottiyanthottam</td>
                            </tr>
                            <tr class="row1">
                                <td>Kandampalayam</td>
                            </tr>
                            <tr class="row2">
                                <td>Maniyanoor</td>
                            </tr>
                            <tr class="row1">
                                <td>Chitalandhur</td>
                            </tr>
                            <tr class="row2">
                                <td>Karattu palayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Valarigate</td>
                            </tr>
                            <tr class="row2">
                                <td>CHB Colony</td>
                            </tr>
                            <tr class="row1">
                                <td>Town police station</td>
                            </tr>
                            <tr class="row2">
                                <td>Tiruchengode old bus Stand</td>
                            </tr>
                            <tr class="row1">
                                <td>Tiruchengode New bus Stand</td>
                            </tr>
                            <tr class="row2">
                                <td>Tiruchengode court</td>
                            </tr>
                            <tr class="row1">
                                <td>karuveppampatti</td>
                            </tr>
                            <tr class="row2">
                                <td>Narayanampalayam</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="7" style="text-align: center; vertical-align: middle;">2</td>
                                <td rowspan="7" style="vertical-align: middle;">Jalagandapuram Bus No: 5</td>
                                <td>Idappadi</td>
                            </tr>
                            <tr class="row2">
                                <td>Konganapuram</td>
                            </tr>
                            <tr class="row1">
                                <td>Thangayur</td>
                            </tr>
                            <tr class="row2">
                                <td>Chemicals pirivu</td>
                            </tr>
                            <tr class="row1">
                                <td>Sankari New bus stand</td>
                            </tr>
                            <tr class="row2">
                                <td>Sankari Old bus stand</td>
                            </tr>
                            <tr class="row1">
                                <td>Thiruchengode corner</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="12" style="text-align: center; vertical-align: middle;">3</td>
                                <td rowspan="12" style="vertical-align: middle;">Veppadi Van: 6</td>
                            </tr>
                            <tr class="row2">
                                <td>Amman kovil</td>
                            </tr>
                            <tr class="row1">
                                <td>Valrasapalayam</td>
                            </tr>
                            <tr class="row2">
                                <td>Modamangalam</td>
                            </tr>
                            <tr class="row1">
                                <td>Thaneerpandal palayam</td>
                            </tr>
                            <tr class="row2">
                                <td>Anangoor</td>
                            </tr>
                            <tr class="row1">
                                <td>Andikadu</td>
                            </tr>
                            <tr class="row2">
                                <td>Devanankuruchi</td>
                            </tr>
                            <tr class="row1">
                                <td>Srinivasampalayam</td>
                            </tr>
                            <tr class="row2">
                                <td>Vengipalayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Morur</td>
                            </tr>
                            <tr class="row2 ">
                                <td>Palmadai</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="5" style="text-align: center; vertical-align: middle;">4</td>
                                <td rowspan="5" style="vertical-align: middle;">Rasipuram Van No: 7</td>
                                <td>Gurusamipalayam</td>
                            </tr>
                            <tr class="row2">
                                <td>Ilachipalayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Vaiyapamalai</td>
                            </tr>
                            <tr class="row2">
                                <td>Elimedu</td>
                            </tr>
                            <tr class="row1 ">
                                <td>kumaramangalam</td>
                            </tr>
                            <tr class="row1 ">
                                <td rowspan="7" style="text-align: center; vertical-align: middle;">5</td>
                                <td rowspan="7" style="vertical-align: middle;">Sengamamuniyappan Kovil Van No: 9</td>
                            </tr>
                            <tr class="row2 ">
                                <td>Goundanur</td>
                            </tr>
                            <tr class="row1 ">
                                <td>Post office ICL</td>
                            </tr>
                            <tr class="row2 ">
                                <td>Pirivu Road</td>
                            </tr>
                            <tr class="row1 ">
                                <td>Pachakkadu</td>
                            </tr>
                            <tr class="row2 ">
                                <td>R.S.Housing Board</td>
                            </tr>
                            <tr class="row1 ">
                                <td>R.S</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="8" style="text-align: center; vertical-align: middle;">6</td>
                                <td rowspan="8" style="vertical-align: middle;">Pokkambalayam  Van No:10</td>
                            </tr>
                            <tr class="row2 ">
                                <td>Goundampalayam</td>
                            </tr>
                            <tr class="row1 ">
                                <td>Kumaramangalam</td>
                            </tr>
                            <tr class="row2 ">
                                <td>SND road</td>
                            </tr>
                            <tr class="row1 ">
                                <td>T.Code, Sengodampalayam</td>
                            </tr>
                            <tr class="row2 ">
                                <td>Weavers colony</td>
                            </tr>
                            <tr class="row1 ">
                                <td>Sindham palayam</td>
                            </tr>
                            <tr class="row2 ">
                                <td>Okkilipatti</td>
                            </tr>
                            <tr class="row1 ">
                                <td rowspan="13" style="text-align: center; vertical-align: middle;">7</td>
                                <td rowspan="13" style="vertical-align: middle;">Erode Bus No:11    </td>
                                <td>G.H Erode</td>
                            </tr>
                            <tr class="row2 ">
                                <td>Erode</td>
                            </tr>
                            <tr class="row1">
                                <td>Avuthipalayam</td>
                            </tr>
                            <tr class="row2">
                                <td>pallipalayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Alaramathumedu</td>
                            </tr>
                            <tr class="row2">
                                <td>S.P.B Colony</td>
                            </tr>
                            <tr class="row1">
                                <td>Thokkavadi</td>
                            </tr>
                            <tr class="row2">
                                <td>Vidhya vikas</td>
                            </tr>
                            <tr class="row1 ">
                                <td>Kootappalli</td>
                            </tr>
                            <tr class="row2 ">
                                <td>Rajagoundampalayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Santhapaettai</td>
                            </tr>
                            <tr class="row2">
                                <td>Tiruchengode</td>
                            </tr>
                            <tr class="row1">
                                <td>Pollice line -Santhapettai</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="8" style="text-align: center; vertical-align: middle;">8</td>
                                <td rowspan="8" style="vertical-align: middle;">Kumarapalayam Bus No:12</td>
                            </tr>
                            <tr class="row2">
                                <td>M.G.R Nagar</td>
                            </tr>
                            <tr class="row1">
                                <td>Colony Hospital</td>
                            </tr>
                            <tr class="row2">
                                <td>Pallipalayam corner</td>
                            </tr>
                            <tr class="row1">
                                <td>Kumarapalayam bus stand</td>
                            </tr>
                            <tr class="row2">
                                <td>Anangoor corner</td>
                            </tr>
                            <tr class="row1">
                                <td>Rajam theatre</td>
                            </tr>
                            <tr class="row2">
                                <td>Katheri pirivu</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="8" style="text-align: center; vertical-align: middle;">9</td>
                                <td rowspan="8" style="vertical-align: middle;">Chinnampatti Bus No:13</td>
                            </tr>
                            <tr class="row1">
                                <td>Ettikuttai medu</td>
                            </tr>
                            <tr class="row2">
                                <td>Konganapuram</td>
                            </tr>
                            <tr class="row1">
                                <td>Magudanchavadi</td>
                            </tr>
                            <tr class="row2">
                                <td>Vaikundham</td>
                            </tr>
                            <tr class="row1">
                                <td>Vagudappatti</td>
                            </tr>
                            <tr class="row2">
                                <td>Oonjanur</td>
                            </tr>
                            <tr class="row1">
                                <td>Sankari R.S</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="4" style="text-align: center; vertical-align: middle;">10</td>
                                <td rowspan="4" style="vertical-align: middle;">Bhavani Bus No: 14</td>
                            </tr>
                            <tr class="row2">
                                <td>Bhavani bus stand</td>
                            </tr>
                            <tr class="row1">
                                <td>Kalingarayanpalayam pirivu</td>
                            </tr>
                            <tr class="row2">
                                <td>Lakshmi Nagar</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="8" style="text-align: center; vertical-align: middle;">11</td>
                                <td rowspan="8" style="vertical-align: middle;">Ponnampalayam Bus No:15</td>
                                <td>Koneripatti</td>
                            </tr>
                            <tr class="row2">
                                <td>Thevur</td>
                            </tr>
                            <tr class="row1">
                                <td>Aalichampalayam</td>
                            </tr>
                            <tr class="row2">
                                <td>Velrivezhi</td>
                            </tr>
                            <tr class="row1">
                                <td>Idappadi</td>
                            </tr>
                            <tr class="row2">
                                <td>velamavalasu</td>
                            </tr>
                            <tr class="row1">
                                <td>kuppanur</td>
                            </tr>
                            <tr class="row2">
                                <td>Sankari sandhaipettai</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="14" style="text-align: center; vertical-align: middle;">12</td>
                                <td rowspan="14" style="vertical-align: middle;">Kodumudi Bus No:16</td>
                                <td>Othakadai</td>
                            </tr>
                            <tr class="row2">
                                <td>Thamaripalayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Amman kovil</td>
                            </tr>
                            <tr class="row2">
                                <td>kaikati</td>
                            </tr>
                            <tr class="row1">
                                <td>Sivagiri</td>
                            </tr>
                            <tr class="row2">
                                <td>Modakurichi</td>
                            </tr>
                            <tr class="row1">
                                <td>Lakkapuram</td>
                            </tr>
                            <tr class="row2">
                                <td>Solar</td>
                            </tr>
                            <tr class="row1">
                                <td>Kokkarayanpettai</td>
                            </tr>
                            <tr class="row2">
                                <td>Vittampalayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Andipalayam</td>
                            </tr>
                            <tr class="row2">
                                <td>Animoor</td>
                            </tr>
                            <tr class="row1">
                                <td>Kollappatti</td>
                            </tr>
                            <tr class="row2">
                                <td>Valarai gate</td>
                            </tr>
                            <tr class="row1">
                                <td rowspan="14" style="text-align: center; vertical-align: middle;">13</td>
                                <td rowspan="14" style="vertical-align: middle;">Salem Bus No: 18</td>
                                <td>salem New Bus Stand</td>
                            </tr>
                            <tr class="row2">
                                <td>Kondalampatti Bye Pass</td>
                            </tr>
                            <tr class="row1">
                                <td>Veerapandi,Palampatti</td>
                            </tr>
                            <tr class="row2">
                                <td>Attayampatti</td>
                            </tr>
                            <tr class="row1">
                                <td>Kallipatti</td>
                            </tr>
                            <tr class="row2">
                                <td>Suriya Goundampalayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Kallukadi</td>
                            </tr>
                            <tr class="row2">
                                <td>Morepalayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Neikkarapatti</td>
                            </tr>
                            <tr class="row2">
                                <td>Kailasampalayam</td>
                            </tr>
                            <tr class="row1">
                                <td>Tiruchengode Bus Stand</td>
                            </tr>
                            <tr class="row2">
                                <td>Salem Road</td>
                            </tr>
                            <tr class="row1">
                                <td>Pullikarmill</td>
                            </tr>
                        </tbody>
                        </table>
                    </div> -->
                    <div class="table-layout">
                        <table style="width:100%" class="tbl" border="1" cellspacing="1" cellpadding="1">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th style="text-align: center;">BUS No</th>
                                    <th style="text-align: center;">ROUTE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="row1">
                                    <td rowspan="14" style="text-align: center; vertical-align: middle;">1</td>
                                    <td rowspan="14" style="vertical-align: middle;">Paramathi Bus No: 4</td>
                                    <td>Kumbupudupalam</td>
                                 </tr>
                                <tr class="row2">
                                    <td>Thottiyanthottam</td>
                                </tr>
                                <tr class="row1">
                                    <td>Kandampalayam</td>
                                </tr>
                                <tr class="row2">
                                    <td>Maniyanoor</td>
                                </tr>
                                <tr class="row1">
                                    <td>Chitalandhur</td>
                                </tr>
                                <tr class="row2">
                                    <td>Karattu palayam</td>
                                </tr>
                                <tr class="row1">
                                    <td>Valarigate</td>
                                </tr>
                                <tr class="row2">
                                    <td>CHB Colony</td>
                                </tr>
                                <tr class="row1">
                                    <td>Town police station</td>
                                </tr>
                                <tr class="row2">
                                    <td>Tiruchengode old bus Stand</td>
                                </tr>
                                <tr class="row1">
                                    <td>Tiruchengode New bus Stand</td>
                                </tr>
                                <tr class="row2">
                                    <td>Tiruchengode court</td>
                                </tr>
                                <tr class="row1">
                                    <td>karuveppampatti</td>
                                </tr>
                                <tr class="row2">
                                    <td>Narayanampalayam</td>
                                </tr>
                                <tr class="row1">
                                    <td rowspan="7" style="text-align: center; vertical-align: middle;">2</td>
                                    <td rowspan="7" style="vertical-align: middle;">Jalagandapuram Bus No: 5</td>
                                    <td>Idappadi</td>
                                </tr>
                                <tr class="row2">
                                    <td>Konganapuram</td>
                                </tr>
                                <tr class="row1">
                                    <td>Thangayur</td>
                                </tr>
                                <tr class="row2">
                                    <td>Chemicals pirivu</td>
                                </tr>
                                <tr class="row1">
                                    <td>Sankari New bus stand</td>
                                </tr>
                                <tr class="row2">
                                    <td>Sankari Old bus stand</td>
                                </tr>
                                <tr class="row1">
                                    <td>Thiruchengode corner</td>
                                </tr>
                                <tr class="row1">
                                    <td rowspan="12" style="text-align: center; vertical-align: middle;">3</td>
                                    <td rowspan="12" style="vertical-align: middle;">Veppadi Van: 6</td>
                                </tr>
                                <tr class="row2">
                                    <td>Amman kovil</td>
                                </tr>
                                <tr class="row1">
                                    <td>Valrasapalayam</td>
                                </tr>
                                <tr class="row2">
                                    <td>Modamangalam</td>
                                </tr>
                                <tr class="row1">
                                    <td>Thaneerpandal palayam</td>
                                </tr>
                                <tr class="row2">
                                    <td>Anangoor</td>
                                </tr>
                                <tr class="row1">
                                    <td>Andikadu</td>
                                </tr>
                                <tr class="row2">
                                    <td>Devanankuruchi</td>
                                </tr>
                                <tr class="row1">
                                    <td>Srinivasampalayam</td>
                                </tr>
                                <tr class="row2">
                                    <td>Vengipalayam</td>
                                </tr>
                                <tr class="row1">
                                    <td>Morur</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>Palmadai</td>
                                </tr>
                                <tr class="row1">
                                    <td rowspan="5" style="text-align: center; vertical-align: middle;">4</td>
                                    <td rowspan="5" style="vertical-align: middle;">Rasipuram Van No: 7</td>
                                    <td>Gurusamipalayam</td>
                                </tr>
                                <tr class="row2">
                                    <td>Ilachipalayam</td>
                                </tr>
                                <tr class="row1">
                                    <td>Vaiyapamalai</td>
                                </tr>
                                <tr class="row2">
                                    <td>Elimedu</td>
                                </tr>
                                <tr class="row1 ">
                                    <td>kumaramangalam</td>
                                </tr>
                                <tr class="row1 ">
                                    <td rowspan="7" style="text-align: center; vertical-align: middle;">5</td>
                                    <td rowspan="7" style="vertical-align: middle;">Sengamamuniyappan Kovil Van No: 9</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>Goundanur</td>
                                </tr>
                                <tr class="row1 ">
                                    <td>Post office ICL</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>Pirivu Road</td>
                                </tr>
                                <tr class="row1 ">
                                    <td>Pachakkadu</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>R.S.Housing Board</td>
                                </tr>
                                <tr class="row1 ">
                                    <td>R.S</td>
                                </tr>
                                <tr class="row1">
                                    <td rowspan="8" style="text-align: center; vertical-align: middle;">6</td>
                                    <td rowspan="8" style="vertical-align: middle;">Pokkambalayam  Van No:10</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>Goundampalayam</td>
                                </tr>
                                <tr class="row1 ">
                                    <td>Kumaramangalam</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>SND road</td>
                                </tr>
                                <tr class="row1 ">
                                    <td>T.Code, Sengodampalayam</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>Weavers colony</td>
                                </tr>
                                <tr class="row1 ">
                                    <td>Sindham palayam</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>Okkilipatti</td>
                                </tr>
                                <tr class="row1 ">
                                    <td rowspan="13" style="text-align: center; vertical-align: middle;">7</td>
                                    <td rowspan="13" style="vertical-align: middle;">Erode Bus No:11    </td>
                                    <td>G.H Erode</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>Erode</td>
                                </tr>
                                <tr class="row1">
                                    <td>Avuthipalayam</td>
                                </tr>
                                <tr class="row2">
                                    <td>pallipalayam</td>
                                </tr>
                                <tr class="row1">
                                    <td>Alaramathumedu</td>
                                </tr>
                                <tr class="row2">
                                    <td>S.P.B Colony</td>
                                </tr>
                                <tr class="row1">
                                    <td>Thokkavadi</td>
                                </tr>
                                <tr class="row2">
                                    <td>Vidhya vikas</td>
                                </tr>
                                <tr class="row1 ">
                                    <td>Kootappalli</td>
                                </tr>
                                <tr class="row2 ">
                                    <td>Rajagoundampalayam</td>
                                </tr>
                                <tr class="row1">
                                    <td>Santhapaettai</td>
                                </tr>
                                <tr class="row2">
                                    <td>Tiruchengode</td>
                                </tr>
                                <tr class="row1">
                                    <td>Pollice line -Santhapettai</td>
                                </tr>
                                <tr class="row1">
                                    <td rowspan="8" style="text-align: center; vertical-align: middle;">8</td>
                                <td rowspan="8" style="vertical-align: middle;">Kumarapalayam Bus No:12</td>
                                </tr>
                                <tr class="row2">
                                    <td>M.G.R Nagar</td>
                                </tr>
                                <tr class="row1">
                                    <td>Colony Hospital</td>
                                </tr>
                                <tr class="row2">
                                    <td>Pallipalayam corner</td>
                                </tr>
                                <tr class="row1">
                                    <td>Kumarapalayam bus stand</td>
                                </tr>
                                <tr class="row2">
                                    <td>Anangoor corner</td>
                                </tr>
                                <tr class="row1">
                                    <td>Rajam theatre</td>
                                </tr>
                                <tr class="row2">
                                    <td>Katheri pirivu</td>
                                </tr>
                                <tr class="row1">
                                    <td rowspan="8" style="text-align: center; vertical-align: middle;">9</td>
                                    <td rowspan="8" style="vertical-align: middle;">Chinnampatti Bus No:13</td>
                                </tr>
                                <tr class="row1">
                                    <td>Ettikuttai medu</td>
                                </tr>
                                <tr class="row2">
                                    <td>Konganapuram</td>
                                </tr>
                                <tr class="row1">
                                    <td>Magudanchavadi</td>
                                </tr>
                                <tr class="row2">
                                    <td>Vaikundham</td>
                                </tr>
                                <tr class="row1">
                                    <td>Vagudappatti</td>
                                </tr>
                                <tr class="row2">
                                    <td>Oonjanur</td>
                                </tr>
                                <tr class="row1">
                                    <td>Sankari R.S</td>
                                </tr>
                                <tr class="row1">
                                    <td rowspan="4" style="text-align: center; vertical-align: middle;">10</td>
                                    <td rowspan="4" style="vertical-align: middle;">Bhavani Bus No: 14</td>
                                </tr>
                                <tr class="row2">
                                    <td>Bhavani bus stand</td>
                                </tr>
                                <tr class="row1">
                                    <td>Kalingarayanpalayam pirivu</td>
                                </tr>
                                <tr class="row2">
                                    <td>Lakshmi Nagar</td>
                                </tr>
                                <tr class="row1">
                                    <td rowspan="8" style="text-align: center; vertical-align: middle;">11</td>
                                    <td rowspan="8" style="vertical-align: middle;">Ponnampalayam Bus No:15</td>
                                    <td>Koneripatti</td>
                                </tr>
                                <tr class="row2">
                                    <td>Thevur</td>
                                </tr>
                                <tr class="row1">
                                    <td>Aalichampalayam</td>
                                </tr>
                                <tr class="row2">
                                    <td>Velrivezhi</td>
                                </tr>
                                <tr class="row1">
                                    <td>Idappadi</td>
                                </tr>
                                <tr class="row2">
                                    <td>velamavalasu</td>
                                </tr>
                                <tr class="row1">
                                    <td>kuppanur</td>
                                </tr>
                                <tr class="row2">
                                    <td>Sankari sandhaipettai</td>
                                </tr>
                                <tr class="row1">
                                    <td rowspan="14" style="text-align: center; vertical-align: middle;">12</td>
                                    <td rowspan="14" style="vertical-align: middle;">Kodumudi Bus No:16</td>
                                    <td>Othakadai</td>
                                </tr>
                                <tr class="row2">
                                    <td>Thamaripalayam</td>
                                </tr>
                                <tr class="row1">
                                    <td>Amman kovil</td>
                                </tr>
                                <tr class="row2">
                                <td>kaikati</td>
                                </tr>
                                <tr class="row1">
                                <td>Sivagiri</td>
                                </tr>
                                <tr class="row2">
                                <td>Modakurichi</td>
                                </tr>
                                <tr class="row1">
                                <td>Lakkapuram</td>
                                </tr>
                                <tr class="row2">
                                <td>Solar</td>
                                </tr>
                                <tr class="row1">
                                <td>Kokkarayanpettai</td>
                                </tr>
                                <tr class="row2">
                                <td>Vittampalayam</td>
                                </tr>
                                <tr class="row1">
                                <td>Andipalayam</td>
                                </tr>
                                <tr class="row2">
                                <td>Animoor</td>
                                </tr>
                                <tr class="row1">
                                <td>Kollappatti</td>
                                </tr>
                                <tr class="row2">
                                <td>Valarai gate</td>
                                </tr>
                                <tr class="row1">
                                <td rowspan="14" style="text-align: center; vertical-align: middle;">13</td>
                                <td rowspan="14" style="vertical-align: middle;">Salem Bus No: 18</td>
                                <td>salem New Bus Stand</td>
                                </tr>
                                <tr class="row2">
                                <td>Kondalampatti Bye Pass</td>
                                </tr>
                                <tr class="row1">
                                <td>Veerapandi,Palampatti</td>
                                </tr>
                                <tr class="row2">
                                <td>Attayampatti</td>
                                </tr>
                                <tr class="row1">
                                <td>Kallipatti</td>
                                </tr>
                                <tr class="row2">
                                <td>Suriya Goundampalayam</td>
                                </tr>
                                <tr class="row1">
                                <td>Kallukadi</td>
                                </tr>
                                <tr class="row2">
                                <td>Morepalayam</td>
                                </tr>
                                <tr class="row1">
                                <td>Neikkarapatti</td>
                                </tr>
                                <tr class="row2">
                                <td>Kailasampalayam</td>
                                </tr>
                                <tr class="row1">
                                <td>Tiruchengode Bus Stand</td>
                                </tr>
                                <tr class="row2">
                                <td>Salem Road</td>
                                </tr>
                                <tr class="row1">
                                <td>Pullikarmill</td>
                                </tr>
                                </tbody>
                                </table>
</div>

                </div>
            </div>
        </div>
    </section>

@endsection