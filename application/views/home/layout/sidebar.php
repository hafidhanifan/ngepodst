<!-- Sidebar Start -->
<div class="col-3 col-lg-2">
  <div class="col-12 shadow col-md-4 col-lg-2 px-sm-2 px-0 fixed-top min-vh-100" id="sidebar" style="background-color: #FFFFFF;">
    <div class="p-2 flex-column mt-4">
      <div class="preloader flex-column justify-content-center align-items-center text-center mt-2">
        <img class="logo" src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo" height="100" width="100">
      </div>
      <a class="d-flex text-decoration-none mt-1 align-items-center mt-4">
        <span class="fs-6 d-none d-sm-inline text-secondary">Main menu</span>
      </a>
      <ul class="nav nav-pills flex-column mt-4">
        <li class="nav-item">
          <a href="<?= site_url('home/index'); ?>" class="nav-link active text-black" style="background-color: #FFF9FF;" aria-current="page">
            <i class="fs-6 bx bxs-home"></i><span class="ms-3 d-none d-sm-inline" style="font-size:0.875em">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('home/library'); ?>" class="nav-link text-black" aria-current="page">
            <i class="fs-6 bx bx-library"></i><span class="ms-3 d-none d-sm-inline" style="font-size:0.875em">Your Library</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('podcast'); ?>" class="nav-link text-black" aria-current="page">
            <i class="fs-6 bx bx-movie-play"></i><span class="ms-3 d-none d-sm-inline" style="font-size:0.875em">Channel</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('home/history'); ?>" class="nav-link text-black" aria-current="page">
            <i class="fs-6 bx bx-history"></i><span class="ms-3 d-none d-sm-inline" style="font-size:0.875em">History</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('home/liked_podcast'); ?>" class="nav-link text-black" aria-current="page">
            <i class="fs-6 bx bx-like"></i><span class="ms-3 d-none d-sm-inline" style="font-size:0.875em">Liked Podcast</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="help-nav p-2">
      <a class="d-flex text-decoration-none mt-1 align-items-center">
        <span class="fs-6 d-none d-sm-inline text-secondary">Help & Setting</span>
      </a>
      <ul class="nav nav-pills flex-column mt-4">
        <li class="nav-item">
          <a href="<?= site_url('home/help'); ?>" class="nav-link text-black" aria-current="page">
            <i class="fs-6 bx bx-help-circle"></i><span class="ms-3 d-none d-sm-inline" style="font-size:0.875em">Help & Center</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('home/setting'); ?>" class="nav-link text-black" aria-current="page">
            <i class="fs-6 bx bx-cog"></i><span class="ms-3 d-none d-sm-inline" style="font-size:0.875em">Setting</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('home/report'); ?>" class="nav-link text-black" aria-current="page">
            <i class="fs-6 bx bx-error-alt"></i><span class="ms-3 d-none d-sm-inline" style="font-size:0.875em">Report</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- Sidebar End -->