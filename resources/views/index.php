<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $title ?? "untitled" }}</title>
  <meta content="{{ $description }}" name="description">
  <meta content="{{ $about }}" name="og:description">
  <meta content="/assets/img/apple-touch-icon.png" name="og:image">
  <meta content="{{ $keywords }}" name="keywords">


  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/assets/img/logo.png" alt="">
        <h1 class="sitename">{{ $brand_name }}</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#pricing">Daftar Produk</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="<?= $whatsapp; ?>">Hubungi Kami</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1><?= $tagline; ?></h1>
            <p><?= $slogan; ?></p>
            <div class="d-flex">
              <a href="<?= $whatsapp; ?>" class="btn-get-started">Pesan Sekarang</a>
              <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                class="glightbox btn-watch-video d-flex align-items-center">
                <i class="bi bi-eye"></i>
                <span>Lihat layanan</span>
                </a> -->
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="/assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <!-- <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

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
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section> -->
    <!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">


      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
      </div>

      <div class="container">

        <div class="row gy-4">

          <!-- <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
            {{ $about }}
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                  velit.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo</span></li>
            </ul>
          </div> -->

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <p>{{ $about }}</p>
            <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
          </div>

        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Services Section -->
    <section id="services" class="services section light-background">


      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div>

      <div class="container">

        <div class="row gy-4 d-flex justify-content-center">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Tembak Kuota</a></h4>
              <p>
                Kami dapat mengisikan kuota anda dari jarak jauh cukup dengan nomer kartu yang inign di isi
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Konfigurasi HTTP custom</a></h4>
              <p>Kami sering membagikan Konfigurasi untuk http custom di group whatsapp kami</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Kuota Murah</a></h4>
              <p>Kami menawarkan kuota internet yang harganya sangat terjangkau</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="/assets/img/cta-bg.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Komitmen Kami</h3>
            <p>
              <?= $commit_message; ?>
            </p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Komitmen Kami</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <!-- <section id="portfolio" class="portfolio section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="/assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="/assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1"
                  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="/assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="/assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1"
                  data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="/assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="/assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1"
                  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="/assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="/assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2"
                  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="/assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="/assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2"
                  data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="/assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="/assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2"
                  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="/assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="/assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3"
                  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="/assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="/assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3"
                  data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="/assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="/assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2"
                  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>

          </div>
        </div>

      </div>

    </section> -->
    <!-- /Portfolio Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">


      <div class="container section-title" data-aos="fade-up">
        <h2>Daftar Paket Kuota</h2>
        <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque at, eligendi non impedit quod cupiditate eius, fugiat voluptatem, eum dolorem minus. Impedit facilis ea nemo mollitia ad itaque. A, similique.</p> -->
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item featured">
              <h3>Paket Akrab AREA 4</h3>
              <h4><sup>IDR</sup>40.000<span></span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 1 : 12GB</span></li>

                <li><i class="bi bi-check"></i> <span>Estimasi Area 2 : 15GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 3 : 23GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 3 : 23GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 4 : 50GB</span></li>
                <li><i class="bi bi-info"></i>
                  <span>
                    Silahkan UNREG paket terlebih dahulu
                    Ketik *808*7*1*3#OK pilih STOP AKRAB
                    Rp : 40.000
                  </span>
                </li>
              </ul>
              <a href="<?= $whatsapp; ?>" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Paket Akrab HOTBASIC</h3>
              <h4><sup>IDR</sup>50.000<span></span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 1 : 12GB</span></li>

                <li><i class="bi bi-check"></i> <span>Estimasi Area 2 : 15GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 3 : 23GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 3 : 23GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 4 : 50GB</span></li>
                <li><i class="bi bi-info"></i>
                  <span>
                    Jenis Kuota Bonus Akrab
                    Pastikan sebelum order tdk ada paket akrab nya
                    Rp: 50.000
                </li>
              </ul>
              <a href="<?= $whatsapp; ?>" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Paket Akrab BASIC</h3>
              <h4><sup>IDR</sup>65.000<span></span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 1 : 7.5GB</span></li>

                <li><i class="bi bi-check"></i> <span>Estimasi Area 2 : 12GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 3 : 65GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 3 : 25GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 4 : 65GB</span></li>
                <li><i class="bi bi-info"></i>
                  <span>
                    Apabila Reward Tidak Masuk Potong Harga 5K
                    Tdk Rekomendasi Area 1 & 2 krn jika Reward tdk masuk harga jd terkesan Mahal
                    Rp: 70.000
                  </span>
                </li>
              </ul>
              <a href="<?= $whatsapp; ?>" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->


          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Paket Akrab JOSMINI</h3>
              <h4><sup>IDR</sup>85.000<span></span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 1 : 25GB-35GB</span></li>

                <li><i class="bi bi-check"></i> <span>Estimasi Area 2 : 30GB-40GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 3 : 43GB-60GB</span></li>
                <li><i class="bi bi-check"></i> <span>Estimasi Area 3 : 63GB-150GB</span></li>
                <li><i class="bi bi-info"></i>
                  <span>
                    Apabila Reward Tidak Masuk, Potong Harga 5K
                    Tdk Rekomendasi Area 1 & 2 krn jika Reward tdk masuk harga jd terkesan Mahal
                  </span>
                </li>
              </ul>
              <a href="<?= $whatsapp; ?>" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->



        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Testimonials Section -->
    <!-- <section id="testimonials" class="testimonials section">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

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
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                    malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                    minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                    velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                    veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                    quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> -->
    <!-- /Testimonials Section -->

  </main>

  <footer id="footer" class="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe">
              </div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="/" class="d-flex align-items-center">
            <span class="sitename">{{ $brand_name }}</span>
          </a>
          <p class="mt-3"><?= $footer_message; ?></p>
          <div class="footer-contact pt-3">
            <p class="mt-3"><strong>Phone:</strong> <span><?= $phone; ?></span></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Tautan</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Layanan</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Jual Pulsa Data</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Konfigurasi HTTP Custom</a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div> -->

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $brand_name }}</strong> <span>All Rights
          Reserved</span>
      </p>
      <div class="credits">

        Didukung oleh <a href="https://harapandigital.com/">Harapan Digital</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>