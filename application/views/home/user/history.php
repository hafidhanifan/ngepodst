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
                          <i class='bx bx-history fa-6x' style='color:#7e3b89'></i>
                          <!-- <img src="images/mic.png" alt="Mic" height="100" width="100"> -->
                          <p class="pt-4 fs-5 text-secondary">Sign in to access podcast<br>Watch history isn't viewable when signed out</p>
                          <button class="btn" style="color: #7E3B89; border-color: #7E3B89; border-radius: 25px; background-color: none;">Sign In</button>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <!-- Sign In Alert End -->
              <?php } else { ?>
                <a class="d-flex text-decoration-none align-items-center mt-4">
                  <h1 class="fs-4 col-8 d-none d-sm-inline text-dark">History</h1>
                </a>
            </div>
            <div class="col py-1 px-3">
              <a class="text-decoration-none align-items-center">
                <h4 class="fs-5 col-11 d-none d-sm-inline text-dark">Today</h4>
              </a>
            </div>
            <div class="col py-3 px-3">
              <div class="card border-0" style="max-width: 50rem;">
                <div class="row">
                  <div class="col-2">
                    <img class="card-img-top" src="<?= base_url('assets/images/person_1.jpg'); ?>" alt="Card image cap" style="width: 125px;">
                  </div>
                  <div class="col-10">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-10">
                          <div class="text mt-3">
                            <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 01: Lulus tanpa skripsi</a></h3>
                            <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <i class='bx bx-play-circle fa-4x mt-3' style='color:#7e3b89'></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0 mt-3" style="max-width: 50rem;">
                <div class="row">
                  <div class="col-2">
                    <img class="card-img-top" src="<?= base_url('assets/images/person_2.jpg'); ?>" alt="Card image cap" style="width: 125px;">
                  </div>
                  <div class="col-10">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-10">
                          <div class="text mt-3">
                            <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 3 : Magang kampus merdeka</a></h3>
                            <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <i class='bx bx-play-circle fa-4x mt-3' style='color:#7e3b89'></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0 mt-3" style="max-width: 50rem;">
                <div class="row">
                  <div class="col-2">
                    <img class="card-img-top" src="<?= base_url('assets/images/person_3.jpg'); ?>" alt="Card image cap" style="width: 125px;">
                  </div>
                  <div class="col-10">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-10">
                          <div class="text mt-3">
                            <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 2 : Get ready for AMICTA</a></h3>
                            <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <i class='bx bx-play-circle fa-4x mt-3' style='color:#7e3b89'></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col py-1 px-3">
              <a class="text-decoration-none align-items-center">
                <h4 class="fs-5 col-11 d-none d-sm-inline text-dark">Yesterday</h4>
              </a>
            </div>
            <div class="col py-3 px-3">
              <div class="card border-0 mt-3" style="max-width: 50rem;">
                <div class="row">
                  <div class="col-2">
                    <img class="card-img-top" src="<?= base_url('assets/images/person_5.jpg'); ?>" alt="Card image cap" style="width: 125px;">
                  </div>
                  <div class="col-10">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-10">
                          <div class="text mt-3">
                            <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 2 : Get ready for AMICTA</a></h3>
                            <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <i class='bx bx-play-circle fa-4x mt-3' style='color:#7e3b89'></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0 mt-3" style="max-width: 50rem;">
                <div class="row">
                  <div class="col-2">
                    <img class="card-img-top" src="<?= base_url('assets/images/person_6.jpg'); ?>" alt="Card image cap" style="width: 125px;">
                  </div>
                  <div class="col-10">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-10">
                          <div class="text mt-3">
                            <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 01: Lulus tanpa skripsi</a></h3>
                            <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <i class='bx bx-play-circle fa-4x mt-3' style='color:#7e3b89'></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col py-1 px-3">
              <a class="text-decoration-none align-items-center">
                <h4 class="fs-5 col-11 d-none d-sm-inline text-dark">Last Week</h4>
              </a>
            </div>
            <div class="col py-3 px-3">
              <div class="card border-0" style="max-width: 50rem;">
                <div class="row">
                  <div class="col-2">
                    <img class="card-img-top" src="<?= base_url('assets/images/person_3.jpg'); ?>" alt="Card image cap" style="width: 125px;">
                  </div>
                  <div class="col-10">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-10">
                          <div class="text mt-3">
                            <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 01: Lulus tanpa skripsi</a></h3>
                            <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <i class='bx bx-play-circle fa-4x mt-3' style='color:#7e3b89'></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0 mt-3" style="max-width: 50rem;">
                <div class="row">
                  <div class="col-2">
                    <img class="card-img-top" src="<?= base_url('assets/images/person_4.jpg'); ?>" alt="Card image cap" style="width: 125px;">
                  </div>
                  <div class="col-10">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-10">
                          <div class="text mt-3">
                            <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 3 : Magang kampus merdeka</a></h3>
                            <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <i class='bx bx-play-circle fa-4x mt-3' style='color:#7e3b89'></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
        <!-- Content End -->
        </div>