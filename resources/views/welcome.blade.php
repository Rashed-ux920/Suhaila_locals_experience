
@extends('userfront.layout.master')
@section('content')

            {{-- start swiper --}}
                @include('userfront.includes.sectiones.firstsection')
            {{-- end swiper --}}

            {{-- start misstion --}}

                @include('userfront.includes.sectiones.misstion')

            {{-- end misstion --}}

                <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container">

          <div class="row gy-4 justify-content-center">

            <div class="col-lg-5">
              <div class="images-overlap">
                <img src="assets/img/img_v_1.jpg" alt="student" class="img-fluid img-1" data-aos="fade-up">
              </div>
            </div>

            <div class="col-lg-4 ps-lg-5">
              <span class="content-subtitle">Why Us</span>
              <h2 class="content-title">Far far away Behind the Word Mountains</h2>
              <p class="lead">
                At Suhaila Local's Experience,
                 we offer more than just tours—we create meaningful connections with Aqaba's vibrant culture, history, and community. Our personalized experiences, guided by passionate locals, ensure you’ll uncover the hidden gems of this coastal city while supporting sustainable tourism.
                 Choose us for an authentic journey that leaves lasting memories and a deeper appreciation for Aqaba.
              </p>
              <p class="mb-5">
                There live the blind texts. Separated they live in Bookmarksgrove
                right at the coast of the Semantics, a large language ocean.
              </p>
              <div class="row mb-5 count-numbers">

                <!-- Start Stats Item -->
                <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
                  <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="3919" data-purecounter-duration="1" class="purecounter number"></span>
                  <span class="d-block">Coffee</span>
                </div>
                <!-- End Stats Item -->

                <!-- Start Stats Item -->
                <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                  <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="2831" data-purecounter-duration="1" class="purecounter number"></span>
                  <span class="d-block">Codes</span>
                </div>
                <!-- End Stats Item -->

                <!-- Start Stats Item -->
                <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                  <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="1914" data-purecounter-duration="1" class="purecounter number"></span>
                  <span class="d-block">Projects</span>
                </div>
                <!-- End Stats Item -->

              </div>
            </div>

          </div>

        </div>
      </section><!-- /Stats Section -->

@endsection
