 <!-- Register Start -->
 <div class="register" style="margin-left: 500px;">
   <div class="row">
     <div class="py-1">
       <div class="form-bg" style="padding: 180px 0;">
         <div class="container">
           <div class="row">
             <div class="col-md-offset-3 col-md-8">
               <div class="form-container">
                 <h3 class="title">Register</h3>
                 <form class="form-horizontal" method="post" action="<?= site_url('home/regis_action'); ?>">
                   <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="username">

                   </div>
                   <div class="form-group">
                     <label>Email ID</label>
                     <input type="email" class="form-control" placeholder="Email Address" name="email">

                   </div>
                   <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="password">
                   </div>
                   <!-- <div class="form-group">
                     <label>Confirm Password</label>
                     <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                   </div> -->
                   <h4 class="sub-title">Personal Information</h4>
                   <div class="form-group">
                     <label>Phone No.</label>
                     <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                   </div>
                   <div class="form-group">
                     <label>City</label>
                     <input type="text" class="form-control" placeholder="City" name="city">
                   </div>
                   <div class="check-terms">
                     <input type="checkbox" class="checkbox">
                     <span class="check-label">I agree to the terms</span>
                   </div>
                   <span class="signin-link">Already have an account? Click here to <a href="<?= site_url('home/login'); ?>">Login</a></span>
                   <button type="submit" class="btn signup">Create Account</button>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- Register End -->