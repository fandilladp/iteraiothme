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

     <!-- Custom CSS -->
     <link href="<?= base_url('assets') ?>/css/stylish-portfolio.css" rel="stylesheet">
     <link href="<?= base_url('assets') ?>/css/lampu.css" rel="stylesheet">
     <link href="<?= base_url('assets') ?>/css/created.css" rel="stylesheet">
     <link href="<?= base_url('assets') ?>/css/sb-admin-2.css" rel="stylesheet">


 </head>

 <?= $this->include('layout/navbar'); ?>
 <?php

    $namaprojek = [
        'name' => 'namaprojek',
        'id' => 'namaprojek',
        'value' => $projek->namaprojek,
        'class' => 'form-control',
    ];

    $deskripsi = [
        'name' => 'deskripsi',
        'id' => 'deskripsi',
        'type' => 'textarea',
        'value' => $projek->deskripsi,
        'class' => 'form-control',
    ];

    $statusfield1 = [
        'name' => 'statusfield1',
        'id' => 'statusfield1',
        'class' => 'custom-control-input form-control',
        'type' => 'checkbox',
        'value' => $projek->statusfield1
    ];

    $statusfield2 = [
        'name' => 'statusfield2',
        'id' => 'statusfield2',
        'class' => 'custom-control-input form-control',
        'type' => 'checkbox',
        'value' => $projek->statusfield2
    ];

    $statusfield3 = [
        'name' => 'statusfield3',
        'id' => 'statusfield3',
        'class' => 'custom-control-input form-control',
        'type' => 'checkbox',
        'value' => $projek->statusfield3
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

                                 <div class="row pricing viewPricing"></div>
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
                             <h3 class="login-heading mb-4">Welcome back!</h3>
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
                             <?= form_open_multipart('manual/update/' . $projek->id); ?>
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
                                 <div class="custom-control custom-switch">
                                     <?= form_input($statusfield1) ?>
                                     <label class="custom-control-label" for="statusfield1">Field 1</label>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="custom-control custom-switch">
                                     <?= form_input($statusfield2) ?>
                                     <label class="custom-control-label" for="statusfield2">Field 2</label>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="custom-control custom-switch">
                                     <?= form_input($statusfield3) ?>
                                     <label class="custom-control-label" for="statusfield3">Field 3</label>
                                 </div>
                             </div>
                             <img class="img-fluid" alt="image" src="<?= base_url('uploads/' . $projek->gambar) ?>" />
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
     <script src="<?= base_url('assets') ?>/js/stylish-portfolio.min.js"></script>
     <script src="<?= base_url('assets') ?>/js/coming-soon.min.js"></script>
     <script src="<?= base_url('assets') ?>/js/sb-admin-2.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.min.js"></script>
     <script type="text/javascript">
         $("#namaprojek").on("keyup", function() {
             let namaProjek = $("#namaprojek").val();
             $("#viewNamaProjek").html(namaProjek);
         });


         setTimeout(() => {
             let namaProjek = $("#namaprojek").val();
             $("#viewNamaProjek").html(namaProjek);
             let value1 = $("#statusfield1").val();
             if (value1 == 'on') {
                 $("#statusfield1").attr('checked', "checked");
             }
             let value2 = $("#statusfield2").val();
             if (value2 == 'on') {
                 $("#statusfield2").attr('checked', "checked");
             }
             let value3 = $("#statusfield3").val();
             if (value3 == 'on') {
                 $("#statusfield3").attr('checked', "checked");
             }
         }, 1000);




         $("#statusfield1").on('click', function() {
             let value = $("#statusfield1").val();
             if (value !== 'on') {
                 $("#statusfield1").attr('value', 'on');
             } else {
                 let value = $("#statusfield1").val();
                 if (value == 'on') {
                     $("#statusfield1").attr('value', 'off');
                 }
             }
         });

         $("#statusfield2").on('click', function() {
             let value = $("#statusfield2").val();
             if (value !== 'on') {
                 $("#statusfield2").attr('value', 'on');
             } else {
                 let value = $("#statusfield2").val();
                 if (value == 'on') {
                     $("#statusfield2").attr('value', 'off');
                 }
             }
         });

         $("#statusfield3").on('click', function() {
             let value = $("#statusfield3").val();
             if (value !== 'on') {
                 $("#statusfield3").attr('value', 'on');
             } else {
                 let value = $("#statusfield3").val();
                 if (value == 'on') {
                     $("#statusfield3").attr('value', 'off');
                 }
             }
         });
     </script>
     </body>

 </html>