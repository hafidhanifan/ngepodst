<?php if (empty($this->session->userdata('User'))) { ?>
  <!-- Footer Start -->
  <div class="container-fluid" style="background-color: #7E3B89;">
    <footer class="py-5">
      <div class="row">
        <div class="col-4 offset-1">
          <form>
            <div class="flex-column justify-content-center align-items-center text-center mt-2">
              <img class="logo" src="<?= base_url('assets/images/puteh.png'); ?>" alt="Logo" height="150" width="150">
              <div class="footer-col pt-4">
                <div class="social-links">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-2 pt-5">
          <h5 class="text-light fs-4">Company</h5><br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">About</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Popular</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">About Campus</a></li>
          </ul>
        </div>

        <div class="col-2 pt-5">
          <h5 class="text-light fs-4">Communities</h5><br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">For Podcaster</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Vendor</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Investor</a></li>
          </ul>
        </div>

        <div class="col-2 pt-5">
          <h5 class="text-light fs-4">Useful Links</h5><br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Amikom University</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Support</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Free Mobile App</a></li>
          </ul>
        </div>
      </div>
      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p class="text-light">© 2023 NGEPODTS!</p>
      </div>
    </footer>
  </div>
  <!-- Footer End -->
  </div>
  <!-- Content End -->
<?php } else { ?>
  </div>
  </div>
<?php } ?>
<script src="<?= base_url('assets/vendor/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/js/media.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>