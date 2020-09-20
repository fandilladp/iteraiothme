 <!DOCTYPE html>
 <html lang="en">

 <head>
<script data-ad-client="ca-pub-4635580332563368" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>IoTHME</title>
     <link rel="shortcut icon" type="image/png" href="<?= base_url('/favicon.ico'); ?>" />
     <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?= base_url('assets') ?>/css/stylish-portfolio.css" rel="stylesheet">
     <!-- Custom Fonts -->
     <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="<?= base_url('assets') ?>/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
     <link href="<?= base_url('assets') ?>/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

     <script src="<?= base_url('assets') ?>/home/js/jquery.js" type="text/javascript"></script>
     <script src="<?= base_url('assets') ?>/home/js/jquery.nicescroll.min.js" type="text/javascript"></script>
     <script src="<?= base_url('assets') ?>/home/js/parallaxImg.js" type="text/javascript"></script>
     <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/home/css/demotheme.css">
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
     <script type="text/javascript">
         $(document).on("ready", function() {
             var parallaxSettings = {
                 initialOpacity: 1, //from 0 to 1, e.g. 0.34 is a valid value. 0 = transparent, 1 = Opaque
                 opacitySpeed: 0.1, //values from 0.01 to 1 -> 0.01: slowly appears on screen; 1: appears as soon as the user scrolls 1px
                 pageLoader: true
             };

             parallaxImgScroll(parallaxSettings);
         });
     </script>

 </head>

 <?php
    $session = session();
    ?>

 <body>
     <header>
         <?= $this->include('layout/navbar'); ?>
     </header>
     <section>
         <article class="parallax-img-container">
             <h1>ITERA IoT HME</h1>
             <h3>It's Free you can make an Internet of Think project here</h3>

             <!-- images for parallax -->
             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-04.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="1" data-ps-vertical-position="-20" data-ps-horizontal-position="30" />

             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-02.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="0.6" data-ps-vertical-position="-50" data-ps-horizontal-position="30" />


             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-01.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="1" data-ps-vertical-position="-100" data-ps-horizontal-position="0" />
             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-01.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="0.3" data-ps-vertical-position="-310" data-ps-horizontal-position="0" />

             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-01.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="0.2" data-ps-vertical-position="-250" data-ps-horizontal-position="0" />

             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-01.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="0.5" data-ps-vertical-position="-400" data-ps-horizontal-position="30" />

             <img src="<?= base_url('assets') ?>/home/img/assassins/ironman.png" class="parallax-move" data-ps-z-index="3" data-ps-speed="1.5" data-ps-vertical-position="-200" data-ps-horizontal-position="0" />


         </article>
     </section>
     <section>
         <article class="parallax-img-container">
             <h2>Internet OF Things</h2>
             <img id="parallax-img-7" class="parallax-move" src="<?= base_url('assets') ?>/home/img/square.png" />
             <img id="parallax-img-7" class="parallax-move" src="<?= base_url('assets') ?>/home/img/circle.png" />
             <img id="parallax-img-5" class="parallax-move" src="<?= base_url('assets') ?>/home/img/ex.png" />
             <img id="parallax-img-1" class="parallax-move" src="<?= base_url('assets') ?>/home/img/triangle.png" />
             <img id="parallax-img-4" class="parallax-move" src="<?= base_url('assets') ?>/home/img/square.png" />
             <img id="parallax-img-3" class="parallax-move" data-ps-vertical-position="200" data-ps-horizontal-position="500" src="<?= base_url('assets') ?>/home/img/circle.png" />
         </article>
     </section>
     <section class="content-section" id="portfolio">
         <div class="container">
             <div class="content-section-heading text-center">
                 <h2 class="mb-5">Recent Projects</h2>
             </div>
             <div class="row no-gutters">
                 <div class="col-lg-4 m-auto p-1">
                     <a class="portfolio-item" href="<?= base_url('manual/index') ?>">
                         <div class="caption">
                             <div class="caption-content">
                                 <div class="h2">Default Projek</div>
                                 <p class="mb-0">simple projek, your create field input and output on server</p>
                             </div>
                         </div>
                         <img class="img-fluid" width="auto" height="auto" src="<?= base_url('assets') ?>/img/lampp.jpg" alt="">
                     </a>
                 </div>
                 <div class="col-lg-4 m-auto p-1">
                     <a class="portfolio-item" href="<?= base_url('lampu/index') ?>">
                         <div class="caption">
                             <div class="caption-content">
                                 <div class="h2">Light Control</div>
                                 <p class="mb-0">start with a simple project controlling the lights remotely</p>
                             </div>
                         </div>
                         <img class="img-fluid" src="<?= base_url('assets') ?>/img/lampp.jpg" alt="">
                     </a>
                 </div>
                 <div class="col-lg-4 m-auto p-1">
                     <a class="portfolio-item" href="<?= base_url('gauge/index') ?>">
                         <div class="caption">
                             <div class="caption-content">
                                 <div class="h2">Gauge</div>
                                 <p class="mb-0">receive data with a microcontroller</p>
                             </div>
                         </div>
                         <img class="img-fluid" src="<?= base_url('assets') ?>/img/iso-republic-heat-sink-capacitors.jpg" alt="">
                     </a>
                 </div>
                 <div class="col-lg-4 m-auto p-1">
                     <a class="portfolio-item" href="<?= base_url('grafik/index') ?>">
                         <div class="caption">
                             <div class="caption-content">
                                 <div class="h2">Grafik</div>
                                 <p class="mb-0">Monitoring sensor output grafik</p>
                             </div>
                         </div>
                         <img class="img-fluid" width="auto" height="auto" src="<?= base_url('assets') ?>/img/lampp.jpg" alt="">
                     </a>
                 </div>
                 <div class="col-lg-4 m-auto p-1">
                     <a class="portfolio-item" href="<?= base_url('dokumentasi/index') ?>">
                         <div class="caption">
                             <div class="caption-content">
                                 <div class="h2">Dokumentasi</div>
                                 <p class="mb-0">Many examples of IoT projects that you can learn here</p>
                             </div>
                         </div>
                         <img class="img-fluid" src="<?= base_url('assets') ?>/img/guy-book.jpeg" alt="">
                     </a>
                 </div>
                 <div class="col-lg-4 m-auto p-1">
                     <a class="portfolio-item" href="#!">
                         <div class="caption">
                             <div class="caption-content">
                                 <div class="h2">Advanced</div>
                                 <p class="mb-0">Create IoT control as you like</p>
                             </div>
                         </div>
                         <img class="img-fluid" src="<?= base_url('assets') ?>/img/electric-globe.jpeg" alt="">
                     </a>
                 </div>
             </div>
         </div>
     </section>
     </section>
     <!-- Call to Action -->
     <?php if (!$session->get('isLoggedIn')) : ?>
         <section class="content-section bg-dark text-white">
             <div class="container text-center">
                 <h2 class="mb-4">Buat akunmu Sekarang dan mulailah berkarya</h2>
                 <a href="<?= base_url('auth/register') ?>" class="btn btn-xl btn-light mr-4">Sign up</a>
                 <a href="#!" class="btn btn-xl btn-dark">About</a>
             </div>
             <br><br>
         </section>
     <?php endif ?>

     <!-- Footer -->
     <footer class="footer text-center bg-dark">
         <div class="container">
             <p class="text-muted small mb-0">Copyright &copy;IoT HME 2020</p>
         </div>
     </footer>

     <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>