 <!-- Content Start -->
 <div class="col-9 col-lg-10 pt-5" style="background-color: #FFF9FF;">
   <div class="col-md-12">
     <div class="col py-3 px-3">
       <a class="d-flex text-decoration-none mt-1 align-items-center mt-4">
         <h1 class="fs-4 col-8 d-none d-sm-inline text-dark">Member</h1>
       </a>

       <!-- Member Start -->
       <table class="table table-striped">
         <thead>
           <tr>
             <th scope="col">#</th>
             <th scope="col">Username</th>
             <th scope="col">Name</th>
             <th scope="col">Phone</th>
             <th scope="col">Address</th>
             <th scope="col">Status</th>
             <th scope="col">Action</th>
           </tr>
         </thead>
         <tbody>
           <?php $no = 1;
            foreach ($user as $val) { ?>
             <tr>
               <th scope="row"><?= $no; ?></th>
               <td><?= $val->username; ?></td>
               <td><?= $val->email; ?></td>
               <td><?= $val->phone; ?></td>
               <td><?= $val->city; ?></td>
               <td><?php if ($val->is_active == "Y") {
                      echo "Active";
                    } else {
                      echo "Not Active";
                    } ?></td>
               <td>
                 <div class="btn-group">
                   <a href="<?php echo site_url('admin/change_status/' . $val->idUser); ?>" class="btn btn-warning">Change Status</a>
                   <a href="<?php echo site_url('admin/delete_user/' . $val->idUser); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Delete</a>
                 </div>
               </td>
             </tr>
           <?php $no++;
            } ?>
         </tbody>
       </table>

       <!-- Member End -->
     </div>
   </div>
   <!-- Content End -->