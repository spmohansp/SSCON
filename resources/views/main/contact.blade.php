@extends('main.layout.master')

@section('title')Sri Shanmugha College of Nursing For Women (SSCP).- Contact. @endsection


@section('Description')  Sri Shanmugha College of Nursing For Women (SSCON) Sankari – Tiruchengode Main Road,Pullipalayam, Sankari Taluk, Salem,Tamil Nadu 637304.@endsection

@section('MobileTitle') Contact @endsection

@section('Contact')active @endsection

@section('BreadCrumb')
    <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
            <h1 class="veil reveal-sm-block">Contact Us</h1>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li>Apply
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <section class="section-70 section-md-114">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-xs-10 cell-md-8 text-md-left">
                    <h2 class="text-bold">Get in Touch</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-md-top-60">
                        <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
                    </div>
                    <div class="offset-top-30">
                        <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
                            <div class="range">
                                <div class="cell-lg-6 offset-top-12">
                                    <div class="form-group">
                                        <label for="contact-me-name" class="form-label form-label-outside">Name</label>
                                        <input id="contact-me-name" type="text" name="name" data-constraints="@Required" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-lg-6 offset-top-12">
                                    <div class="form-group">
                                        <label for="contact-me-email" class="form-label form-label-outside">E-mail</label>
                                        <input id="contact-me-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-lg-6 offset-top-12">
                                    <div class="form-group">
                                        <label for="contact-me-phone" class="form-label form-label-outside">Mobile</label>
                                        <input id="contact-me-phone" type="text" name="mobile" data-constraints="@Required @IsNumeric" minlength="10" maxlength="10" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-lg-6 offset-top-6">
                                    <div class="form-group">
                                        <label for="contact-me-message" class="form-label form-label-outside">Address</label>
                                        <textarea id="contact-me-message" name="address" data-constraints="@Required" style="height: 70px" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="cell-lg-12 offset-top-12">
                                    <div class="form-group">
                                        <label for="contact-me-message" class="form-label form-label-outside">Feed Back</label>
                                        <textarea id="contact-me-message" name="message" data-constraints="@Required" style="height: 220px" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-lg-left offset-top-20">
                                <button type="submit" class="btn btn-primary">Send Feedback</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cell-xs-10 cell-md-4 offset-top-65 offset-md-top-0 text-left">
                    <div class="inset-md-left-30">
                        <div class="offset-top-30 offset-md-top-60">
                            <h6 class="text-bold">Address</h6>
                            <div>
                                <div class="hr bg-gray-light offset-top-10"></div>
                            </div>
                            <div class="offset-top-15">
                                <div class="unit unit-horizontal unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-xs mdi mdi-map-marker text-madison"></span></div>
                                    <div class="unit-body">
                                        <h5>Sri Shanmugha College of Nursing For Women</h5>
                                        <p class="text-dark">Sankari – Tiruchengode Main Road, Pullipalayam,</p>
                                        <p class="text-dark">Morur (Po),Sankari (TK), Salem (Dt), Tamil Nadu,Pin-637304</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offset-top-30 offset-md-top-60">
                            <h6 class="text-bold">Phone</h6>
                            <div>
                                <div class="hr bg-gray-light offset-top-10"></div>
                            </div>
                            <div class="offset-top-15">
                                <ul class="list list-unstyled">
                                    <li><span class="icon icon-xs text-madison mdi mdi-phone text-middle"></span><a class="text-middle inset-left-10 text-dark">073736 72999</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="offset-top-30 offset-md-top-60">
                            <h6 class="text-bold">E-mail</h6>
                            <div>
                                <div class="hr bg-gray-light offset-top-10"></div>
                            </div>
                            <div class="offset-top-15">
                                <style>
                                    table, td{
                                        color: #161963
                                    }
                                </style>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark" >
                                            <tr >
                                                <th colspan="2" scope="col" style="text-align: center;background-color:#161963;color:#fff;"> <span class="fa fa-envelope-o" aria-hidden="true"></span> MAIL US</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="background-color:#f6f6f6;color:#fff;">
                                                <td>Admission</td>
                                                <td><a href="mailto:admissions@shanmugha.edu.in">admissions@shanmugha.edu.in</a></td>
                                            </tr>
                                            <tr style="background-color:#fff;color:#fff;">
                                                <td>Career</td>
                                                <td><a href="mailto:career@shanmugha.edu.in">career@shanmugha.edu.in</a></td>
                                            </tr>
                                            <tr style="background-color:#f6f6f6;color:#fff;">
                                                <td>College</td>
                                                <td><a href="mailto:info@shanmugha.edu.in">info@shanmugha.edu.in</a></td>
                                            </tr>
                                            <tr style="background-color:#fff;color:#fff;">
                                                <td>Principal</td>
                                                <td><a href="mailto:principal@shanmughanursing.edu.in">principal@shanmughanursing.edu.in</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection