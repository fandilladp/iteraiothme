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


 </head>



 <?php

    $namaprojek = [
        'name'  => 'namaprojek',
        'id'    => 'namaprojek',
        'value' => null,
        'class' => 'form-control',
    ];

    $deskripsi = [
        'name'  => 'deskripsi',
        'id'    => 'deskripsi',
        'type'  => 'textarea',
        'value' => null,
        'class' => 'form-control',
    ];

    $sensor1 = [
        'name'  => 'sensor1',
        'id'    => 'sensor1',
        'class' => 'custom-control-input form-control',
        'type'  => 'checkbox',
        'value' => 'on'
    ];

    $sensor2 = [
        'name'  => 'sensor2',
        'id'    => 'sensor2',
        'class' => 'custom-control-input form-control',
        'type'  => 'checkbox',
        'value' => 'on'
    ];

    $sensor3 = [
        'name'  => 'sensor3',
        'id'    => 'sensor3',
        'class' => 'custom-control-input form-control',
        'type'  => 'checkbox',
        'value' => 'on'
    ];

    $gambar = [
        'name'  => 'gambar',
        'id'    => 'gambar',
        'value' => null,
        'class' => 'form-control',
    ];

    $submit = [
        'name'  => 'submit',
        'id'    => 'submit',
        'value' => 'Create',
        'class' => 'btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2',
        'type'  => 'submit',
    ];
    $session = session();
    $errors = $session->getFlashdata('errors');
    ?>
 <?= $this->include('layout/navbar'); ?>
 <div class="container-fluid">
     <div class="row no-gutter">
         <div class="container col-md-4 col-lg-6 bg-light">
             <div class="login d-flex align-items-center py-2">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-9 col-lg-8 mx-auto">
                             <h3 class="login-heading mb-4">Create Default Project</h3>
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
                             <?= form_open_multipart('manual/created'); ?>
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
                             <div class="form-group">
                                 <div class="custom-control custom-switch">
                                     <?= form_input($sensor1) ?>
                                     <label class="custom-control-label" for="sensor1">Field 1</label>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="custom-control custom-switch">
                                     <?= form_input($sensor2) ?>
                                     <label class="custom-control-label" for="sensor2">Field 2</label>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="custom-control custom-switch">
                                     <?= form_input($sensor3) ?>
                                     <label class="custom-control-label" for="sensor3">Field 3</label>
                                 </div>
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
         <div class="container col-md-4 col-lg-6 bg-light">

         </div>
     </div>


     <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
     <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Plugin JavaScript -->
     <script src="<?= base_url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

     </body>

 </html>