 <?= $this->extend('layout/templatelampu'); ?>

 <?= $this->section('isicontent'); ?>


 <body>

     <div class="overlay"></div>

     <div class="masthead">

         <div class="masthead-bg"> <?= $this->include('layout/navbar'); ?></div>

         <div class="container h-100">
             <div class="row h-100">
                 <div class="col-12 my-auto">
                     <div class="masthead-content text-white py-5 py-md-0">
                         <h1 class="mb-3">Create Manual</h1>
                         <p class="mb-5"><strong>Open Documentasion exampel projek tutorial</strong></p>
                         <div class="input-group input-group-newsletter">
                             <a href="<?= base_url('dokumentasi/index/manual'); ?>">
                                 <button class="btn btn-success" type="button" id="submit-button">Documentasion......
                                 </button>
                             </a>
                         </div>
                         <div class="input-group input-group-newsletter mt-2 mx-auto">
                             <a href="<?= base_url('manual/created'); ?>">
                                 <button class="btn btn-danger btn-lg" type="button" id="submit-button">Create New Projek
                                 </button>
                             </a>
                         </div>
                         <div class="input-group input-group-newsletter mt-2 mx-auto">
                             <a href="<?= base_url('aboutTemplate/index/manual'); ?>">
                                 <button class="btn btn-info btn-lg" type="button" id="submit-button">About Template.....
                                 </button>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>

     <div class="social-icons">
         <ul class="list-unstyled text-center mb-0">
             <li class="list-unstyled-item">
                 <a href="#">
                     <i class="fab fa-twitter"></i>
                 </a>
             </li>
             <li class="list-unstyled-item">
                 <a href="#">
                     <i class="fab fa-facebook-f"></i>
                 </a>
             </li>
             <li class="list-unstyled-item">
                 <a href="#">
                     <i class="fab fa-instagram"></i>
                 </a>
             </li>
         </ul>
     </div>

     <?= $this->endSection(); ?>