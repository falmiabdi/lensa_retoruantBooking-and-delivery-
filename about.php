<?php require "config/config.php"; ?>
<?php require "libs/App.php"; ?>
<?php require "includes/header.php"; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
  <div class="container text-center my-5 pt-5 pb-4">
    <h1 class="display-3 text-white mb-3 animated slideInDown" data-translate="about_us">About Us</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center text-uppercase">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-white active" aria-current="page" data-translate="about">About</li>
      </ol>
    </nav>
  </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-6 text-start">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
          </div>
          <div class="col-6 text-start">
            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
          </div>
          <div class="col-6 text-end">
            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
          </div>
          <div class="col-6 text-end">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="section-title ff-secondary text-start text-primary fw-normal" data-translate="about_us">About Us</h5>
        <h1 class="mb-4" data-translate="welcome_title">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
        <p class="mb-4" data-translate="about_desc1">
          Discover culinary excellence with our passionate team of chefs.
          We blend traditional recipes with modern techniques to create unforgettable dining experiences.
        </p>
        <p class="mb-4" data-translate="about_desc2">
          Every dish tells a story of quality ingredients, careful preparation, and genuine hospitality.
          Join us for a journey of flavors that celebrate both innovation and tradition.
        </p>
        <div class="row g-4 mb-4">
          <div class="col-sm-6">
            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
              <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
              <div class="ps-4">
                <p class="mb-0" data-translate="years_of">Years of</p>
                <h6 class="text-uppercase mb-0" data-translate="experience">Experience</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
              <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
              <div class="ps-4">
                <p class="mb-0" data-translate="popular">Popular</p>
                <h6 class="text-uppercase mb-0" data-translate="master_chefs">Master Chefs</h6>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-primary py-3 px-5 mt-2" href="" data-translate="read_more">Read More</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-xxl pt-5 pb-3">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="section-title ff-secondary text-center text-primary fw-normal" data-translate="team_members">Team Members</h5>
      <h1 class="mb-5" data-translate="our_master_chefs">Our Master Chefs</h1>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item text-center rounded overflow-hidden">
          <div class="rounded-circle overflow-hidden m-4">
            <img class="img-fluid" src="img/team-1.jpg" alt="">
          </div>
          <h5 class="mb-0" data-translate="chef_name1">Chef Alex Johnson</h5>
          <small data-translate="chef_role1">Head Chef & Founder</small>
          <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item text-center rounded overflow-hidden">
          <div class="rounded-circle overflow-hidden m-4">
            <img class="img-fluid" src="img/team-2.jpg" alt="">
          </div>
          <h5 class="mb-0" data-translate="chef_name2">Maria Rodriguez</h5>
          <small data-translate="chef_role2">Pastry Specialist</small>
          <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item text-center rounded overflow-hidden">
          <div class="rounded-circle overflow-hidden m-4">
            <img class="img-fluid" src="img/team-3.jpg" alt="">
          </div>
          <h5 class="mb-0" data-translate="chef_name3">David Chen</h5>
          <small data-translate="chef_role3">Sous Chef</small>
          <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item text-center rounded overflow-hidden">
          <div class="rounded-circle overflow-hidden m-4">
            <img class="img-fluid" src="img/team-4.jpg" alt="">
          </div>
          <h5 class="mb-0" data-translate="chef_name4">Sarah Williams</h5>
          <small data-translate="chef_role4">Wine Expert</small>
          <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->


<?php require "includes/footer.php"; ?>