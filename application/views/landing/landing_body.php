<!-- Navigation Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo" height="60" width="60">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link fw-bold active" href="#hero">HOME <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link fw-bold" href="#about-us">ABOUT US</a>
        <a class="nav-item nav-link fw-bold" href="#popular">POPULAR</a>
      </div>
    </div>
    <a href="<?= site_url('home'); ?>" class="btn btn-secondary text-light fw-bold border-0" style="background-color: #7E3B89;">PUTAR PODCAST</a>
  </div>
</nav>
<!-- Navigation End -->
<!-- Header Start -->
<section class="hero" id="hero">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="text">
          <h1 class="fw-bold">Record your Story,<br><span class="fw-bold" style="color: #F6A634;">and inspire others<br>to grow</h1></span>
          <p class="pt-3 text-secondary">Listen to your favorite podcast from Any<br>University with a seamless experience. Let's<br>enjoy with us</p>
        </div>
        <div class="buttons pt-2">
          <a href="#" class="btn btn-secondary border-0 fw-bold" style="background-color: #7E3B89;">Get Started</a>
        </div>
        <div class="more">
          <img src="<?= base_url('assets/images/more.png'); ?>" alt="" class="pt-5">
        </div>
      </div>
      <div class="col-md-6">
        <img src="<?= base_url('assets/images/shape.png'); ?>" alt="Header" class="w-100">
      </div>
    </div>
  </div>
</section>
<!-- Header End -->

<!-- About Us Start -->
<section class="about-us" id="about-us">
  <div class="container">
    <div class="text-header text-center">
      <h1>NGEPODST!</h1>
      <p>is an official podcast from Amikom University. NGEPODST!<br>
        provided for students from Amikom University to share their<br>
        story by create their own podcast</p>
    </div>
  </div>
</section>
<!-- About Us End -->

<!-- Popular Start -->
<section class="popular" id="popular">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>Top Podcast<br>For This Week</h1>
      </div>
      <div class="col-md-4">
        <p>here's some top podcast <br>in this week<br>
          <a href="#" class="text-dark"><u>Explore more</u></a>
        </p>
      </div>
    </div>
    <!-- Podcast Card Start -->
    <div class="col-9 col-lg-10 pt-5">
      <div class="row">
        <div class="col-3 mr-sm-2">
          <div class="card shadow mb-5 bg-white rounded" style="width: 16rem;">
            <img class="card-img-top p-3" src="<?= base_url('assets/images/img-1.png'); ?>" alt="Card image cap">
            <div class="card-body">
              <h1 class="card-text fs-6">Lulus tanpa skripsi</h1>
              <div class="row">
                <p class="card-text text-secondary col-8" style="font-size:0.875em">By Ferdinando</p><img class="col-4" src="<?= base_url('assets/images/play.png'); ?>" alt="Play" height="50" width="50">
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 mr-sm-2">
          <div class="card shadow mb-5 bg-white rounded" style="width: 16rem;">
            <img class="card-img-top p-3" src="<?= base_url('assets/images/img-2.png'); ?>" alt="Card image cap">
            <div class="card-body">
              <h1 class="card-text fs-6">Get ready for AMICTA</h1>
              <div class="row">
                <p class="card-text text-secondary col-8" style="font-size:0.875em">By Hafid Hanifan</p><img class="col-4" src="<?= base_url('assets/images/play.png'); ?>" alt="Play" height="50" width="50">
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 mr-sm-2">
          <div class="card shadow mb-5 bg-white rounded" style="width: 16rem;">
            <img class="card-img-top p-3" src="<?= base_url('assets/images/img-3.png'); ?>" alt="Card image cap">
            <div class="card-body">
              <h1 class="card-text fs-6">Magang kampus merdeka</h1>
              <div class="row">
                <p class="card-text text-secondary col-8" style="font-size:0.875em">By Oktaviana Arifah</p><img class="col-4" src="<?= base_url('assets/images/play.png'); ?>" alt="Play" height="50" width="50">
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 mr-sm-2">
          <div class="card shadow mb-5 bg-white rounded" style="width: 16rem;">
            <img class="card-img-top p-3" src="<?= base_url('assets/images/img-6.png'); ?>" alt="Card image cap">
            <div class="card-body">
              <h1 class="card-text fs-6">Magang kampus merdeka</h1>
              <div class="row">
                <p class="card-text text-secondary col-8" style="font-size:0.875em">By Dinda Farras</p><img class="col-4" src="<?= base_url('assets/images/play.png'); ?>" alt="Play" height="50" width="50">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Podcast Card End -->
    </div>
  </div>
</section>
<!-- Popular End -->