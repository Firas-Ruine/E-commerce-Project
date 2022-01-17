@extends('layouts.front')

@section('title')
 Contact
@endsection

@section('content')

<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-3">
            <form id="contact-form" style="margin-left: 100px;" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-5 mt-3">
                        <div class="md-form mt-5">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">

                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 mt-3">
                        <div class="md-form mb-0 mt-5">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">

                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-10">
                        <div class="md-form mb-0 mt-5">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">

                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-10">

                        <div class="md-form mt-5">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message"></textarea>

                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left mt-5">
                <a class="btn btn-dark" >Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mt-5 text-center">
            <ul class="list-unstyled mb-0">

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+216 24 010 447</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@e-shop.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

@endsection
