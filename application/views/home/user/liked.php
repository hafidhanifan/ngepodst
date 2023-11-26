 <!-- Content Start -->
 <div class="col-9 col-lg-10 pt-5" style="background-color: #FFF9FF;">
   <div class="col-md-12">
     <div class="col py-3 px-3">
       <?php if (empty($this->session->userdata('User'))) { ?>
         <!-- Sign In Alert Start -->
         <div class="row">
           <div class="py-1">
             <section class="alert" style="padding: 287px 0;">
               <div class="container">
                 <div class="text-header text-center">
                   <img src="<?= base_url('assets/images/mic.png'); ?>" alt="Mic" height="100" width="100">
                   <p class="pt-4 fs-5 text-secondary">Sign in to access podcast that you've liked or saved</p>
                   <button class="btn" style="color: #7E3B89; border-color: #7E3B89; border-radius: 25px; background-color: none;">Sign In</button>
                 </div>
               </div>
             </section>
           </div>
         </div>
         <!-- Sign In Alert End -->
       <?php } else { ?>
         <a class="d-flex text-decoration-none align-items-center mt-4">
           <h1 class="fs-4 col-8 d-none d-sm-inline text-dark">Liked Podcasts</h1>
         </a>
         <!-- Playlist Card Start -->
         <div class="col py-3 px-3">
           <div class="card border-0" style="max-width: 50rem;">
             <div class="row">
               <div class="col-2">
                 <img class="card-img-top" src="<?= base_url('assets/images/person_1.jpg'); ?>" alt="Card image cap" style="width: 125px;">
               </div>
               <div class="col-10">
                 <div class="card-body">
                   <div class="row">
                     <div class="col-10">
                       <div class="text mt-3">
                         <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 01: Lulus tanpa skripsi</a></h3>
                         <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                       </div>
                     </div>
                     <div class="col-2">
                       <i class='bx bxs-heart fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                       <i class='bx bx-play-circle fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="card border-0 mt-3" style="max-width: 50rem;">
             <div class="row">
               <div class="col-2">
                 <img class="card-img-top" src="<?= base_url('assets/images/person_2.jpg'); ?>" alt="Card image cap" style="width: 125px;">
               </div>
               <div class="col-10">
                 <div class="card-body">
                   <div class="row">
                     <div class="col-10">
                       <div class="text mt-3">
                         <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 3 : Magang kampus merdeka</a></h3>
                         <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                       </div>
                     </div>
                     <div class="col-2">
                       <i class='bx bxs-heart fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                       <i class='bx bx-play-circle fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="card border-0 mt-3" style="max-width: 50rem;">
             <div class="row">
               <div class="col-2">
                 <img class="card-img-top" src="<?= base_url('assets/images/person_3.jpg'); ?>" alt="Card image cap" style="width: 125px;">
               </div>
               <div class="col-10">
                 <div class="card-body">
                   <div class="row">
                     <div class="col-10">
                       <div class="text mt-3">
                         <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 2 : Get ready for AMICTA</a></h3>
                         <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                       </div>
                     </div>
                     <div class="col-2">
                       <i class='bx bxs-heart fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                       <i class='bx bx-play-circle fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="card border-0 mt-3" style="max-width: 50rem;">
             <div class="row">
               <div class="col-2">
                 <img class="card-img-top" src="<?= base_url('assets/images/person_2.jpg'); ?>" alt="Card image cap" style="width: 125px;">
               </div>
               <div class="col-10">
                 <div class="card-body">
                   <div class="row">
                     <div class="col-10">
                       <div class="text mt-3">
                         <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 3 : Magang kampus merdeka</a></h3>
                         <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                       </div>
                     </div>
                     <div class="col-2">
                       <i class='bx bxs-heart fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                       <i class='bx bx-play-circle fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="card border-0 mt-3" style="max-width: 50rem;">
             <div class="row">
               <div class="col-2">
                 <img class="card-img-top" src="<?= base_url('assets/images/person_3.jpg'); ?>" alt="Card image cap" style="width: 125px;">
               </div>
               <div class="col-10">
                 <div class="card-body">
                   <div class="row">
                     <div class="col-10">
                       <div class="text mt-3">
                         <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 2 : Get ready for AMICTA</a></h3>
                         <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                       </div>
                     </div>
                     <div class="col-2">
                       <i class='bx bxs-heart fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                       <i class='bx bx-play-circle fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="card border-0 mt-3" style="max-width: 50rem;">
             <div class="row">
               <div class="col-2">
                 <img class="card-img-top" src="<?= base_url('assets/images/person_1.jpg'); ?>" alt="Card image cap" style="width: 125px;">
               </div>
               <div class="col-10">
                 <div class="card-body">
                   <div class="row">
                     <div class="col-10">
                       <div class="text mt-3">
                         <h3 class="fs-4 font-weight-light"><a href="#" style='color:#7e3b89'>Episode 01: Lulus tanpa skripsi</a></h3>
                         <div class="text-secondary mb-3"><span class="text-black-opacity-05"><small>By Ferdinando <span class="sep">/</span> 16 September 2022 <span class="sep">/</span> 1:30:20</small></span></div>
                       </div>
                     </div>
                     <div class="col-2">
                       <i class='bx bxs-heart fa-2x' style='color:#7e3b89; margin-top: 32px;'></i>
                       <i class='bx bx-play-circle fa-2x mt-4' style='color:#7e3b89; margin-top: 32px;'></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <!-- Playlist Card End  -->
       <?php } ?>
     </div>
   </div>
   <!-- Content End -->
 </div>