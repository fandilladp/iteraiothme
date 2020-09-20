 <!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>IoTHME</title>
     <link rel="shortcut icon" type="image/png" href="<?= base_url('/favicon.ico'); ?>" />

     <!-- Bootstrap Core CSS -->
     <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="<?= base_url('assets') ?>/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
     <link href="<?= base_url('assets') ?>/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
     <link href="<?= base_url('assets') ?>/css/stylish-portfolio.css" rel="stylesheet">
     <link href="<?= base_url('assets') ?>/css/lampu.css" rel="stylesheet">
     <link href="<?= base_url('assets') ?>/css/created.css" rel="stylesheet">
     <link href="<?= base_url('assets') ?>/css/sb-admin-2.css" rel="stylesheet">
     <link href="<?= base_url('assets') ?>/css/jquery.simple-bar-graph.min.css" rel="stylesheet">

 </head>



 <?php

    $namaprojek = [
        'name' => 'namaprojek',
        'id' => 'namaprojek',
        'value' => null,
        'class' => 'form-control',
    ];

    $deskripsi = [
        'name' => 'deskripsi',
        'id' => 'deskripsi',
        'type' => 'textarea',
        'value' => null,
        'class' => 'form-control',
    ];

    $gambar = [
        'name' => 'gambar',
        'id' => 'gambar',
        'value' => null,
        'class' => 'form-control',
    ];

    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Create',
        'class' => 'btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2',
        'type' => 'submit',
    ];
    $session = session();
    $errors = $session->getFlashdata('errors');
    ?>
 <?= $this->include('layout/navbar'); ?>
 <div class="container-fluid">
     <div class="row no-gutter">
         <td>
             <div class="smartphone ">
                 <div class="content photocromik ">
                     <div class="container">
                         <section class="py-5">
                             <div class="container">
                                 <div class="container text-cenphotocromik ter mb-5">
                                     <h2 class="mb-4 text-center" id="viewNamaProjek"></h2>
                                 </div>
                                 <div class="container">
                                     <div id="example-one">Loading...</div>
                                 </div>
                         </section>
                     </div>
                 </div>
             </div>
         </td>
         <div class="col-md-4 col-lg-6 bg-light">
             <div class="login d-flex align-items-center py-2">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-9 col-lg-8 mx-auto">

                             <h3 class="login-heading mb-4">Create Project Komunikasi dengan Mikrokontroler</h3>
                             <?php if ($errors != null) : ?>
                                 <div class="alert alert-danger" role="alert">
                                     <h6 class="alert-heading">Terjadi Kesalahan</h6>
                                     <hr>
                                     <p class="mb-0">
                                         <?php
                                            foreach ($errors as $err) {
                                                echo $err . '<br>';
                                            }
                                            ?>
                                     </p>
                                 </div>
                             <?php endif ?>
                             <?= form_open_multipart('grafikMonitoring/update'); ?>
                             <div class="form-group">
                                 <?= form_label("Nama Project", "namaprojek") ?>
                                 <div class="input-group-append">
                                     <?= form_input($namaprojek) ?>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <?= form_label("Deskripsi", "deskripsi") ?>
                                 <?= form_input($deskripsi) ?>
                             </div>
                             <div class="form-group">
                                 <?= form_label("Thumbnail", "gambar") ?>
                                 <?= form_upload($gambar) ?>
                             </div>

                             <div class="text-right">
                                 <?= form_submit($submit) ?>
                             </div>
                             <?= form_close() ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
     <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Plugin JavaScript -->
     <script src="<?= base_url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

     <!-- Custom scripts for this template -->

     <script src="<?= base_url('assets') ?>/js/jquery.simple-bar-graph.min.js"></script>
     <script>
         let randomData = function() {
             return [{
                     key: 'sensor 1',
                     value: Math.floor(100 * Math.random() + 20)
                 },
                 {
                     key: 'sensor 2',
                     value: Math.floor(100 * Math.random() + 20)
                 },
                 {
                     key: 'sensor 3',
                     value: Math.floor(100 * Math.random() + 20)
                 }
             ]
         }
         setInterval(() => {
             $("#example-one").simpleBarGraph({
                 data: randomData(),
                 height: "300px",
                 delay: 1000,
                 barsColor: "#3D9970"
             })
         }, 3000);

         $('#example-one').simpleBarGraph({
             data: [{
                     key: 'sensor 1',
                     value: 0
                 },
                 {
                     key: 'sensor 2',
                     value: 0
                 },
                 {
                     key: 'sensor 3',
                     value: 0
                 }
             ],
             height: "400px",
             delay: 10,
             barsColor: "#3D9970"
         });
     </script>
     </body>

 </html>