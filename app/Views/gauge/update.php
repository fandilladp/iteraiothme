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

    $sensor1 = [
        'name' => 'sensor1',
        'id' => 'sensor1',
        'value' => $projek->sensor1,
        'class' => 'custom-control-input form-control',
        'type' => 'checkbox',
    ];

    $sensor2 = [
        'name' => 'sensor2',
        'id' => 'sensor2',
        'value' => $projek->sensor2,
        'class' => 'custom-control-input form-control',
        'type' => 'checkbox',
    ];

    $sensor3 = [
        'name' => 'sensor3',
        'id' => 'sensor3',
        'value' => $projek->sensor3,
        'class' => 'custom-control-input form-control',
        'type' => 'checkbox',
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
        'value' => 'Update',
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
                                 <div class="row pricing" id="mycoba">
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
                             <h3 class="login-heading mb-4">Update Your Project</h3>
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
                             <?= form_open_multipart('gauge/update/' . $projek->id); ?>
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
                             <img class="img-fluid" alt="image" src="<?= base_url('uploads/' . $projek->gambar) ?>" />
                             <div class="form-group">
                                 <?= form_label("Thumbnail", "gambar") ?>
                                 <?= form_upload($gambar) ?>
                             </div>
                             <div class="form-group">
                                 <div class="custom-control custom-switch">
                                     <?= form_input($sensor1) ?>
                                     <label class="custom-control-label" for="sensor1">Sensor 1</label>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="custom-control custom-switch">
                                     <?= form_input($sensor2) ?>
                                     <label class="custom-control-label" for="sensor2">Sensor 2</label>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="custom-control custom-switch">
                                     <?= form_input($sensor3) ?>
                                     <label class="custom-control-label" for="sensor3">Sensor 3</label>
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
         $("#namaprojek").on('keyup', function() {
             let namaProjek = $("#namaprojek").val();
             $("#viewNamaProjek").html(namaProjek);
         });

         ///////////////////////////////////
         setTimeout(() => {
             let namaProjek = $("#namaprojek").val();
             $("#viewNamaProjek").html(namaProjek);
             let value1 = $("#sensor1").val();
             if (value1 == 'on') {
                 $("#sensor1").attr('checked', "checked");
                 $("#mycoba").append('<div id="remove1" class="col-lg-12 mb-5"><div class="card mb-5 mb-lg-0"><div class="card-body"><div id="gauge" class="200x160px"></div></div></div></div>');
                 var gauge = new JustGage({
                     id: "gauge", // the id of the html element
                     value: 10,
                     min: 0,
                     max: 100,
                     relativeGaugeSize: true,
                     label: 'Sensor 1',
                     gaugeWidthScale: 0.6
                 });
                 setInterval(() => {
                     gauge.refresh(Math.random() * 100);
                 }, 2000)
             }
             let value2 = $("#sensor2").val();
             if (value2 == 'on') {
                 $("#sensor2").attr('checked', "checked");
                 $("#mycoba").append('<div id="remove2" class="col-lg-12 mb-5"><div class="card mb-5 mb-lg-0"><div class="card-body"><div id="gauge2" class="200x160px"></div></div></div></div>');
                 var gauge2 = new JustGage({
                     id: "gauge2", // the id of the html element
                     value: 50,
                     min: 0,
                     max: 100,
                     relativeGaugeSize: true,
                     label: 'Sensor 2',
                     gaugeWidthScale: 0.6
                 });
                 setInterval(() => {
                     gauge2.refresh(Math.random() * 100);
                 }, 1000)
             }
             let value3 = $("#sensor3").val();
             if (value3 == 'on') {
                 $("#sensor3").attr('checked', "checked");
                 $("#mycoba").append('<div id="remove3" class="col-lg-12 mb-5"><div class="card mb-5 mb-lg-0"><div class="card-body"><div id="gauge3" class="200x160px"></div></div></div></div>');
                 var gauge3 = new JustGage({
                     id: "gauge3", // the id of the html element
                     value: 90,
                     min: 0,
                     max: 100,
                     relativeGaugeSize: true,
                     label: 'Sensor 3',
                     gaugeWidthScale: 0.6
                 });
                 setInterval(() => {
                     gauge3.refresh(Math.random() * 100);
                 }, 1500)
             }
         }, 1000);



         ///////function click/////

         $("#sensor1").on('click', function() {
             let value = $("#sensor1").val();
             if (value !== 'on') {
                 $("#sensor1").attr('value', 'on');
                 $("#mycoba").append('<div id="remove1" class="col-lg-12 mb-5"><div class="card mb-5 mb-lg-0"><div class="card-body"><div id="gauge" class="200x160px"></div></div></div></div>');
                 var gauge = new JustGage({
                     id: "gauge", // the id of the html element
                     value: 10,
                     min: 0,
                     max: 100,
                     relativeGaugeSize: true,
                     label: 'Sensor 1',
                     gaugeWidthScale: 0.6
                 });
                 setInterval(() => {
                     gauge.refresh(Math.random() * 100);
                 }, 2000)
             } else {
                 let value = $("#sensor1").val();
                 if (value == 'on') {
                     $("#sensor1").attr('value', 'off');
                     $("#sensor1").removeAttr("checked");
                     $("#remove1").remove();
                 }
             }
         });


         $("#sensor2").on('click', function() {
             let value = $("#sensor2").val();
             if (value !== 'on') {
                 $("#sensor2").attr('value', 'on');
                 $("#mycoba").append('<div id="remove2" class="col-lg-12 mb-5"><div class="card mb-5 mb-lg-0"><div class="card-body"><div id="gauge2" class="200x160px"></div></div></div></div>');
                 var gauge2 = new JustGage({
                     id: "gauge2", // the id of the html element
                     value: 50,
                     min: 0,
                     max: 100,
                     relativeGaugeSize: true,
                     label: 'Sensor 2',
                     gaugeWidthScale: 0.6
                 });
                 setInterval(() => {
                     gauge2.refresh(Math.random() * 100);
                 }, 1000)
             } else {
                 let value = $("#sensor2").val();
                 if (value == 'on') {
                     $("#remove2").remove();
                     $("#sensor2").attr('value', 'off');
                 }
             }

         });
         $("#sensor3").on('click', function() {
             let value = $("#sensor3").val();
             if (value !== 'on') {
                 $("#sensor3").attr('value', 'on');
                 $("#mycoba").append('<div id="remove3" class="col-lg-12 mb-5"><div class="card mb-5 mb-lg-0"><div class="card-body"><div id="gauge3" class="200x160px"></div></div></div></div>');
                 var gauge3 = new JustGage({
                     id: "gauge3", // the id of the html element
                     value: 90,
                     min: 0,
                     max: 100,
                     relativeGaugeSize: true,
                     label: 'Sensor 3',
                     gaugeWidthScale: 0.6
                 });
                 setInterval(() => {
                     gauge3.refresh(Math.random() * 100);
                 }, 1500)
             } else {
                 let value = $("#sensor3").val();
                 if (value == 'on') {
                     $("#remove3").remove();
                     $("#sensor3").attr('value', 'off');
                 }
             }
         });
     </script>

     </body>

 </html>