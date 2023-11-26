<div class="col-md-12">
  <div class="col py-3 px-3">
    <!-- Login Card Start -->
    <div class="login" style="margin-left: 350px;">
      <div class="row">
        <div class="py-1">
          <div class="form-bg" style="padding: 180px 0;">
            <div class="container">
              <div class="row">
                <div class="col-md-offset-3 col-md-8">
                  <div class="form-container">
                    <h3 class="title">Login</h3>
                    <form class="form-horizontal" method="post" action="<?= site_url('home/login_action'); ?>">
                      <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="User Name" name="username">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                      </div>
                      <div class="form-group mt-5">
                        <span class="signin-link">Don't have an account?<br> Click here to <a href="<?= site_url('home/register'); ?>">Sign Up</a></span>
                        <!-- <a href="User.html"> -->
                        <button type="submit" class="btn signup">Login</button>
                        <!-- </a> -->
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Card End -->