<div class="col-9 col-lg-10 pt-5">
  <div class="col-md-12">
    <div class="col py-3 px-3" style="background-color: #FFF9FF;">

      <?php if (!empty($this->session->userdata('User'))) { ?>

        <a class="d-flex text-decoration-none align-items-center mt-4">
          <h1 class="fs-4 col-8 d-none d-sm-inline text-dark">Hello, <span><?= $username->username; ?></span></h1>
        </a>
        <a class="d-flex text-decoration-none align-items-center">
          <p class="text-secondary">Let's record your story and inspire other</p>
        </a>
      <?php } ?>