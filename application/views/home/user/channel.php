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
          <h1 class="fs-4 col-8 d-none d-sm-inline text-dark">My Channel</h1>
        </a>
        <div class="row">
          <div class="col-2">
            <a class="d-flex text-decoration-none align-items-center mt-3">
              <!-- <p class="text-secondary">Let's record your story and inspire other</p> -->
              <img class="rounded-circle shadow-4-strong" alt="avatar2" src="<?= base_url('assets/images/img-3.png'); ?>" height="200" width="200" />
            </a>
          </div>
          <div class="col-8">
            <h1 class="fs-2 align-items-center mt-5">Olivia Young</h1>
            <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>Hello everyone, this is my first podcast. This podcast will discuss everything <br>
                  about them telling stories about life and college. Hope you guys enjoy!</small></span></div>
            <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small><span class="sep">1</span> Playlist | <span class="sep">0</span> Followers | <span class="sep">0</span> Following</small></span></div>
          </div>
          <div class="col-2" style="margin-top: 80px;">
            <a href="<?= site_url('podcast/add_podcast'); ?>"><button type="button" class="btn btn-secondary fs-5 border-0" style="background-color: #7E3B89;"><i class='bx bx-plus fa-1x' style='color:#FFF9FF'></i> New Podcast</button></a>
          </div>
        </div>

        <!-- Podcast Card Start -->
        <table class="table mt-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Duration</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($podcast as $val) { ?>
              <tr>
                <th scope="row">
                  <audio id="player" src="<?= base_url('uploads/' . $val->audio); ?>"></audio>
                  <i class="bx bx-play-circle fa-4x" id="playbtn" style="color: #7e3b89"></i>
                </th>
                <td>
                  <div class="row">
                    <div class="col-2 mt-1">
                      <img src="<?= base_url('uploads/' . $val->thumbnail); ?>" alt="" height="80" width="80">
                    </div>
                    <div class="col-10">
                      <h5 class="fs-5 align-item-center"><?= $val->title; ?></h5>
                      <div class="text-secondary mb-2"><span class="text-black-opacity-05"><small><?= $val->deskripsi; ?></small></span></div>
                    </div>

                  </div>
                </td>

                <td>
                  <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small></span> 1:30:20</small></span></div>
                </td>
                <td>
                  <a href="<?= site_url('podcast/edit_podcast/' . $val->idPodcast); ?>" class="bx bxs-edit text-decoration-none fa-2x" style="color:#7e3b89"></a>
                  <a href="<?= site_url('podcast/delete/' . $val->idPodcast); ?>" class="bx bxs-trash text-decoration-none fa-2x" style="color:#7e3b89"></a>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
        <!-- Podcast Card End  -->
      <?php } ?>
    </div>
  </div>
  <!-- Content End -->
</div>