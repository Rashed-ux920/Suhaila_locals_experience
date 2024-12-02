@extends('userfront.layout.master')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1>Services</h1>
            <nav class="breadcrumbs">
                <ol>
                    @if (Auth::check())
                    <li><a href="{{route('home')}}">Home</a></li>
                    @else
                    <li><a href="{{route('landing')}}">Home</a></li>
                    @endif

                    <li class="current">Services</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section">

        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-md-6 col-lg-4">
                    <span class="content-subtitle">Our Services</span>
                    <h2 class="content-title">
                        **Cultural Tours** <br>
                        Explore the ancient history of Aqaba and immerse yourself in stories that have shaped the city.
                    </h2>
                    <p class="lead">
                        **Cooking Experiences**  <br>
                        Join us for a hands-on cooking class where you’ll learn traditional Jordanian recipes and enjoy a delicious meal.
                    </p>
                    <p class="mb-5">
                        **Sunset Story Boat Tours** <br>
                        Sail the Red Sea at sunset, accompanied by local stories and a calming soundtrack.
                    </p>
                    <p>
                        <a href="#" class="btn btn-get-started">Get Started</a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 ps-lg-5">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="services-item" data-aos="fade-up" data-aos-delay="">
                                <div class="services-icon">
                                    <i class="bi bi-search"></i>
                                </div>
                                <div>
                                    <h3>Square</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                                <div class="services-icon">
                                    <i class="bi bi-command"></i>
                                </div>
                                <div>
                                    <h3>Technology</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="services-icon">
                                    <i class="bi bi-grid"></i>
                                </div>
                                <div>
                                    <h3>Brilliant Ideas</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="services-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="services-icon">
                                    <i class="bi bi-globe"></i>
                                </div>
                                <div>
                                    <h3>Blueprint</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Services 2 Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

        <div class="container">
            <div class="row gy-4 justify-content-center">

                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up">
                        <div class="services-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <div>
                            <h3>Technology</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="services-icon">
                            <i class="bi bi-command"></i>
                        </div>
                        <div>
                            <h3>Web Design</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="services-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <div>
                            <h3>Branding</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- /Services Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade">

          <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

              <div class="info">
                <h3>Get in touch</h3>
                <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Location:</h4>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 55</p>
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
