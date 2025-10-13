<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RMC Chandrapur</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/KMPrefine.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .carousel-caption
        {
            background:none !important;
        }

        .text-shadow{
            filter: drop-shadow(2px 4px 6px black);
        }
        </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <?php include "header.php"?>


    


    <!-- Carousel Start -->
 <!-- Fullscreen Carousel Section -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100 vh-100 object-fit-cover" src="img/slider.png" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-start h-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-start">
                                <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">
                                    Building Future with Innovation
                                </p>
                                <h1 class="display-1 text-shadow text-white mb-4 animated slideInRight">
                                    Delivering Smart Industrial Solutions
                                </h1>
                                <p class="text-white fs-5 mb-4 animated slideInRight">
                                    We combine technology and expertise to drive your business forward.
                                </p>
                                <a href="#services" class="btn btn-primary py-3 px-5 animated slideInRight">
                                    Discover Our Services
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="w-100 vh-100 object-fit-cover" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-start h-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-start">
                                <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">
                                    Trusted by Leading Industries
                                </p>
                                <h1 class="display-1 text-shadow text-white mb-4 animated slideInRight">
                                    Engineering Excellence Since 2000
                                </h1>
                                <p class="text-white fs-5 mb-4 animated slideInRight">
                                    From concept to creation — we deliver excellence every step of the way.
                                </p>
                                <a href="#about" class="btn btn-primary py-3 px-5 animated slideInRight">
                                    Learn More About Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img class="w-100 vh-100 object-fit-cover" src="img/time-2.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-start h-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-start">
                                <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">
                                    Driven by Quality & Commitment
                                </p>
                                <h1 class="display-1 text-shadow text-white mb-4 animated slideInRight">
                                    Shaping the Industry of Tomorrow
                                </h1>
                                <p class="text-white fs-5 mb-4 animated slideInRight">
                                    Empowering businesses with cutting-edge solutions and expert support.
                                </p>
                                <a href="#contact" class="btn btn-primary py-3 px-5 animated slideInRight">
                                    Get in Touch
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            
            <!-- Left Side Images -->
            <div class="col-lg-6">
                <div class="row gx-3 h-100">
                    <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/about-1.jpg" alt="Concrete Plant">
                    </div>
                    <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/about-2.jpg" alt="Concrete Truck">
                    </div>
                </div>
            </div>

            <!-- Right Side Text -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="fw-medium text-uppercase text-primary mb-2">About Us</p>
                <h1 class="display-5 mb-4">We Are Experts in Ready-Mix Concrete Solutions</h1>
                <p class="mb-4">
                    At <strong>RMC CHANDRAPUR MH +</strong>, we provide high-quality, ready-mix concrete designed to meet the needs of modern construction. 
                    With state-of-the-art batching plants, on-time delivery, and strict quality control, 
                    we ensure every cubic meter of concrete meets your project’s exact specifications.
                </p>

                <!-- Experience and Services -->
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0 bg-primary p-4 text-center text-white">
                        <h1 class="display-2">15</h1>
                        <h5 class="text-white">Years of</h5>
                        <h5 class="text-white">Excellence</h5>
                    </div>
                    <div class="ms-4">
                        <p><i class="fa fa-check text-primary me-2"></i>Ready-Mix Concrete Supply</p>
                        <p><i class="fa fa-check text-primary me-2"></i>Custom Concrete Design</p>
                        <p><i class="fa fa-check text-primary me-2"></i>On-Site Delivery & Pumping</p>
                        <p><i class="fa fa-check text-primary me-2"></i>Quality Testing & Control</p>
                        <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Industrial & Residential Projects</p>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="row pt-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Email Us</p>
                                <h5 class="mb-0">kmprmc77@gmail.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Call Us</p>
                                <h5 class="mb-0">+91 81808 31188</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">25</h1>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">135</h1>
                    <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">957</h1>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">1839</h1>
                    <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/feature.jpg" alt="">
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
<p class="mb-4">
We are trusted by clients for our commitment to quality, on-time delivery, and professional service. Our focus on reliability, customer satisfaction, and modern technology makes us a preferred choice in the industry.
</p>

                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                   <h4>Experienced Workers</h4>
