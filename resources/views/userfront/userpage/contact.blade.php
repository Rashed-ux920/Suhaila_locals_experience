@extends('userfront.layout.master')
@section('content')
<div class="page-title light-background">
    <div class="container">
      <h1>Contact</h1>
      <nav class="breadcrumbs">
        <ol>
            @if (Auth::check())
            <li><a href="{{route('home')}}">Home</a></li>
            @else
            <li><a href="{{route('landing')}}">Home</a></li>
            @endif

          <li class="current">Contact</li>
        </ol>
      </nav>
    </div>
</div><!-- End Page Title -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade">

          <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

              <div class="info">
                <h3>contact us</h3>
                <p>send us a message and let us know your opinion</p>

                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Location:</h4>
                    <p>jordan, aqaba</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <a href="mailto:suhaila.cook@gmail.com">
                        suhaila.cook@gmail.com"
                    </a>
                  </div>
                </div><!-- End Info Item -->



              </div>

            </div>

            <div class="col-lg-8">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
