        <!-- Form Start -->
        <div class="col-9 col-lg-10 pt-3" style="background-color: #FFF9FF;">
          <div class="col py-3 px-3">
            <div class="login" style="margin-left: 250px;">
              <div class="row">
                <div class="py-1">
                  <div class="form-bg" style="padding: 150px 0;">
                    <div class="container">
                      <div class="row">
                        <!-- <div class="col-md-offset-3 col-md-10">
                          <div class="form-container"> -->
                        <h3 class="title">New Podcast</h3>
                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('podcast/add_action'); ?>">


                          <div class="form-group">
                            <label>Category</label>
                            <select size="0" class="form-control" name="idKat">
                              <?php foreach ($category as $val) { ?>
                                <option value="<?php echo $val->idKat; ?>"><?php echo $val->category_name; ?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Upload Tumbnail</label>
                            <input name="thumbnail" type="file" class="form-control" placeholder="Upload Gambar">
                          </div>
                          <div class="form-group">
                            <label>Upload File</label>
                            <input name="audio" type="file" class="form-control" placeholder="Upload File">
                          </div>
                          <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" placeholder="User Name">
                          </div>
                          <div class="form-group">
                            <label>Description</label>
                            <input name="description" type="text" class="form-control" placeholder="Description">
                          </div>
                          <div class="form-group mt-4">

                            <button type="submit" class="btn btn-primary">Upload</button>

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
        </div>
        </div>
        <!-- Form End -->