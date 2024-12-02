<section id="about" class="about section">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 1,
                    "spaceBetween": 1
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="frontuser/image/Aqaba.webp" alt="Image" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="frontuser/image/welcome.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="frontuser/image/firstsection.jpg" alt="Image" class="img-fluid">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-lg-4 order-lg-1">
          <span class="section-subtitle" data-aos="fade-up">Meet Suhaila</span>
          <h1 class="mb-4" data-aos="fade-up">
            Welcome
          </h1>
          <p data-aos="fade-up">
            to Aqaba, where history, culture, and natural beauty blend seamlessly! At **Suhaila Local's Experience**, we’re dedicated to offering unforgettable experiences for travelers looking to connect deeply with this stunning coastal city.

          </p>
          <p class="mt-5" data-aos="fade-up">
            <a href="{{ route('register') }}" class="btn btn-get-started">Join Us</a>
          </p>
        </div>
      </div>
    </div>
</section>
