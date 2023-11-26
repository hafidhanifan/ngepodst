      <!-- Podcast Card Start -->
      <div class="row">
        <div class="py-3">
          <a class="d-flex text-decoration-none mt-1 align-items-center">
            <h1 class="fs-4 col-11 d-none d-sm-inline text-dark">New Episode</h1><span class="col-1 text-dark">see all</span>
          </a>
        </div>
        <?php foreach ($podcast as $val) { ?>
          <div class="col-3 mr-sm-2">
            <div class="card shadow mb-5 bg-white rounded" style="width: 16rem;">
              <img class="card-img-top p-3" src="<?= base_url('assets/images/img-1.png'); ?>" alt="Card image cap">
              <div class="card-body">
                <h1 class="card-text fs-6"><?= $val->title; ?></h1>
                <div class="row">
                  <p class="card-text text-secondary col-8" style="font-size: 0.875em">
                    By Ferdinando
                  </p>
                  <div class="col-4">
                    <audio id="player" src="<?= base_url('uploads/' . $val->audio); ?>"></audio>
                    <i class="bx bx-play-circle fa-4x" id="playbtn" style="color: #7e3b89"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="py-3">
              <div class="row">
                <a class="d-flex text-decoration-none align-items-center">
                  <h1 class="fs-4 col-11 d-none d-sm-inline text-dark">Trending for this week</h1><span class="col-1 text-dark ">see all</span>
                </a>
              </div>
            </div>
            <div class="col-3 mr-sm-2">
              <div class="card shadow mb-5 bg-white rounded" style="width: 16rem;">
                <img class="card-img-top p-3" src="<?= base_url('assets/images/img-4.png'); ?>" alt="Card image cap">
                <div class="card-body">
                  <h1 class="card-text fs-6"><?= $val->title; ?></h1>
                  <div class="row">
                    <p class="card-text text-secondary col-8" style="font-size:0.875em">By Ferdinando</p><a href="#" class="col-4 bx bx-play-circle fa-4x text-decoration-none" style='color:#7e3b89'></a>
                  </div>
                </div>
              </div>
            </div>




          </div>
        <?php } ?>
        <!-- Podcast Card End  -->