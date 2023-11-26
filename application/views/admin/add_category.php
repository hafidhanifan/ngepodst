<!-- Form Start -->
<div class="col-9 col-lg-10 pt-3" style="background-color: #FFF9FF;">
  <div class="col py-3 px-3">
    <div class="row mt-5">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Category</h3>
          </div>
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?= site_url('admin/add_action'); ?>">
            <div class="card-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                <div class="col-sm-9">
                  <input type="text" name="category" class="form-control" id="inputEmail3" placeholder="Category Name">
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right" style="background-color: #7E3B89; color: white;">Save</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- Form End -->