<span>Our team consists of skilled and experienced professionals dedicated to delivering high-quality work with precision and efficiency.</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Reliable Industrial Services</h4>
<span>We deliver dependable and high-quality industrial solutions with a strong focus on safety, efficiency, and customer satisfaction.</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                   <h4>24/7 Customer Support</h4>
<span>Our dedicated support team is available around the clock to assist you with quick responses and reliable solutions.</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <section class="container py-5">
         
  <div class="row g-4 justify-content-center">

    <!-- Card 1 -->
    <div class="col-md-4 col-sm-6">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
        <img src="img/card-1.jpg" class="card-img-top" alt="Industrial Complex">
        <div class="card-body bg-dark text-center text-white">
          <h5 class="fw-semibold text-white">Industrial Complex</h5>
          <p class="text-muted mb-0">Commercial Infrastructure</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4 col-sm-6">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
        <img src="img/card-2.jpeg" class="card-img-top" alt="Lloyds Metal">
        <div class="card-body bg-dark text-center text-white">
          <h5 class="fw-semibold text-white">Lloyds Metal</h5>
          <p class="text-muted mb-0">Energy Industrial Facility</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4 col-sm-6">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
        <img src="img/card-3.jpg" class="card-img-top" alt="Vishwaraj Environment">
        <div class="card-body bg-dark text-center text-white">
          <h5 class="fw-semibold text-white">CSTPS </h5>
          <p class="text-muted mb-0">STP Project</p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-4 col-sm-6">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
        <img src="img/card-4.jpeg" class="card-img-top" alt="Mahalaxmi Cement Works">
        <div class="card-body bg-dark text-center text-white">
          <h5 class="fw-semibold text-white">Mahalaxmi Cement Works</h5>
          <p class="text-muted mb-0">Cement Manufacturing Plant</p>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col-md-4 col-sm-6">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
        <img src="img/card-5.jpeg" class="card-img-top" alt="UltraTech Projects">
        <div class="card-body bg-dark text-center text-white">
          <h5 class="fw-semibold text-white">UltraTech Projects</h5>
          <p class="text-muted mb-0">Ready-Mix Concrete Facility</p>
        </div>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="col-md-4 col-sm-6">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
        <img src="img/card-6.jpeg" class="card-img-top" alt="JSW Industries">
        <div class="card-body bg-dark text-center text-white">
          <h5 class="fw-semibold text-white">JSW Industries</h5>
          <p class="text-muted mb-0">Steel Manufacturing Unit</p>
        </div>
      </div>
    </div>

    <!-- Card 7 -->
    <div class="col-md-4 col-sm-6">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
        <img src="img/card-7.jpeg" class="card-img-top" alt="Godrej Construction">
        <div class="card-body bg-dark text-center text-white">
          <h5 class="fw-semibold text-white">Godrej Construction</h5>
          <p class="text-muted mb-0">Corporate Infrastructure Project</p>
        </div>
      </div>
    </div>

    <!-- Card 8 -->
    <div class="col-md-4 col-sm-6">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
        <img src="img/card-8.jpeg" class="card-img-top" alt="Reliance Industrial">
        <div class="card-body bg-dark text-center text-white">
          <h5 class="fw-semibold text-white">Reliance Industrial</h5>
          <p class="text-muted mb-0">Petrochemical Facility</p>
        </div>
      </div>
    </div>

  </div>
</section>
    <!-- Service End -->


    <!-- Project Start -->
    <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Projects</p>
            <h1 class="display-5 text-white mb-5">See What We Have Completed Recently</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-1.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Auto Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-2.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Civil Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-3.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Gas Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-4.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Power Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-5.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Energy Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-6.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Water Engineering</h5>
                </div>
            </a>
        </div>
    </div>
    <!-- Project End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Team</p>
                <h1 class="display-5 mb-5">Dedicated Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Rob Miller</h5>
                                <span class="text-primary">CEO & Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Adam Crew</h5>
                                <span class="text-primary">Project Manager</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Peter Farel</h5>
                                <span class="text-primary">Engineer</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-1.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-3.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


 <?php include "footer.php"?>



 


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>