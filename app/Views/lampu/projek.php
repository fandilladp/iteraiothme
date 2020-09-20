<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IoTHME</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('/hme.png'); ?>" />

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets') ?>/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets') ?>/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets') ?>/css/lampu.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/css/stylish-portfolio.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/css/coming-soon.min.css" rel="stylesheet">

    <?= $this->include('layout/navbar'); ?>

    <!-- Call to Action -->
    <div class="container">
        <section class="py-5">
            <div class="container">
                <div class="container text-center mb-5">
                    <h2 class="mb-4 text-uppercase"><?= $projek->namaprojek ?></h2>
                </div>
                <div class="row pricing">
                    <!-- Free Tier -->
                    <?php if ($projek->statusfield1 == 'on') :  ?>
                        <div class="col-lg-4 mb-5">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body">
                                    <h5 class="card-title text-muted text-uppercase text-center">Lampu 1</h5>
                                    <h6 id="kondisi1" class="card-price text-uppercase text-center">...</h6>
                                    <hr>
                                    <button id="on1" class="btn btn-block btn-outline-success">ON</button>
                                    <button id="off1" class="btn btn-block btn-outline-danger">OFF</button>
                                </div>
                            </div>
                        </div>
                    <?php endif;  ?>
                    <?php if ($projek->statusfield2 == 'on') :  ?>
                        <div class="col-lg-4 mb-5">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body">
                                    <h5 class="card-title text-muted text-uppercase text-center">Lampu 2</h5>
                                    <h6 id="kondisi2" class="card-price text-uppercase text-center">...</h6>
                                    <hr>
                                    <button id="on2" class="btn btn-block btn-outline-success">ON</button>
                                    <button id="off2" class="btn btn-block btn-outline-danger">OFF</button>
                                </div>
                            </div>
                        </div>
                    <?php endif;  ?>
                    <?php if ($projek->statusfield3 == 'on') :  ?>
                        <div class="col-lg-4 mb-5">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body">
                                    <h5 class="card-title text-muted text-uppercase text-center">Lampu 3</h5>
                                    <h6 id="kondisi3" class="card-price text-uppercase text-center">...</h6>
                                    <hr>
                                    <button id="on3" class="btn btn-block btn-outline-success">ON</button>
                                    <button id="off3" class="btn btn-block btn-outline-danger">OFF</button>
                                </div>
                            </div>
                        </div>
                    <?php endif;  ?>


                </div>
            </div>
        </section>
    </div>
    <!-- Plus Tier -->
    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!">
                        <i class="icon-social-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!">
                        <i class="icon-social-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="#!">
                        <i class="icon-social-github"></i>
                    </a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; SmartHME 2020</p>
        </div>
    </footer>

    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script>
        setTimeout(() => {
            $('#kondisi1').html('<?= $projek->datafield_1 ?>');
            $('#kondisi2').html('<?= $projek->datafield_2 ?>');
            $('#kondisi3').html('<?= $projek->datafield_3 ?>');
        }, 1000);
        $("#on1").on('click', function() {
            let url = "<?= base_url('api/index/' . $projek->token); ?>";
            $.ajax({
                url: url,
                async: false,
                dataType: 'json',
                data: 'datafield_1=on',
            });
            $('#kondisi1').html('ON');
        });
        $("#on2").on('click', function() {
            let url = "<?= base_url('api/index/' . $projek->token); ?>";
            $.ajax({
                url: url,
                async: false,
                dataType: 'json',
                data: 'datafield_2=on',
            });
            $('#kondisi2').html('ON');
        });
        $("#on3").on('click', function() {
            let url = "<?= base_url('api/index/' . $projek->token); ?>";
            $.ajax({
                url: url,
                async: false,
                dataType: 'json',
                data: 'datafield_3=on',
            });
            $('#kondisi3').html('ON');
        });



        $("#off1").on('click', function() {
            let url = "<?= base_url('api/index/' . $projek->token); ?>";
            $.ajax({
                url: url,
                async: false,
                dataType: 'json',
                data: 'datafield_1=off',
            });
            $('#kondisi1').html('OFF');
        });

        $("#off2").on('click', function() {
            let url = "<?= base_url('api/index/' . $projek->token); ?>";
            $.ajax({
                url: url,
                async: false,
                dataType: 'json',
                data: 'datafield_2=off',
            });
            $('#kondisi2').html('OFF');
        });

        $("#off3").on('click', function() {
            let url = "<?= base_url('api/index/' . $projek->token); ?>";
            $.ajax({
                url: url,
                async: false,
                dataType: 'json',
                data: 'datafield_3=off',
            });
            $('#kondisi3').html('OFF');
        });
    </script>

    </body>

</html>