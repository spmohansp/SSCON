@extends('main.layout.master')

@section('title')Sri Shanmugha College of Pharmacy - Student Grievance Redressal cell @endsection


@section('Description') Sri Shanmugha College of Pharmacy was established in the year 2017 by the industrialist and philanthropist Thiru.K.Shanmugham. The college is recognized by the Government of Tamil Nadu and affiliated to The Tamil Nadu Dr.MGR Medical University. @endsection

@section('MobileTitle') Student Grievance @endsection


@section('Academics')active @endsection


@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block"> Student Grievance Redressal cell</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About</li>
                    <li>Student Grievance Redressal cell</li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('content')
    <section class="section-70 section-md-114">
        <div class="shell">
            <div class="range">
                <div class="cell-sm-12 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                    <h2 class="text-bold">Our Student Grievance Redressal cell</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-sm-top-60">
                        <p align="justify">&nbsp;&nbsp;&nbsp;The Student Grievance Cell was set up in order to redress academic and non-academic problems and grievances which the students undergo in the campus. The cell looks into the grievances very carefully after collecting letters/feedback related to their problems via suggestion box. Proper remedial measures or actions are made with regard to the base and nature of the problems. The committee functions with the following objectives.</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <table class="table table-custom table-fixed bordered-table stacktable large-only">
                            <tbody>
                            <tr>
                                <th>S.No</th>
                                <th>Name of the faculty/ Student</th>
                                <th>Designation</th>
                                <th>Position</th>
                                <th>E.Mail </th>
                                <th>Contact</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>DR.S.Jayaraman</td>
                                <td>Principal</td>
                                <td>Convener</td>
                                <td>principal@shanmughapharmacy.edu.in</td>
                                <td>9865462217</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Public Relations Officer, The Tamilnadu  Dr. MGR Medical University</td>
                                <td>Public Relations Officer</td>
                                <td>Ombudsman   </td>
                                <td>grievances@tnmgrmu.ac.in</td>
                                <td>04422353574,76-79, 22301760-63 - Extn:204</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Prof. Dr G. Rathinavel</td>
                                <td>Vice Principal</td>
                                <td>Co-Convener</td>
                                <td>grvelsp@gmail.com</td>
                                <td>9842717939</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Mr. P. Balasubramaniam</td>
                                <td>ASST. PROFESSOR</td>
                                <td>Member</td>
                                <td>constatinebala@gmail.com</td>
                                <td>8778310052</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Mr. S. Parthiban</td>
                                <td>ASST. PROFESSOR</td>
                                <td>Member</td>
                                <td>Singaparthi131@gmail.com</td>
                                <td>9976315073</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Mr. T. Boopathi</td>
                                <td>ASST. PROFESSOR</td>
                                <td>members</td>
                                <td>tboopathimpharm@gmail.com</td>
                                <td>7373570806</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Mr. Jimmy Alex</td>
                                <td>ASST. PROFESSOR</td>
                                <td>members</td>
                                <td>jimmyalexander211@gmail.com</td>
                                <td>9207687071</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <h3>Feedback Form</h3>
                        <form data-form-output="form-output-global" data-form-type="contact" method="post" action="#" class="rd-mailform text-left" novalidate="novalidate">
                            <div class="range">
                                <div class="cell-lg-6">
                                    <div class="form-group">
                                        <label for="contact-me-name" class="form-label form-label-outside rd-input-label">Name</label>
                                        <input id="contact-me-name" type="text" name="name" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                                    </div>
                                </div>
                                <div class="cell-lg-6 offset-top-12">
                                    <div class="form-group">
                                        <label for="contact-me-email" class="form-label form-label-outside rd-input-label">E-mail</label>
                                        <input id="contact-me-email" type="email" name="email" data-constraints="@Required @Email" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                                    </div>
                                </div>
                                <div class="cell-lg-6 offset-top-12">
                                    <div class="form-group">
                                        <label for="contact-me-phone" class="form-label form-label-outside rd-input-label">Phone</label>
                                        <input id="contact-me-phone" type="text" name="phone" data-constraints="@Required @IsNumeric" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                                    </div>
                                </div>
                                <div class="cell-lg-6 offset-top-12">
                                    <div class="form-group">
                                        <label for="contact-me-phone" class="form-label form-label-outside rd-input-label">Type of Complaint</label>
                                        <div class="radioRightSide">
                                            <label class="radioStuff"> <input type="radio" name="type" value="academic" class="radioButton">Academic</label>
                                            <label class="radioStuff"><br><input type="radio" name="type" value="infrastructural" class="radioButton">Infrastructural</label>
                                            <label class="radioStuff"><br><input type="radio" name="type" value="others" class="radioButton">Others</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell-lg-12 offset-top-12">
                                    <div class="form-group">
                                        <label for="contact-me-message" class="form-label form-label-outside rd-input-label">Details</label>
                                        <textarea id="contact-me-message" name="details" data-constraints="@Required" style="height: 220px" class="form-control form-control-has-validation form-control-last-child"></textarea><span class="form-validation"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-lg-left offset-top-20">
                                <button type="submit" class="btn btn-primary">Send Feedback</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection