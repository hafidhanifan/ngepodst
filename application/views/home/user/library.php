<!-- Content Start -->
<div class="col-9 col-lg-10 pt-5" style="background-color: #FFF9FF;">
  <div class="col-md-12">
    <div class="col py-3 px-3">
      <?php if (empty($this->session->userdata('User'))) { ?>
        <!-- Sign In Alert Start -->
        <div class="row">
          <div class="py-1">
            <section class="alert" style="padding: 287px 0;">
              <div class="container">
                <div class="text-header text-center">
                  <img src="<?= base_url('assets/images/mic.png'); ?>" alt="Mic" height="100" width="100">
                  <p class="pt-4 fs-5 text-secondary">Sign in to access podcast that you've liked or saved</p>
                  <button class="btn" style="color: #7E3B89; border-color: #7E3B89; border-radius: 25px; background-color: none;">Sign In</button>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- Sign In Alert End -->
      <?php } else { ?>
        <a class="d-flex text-decoration-none align-items-center mt-4">
          <h1 class="fs-4 col-8 d-none d-sm-inline text-dark">My Library</h1>
        </a>
        <!-- Playlist Card Start -->
        <div class="col py-3 px-3">
          <div class="row">
            <div class="col-6">
              <div class="card" style="max-width: 30rem;">
                <div class="row">
                  <img class="card-img-top" src="<?= base_url('assets/images/img-1.png'); ?>" alt="Card image cap" style="width: 200px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/img-2.png'); ?>" alt="Card image cap" style="width: 200px; margin-left: -100px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/img-3.png'); ?>" alt="Card image cap" style="width: 200px; margin-left: -100px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/img-4.png'); ?>" alt="Card image cap" style="width: 200px; margin-left: -98px;">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Playlist 1</h5>
                  <div class="row">
                    <div class="col-9">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-text text-secondary col-8" style="font-size:0.875em">By Hafid Hanifan</p>
                    </div>
                    <div class="col-3">
                      <i class='bx bx-play-circle fa-5x mt-3' style='color:#7e3b89'></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="max-width: 30rem;">
                <div class="row">
                  <img class="card-img-top" src="<?= base_url('assets/images/person_1.jpg'); ?>" alt="Card image cap" style="width: 200px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/person_2.jpg'); ?>" alt="Card image cap" style="width: 200px; margin-left: -100px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/person_3.jpg'); ?>" alt="Card image cap" style="width: 200px; margin-left: -100px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/person_4.jpg'); ?>" alt="Card image cap" style="width: 200px; margin-left: -98px;">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Playlist 2</h5>
                  <div class="row">
                    <div class="col-9">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-text text-secondary col-8" style="font-size:0.875em">By Ferdinando</p>
                    </div>
                    <div class="col-3">
                      <i class='bx bx-play-circle fa-5x mt-3' style='color:#7e3b89'></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-6">
              <div class="card" style="max-width: 30rem;">
                <div class="row">
                  <img class="card-img-top" src="<?= base_url('assets/images/img-1.png'); ?>" alt="Card image cap" style="width: 200px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/img-2.png'); ?>" alt="Card image cap" style="width: 200px; margin-left: -100px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/img-3.png'); ?>" alt="Card image cap" style="width: 200px; margin-left: -100px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/img-4.png'); ?>" alt="Card image cap" style="width: 200px; margin-left: -98px;">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Playlist 3</h5>
                  <div class="row">
                    <div class="col-9">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-text text-secondary col-8" style="font-size:0.875em">By Oktaviana Arifah</p>
                    </div>
                    <div class="col-3">
                      <i class='bx bx-play-circle fa-5x mt-3' style='color:#7e3b89'></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="max-width: 30rem;">
                <div class="row">
                  <img class="card-img-top" src="<?= base_url('assets/images/person_1.jpg'); ?>" alt="Card image cap" style="width: 200px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/person_2.jpg'); ?>" alt="Card image cap" style="width: 200px; margin-left: -100px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/person_3.jpg'); ?>" alt="Card image cap" style="width: 200px; margin-left: -100px;">
                  <img class="card-img-top" src="<?= base_url('assets/images/person_4.jpg'); ?>" alt="Card image cap" style="width: 200px; margin-left: -98px;">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Playlist 4</h5>
                  <div class="row">
                    <div class="col-9">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-text text-secondary col-8" style="font-size:0.875em">By Dinda Farras</p>
                    </div>
                    <div class="col-3">
                      <i class='bx bx-play-circle fa-5x mt-3' style='color:#7e3b89'></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <!-- Playlist Card End  -->
  </div>
</div>
<!-- Content End -->