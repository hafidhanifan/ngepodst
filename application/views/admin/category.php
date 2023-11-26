<div class="col-9 col-lg-10 pt-3" style="background-color: #FFF9FF;">
  <div class="col py-3 px-3">
    <div class="row mt-5">

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Kategori</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Category Name</th>
                        <th style="width: 40px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($category as $val) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $val->category_name; ?></td>
                          <td>
                            <div class="btn-group">
                              <a href="<?php echo site_url('admin/edit_category/' . $val->idKat); ?>" class="btn btn-warning">Edit</a>
                              <a href="<?php echo site_url('admin/delete_category/' . $val->idKat); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Delete</a>
                            </div>
                          </td>
                        </tr>
                      <?php $no++;
                      } ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="<?php echo site_url('admin/add_view'); ?>" class="btn btn-sm btn-info float-left">Add category</a>
                </div>
              </div>
            </div>
            <!-- /.col -->
          </div>
        </div><!-- /.container-fluid -->
      </section>
    </div>
  </div>
</div>