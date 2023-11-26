<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NGEPODTS</title>
  <link href="<?= base_url('assets/images/logo.png'); ?>" rel="icon">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/css/admin.css'); ?>">

  <link rel="stylesheet" href="<?= base_url('assets/vendor/css/bootstrap.min.css'); ?>">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="form-bg" style="margin-left: 350px;">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-8">
          <div class="form-container">
            <h3 class="title">Register</h3>
            <form method="post" action="<?= site_url('admin_login/regis_action'); ?>" class="form-horizontal">
              <div class="form-group">
                <label>User Name</label>
                <input type="text" name="username" class="form-control" placeholder="User Name">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group mt-5">
                <span class="signin-link">Have an account?<br> Click here to <a href="<?= site_url('admin_login'); ?>">Login</a></span>
                <a href="#">
                  <button type="submit" class="btn signup">Register</button>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>