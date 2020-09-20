<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<body>
    <!-- Call to Action -->
    <div class="container">
        <section class="py-5">
            <div class="container">
                <div class="container text-center mb-5">
                    <h2 class="mb-4 text-uppercase"><?= $projek->namaprojek ?></h2>
                </div>
                <div class="row pricing" id="mycoba">
                    <!-- Free Tier -->
                    <?php if ($projek->statusfield1 == 'on') : ?>
                        <div class="col-lg-4 mb-5">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body">
                                    <div id="gauge" class="200x160px"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($projek->statusfield2 == 'on') : ?>
                        <div class="col-lg-4 mb-5">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body">
                                    <div id="gauge2" class="200x160px"></div>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>
                    <?php if ($projek->statusfield3 == 'on') : ?>
                        <div class="col-lg-4 mb-5">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body">
                                    <div id="gauge3" class="200x160px"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
    <!-- Plus Tier -->
    <!-- Footer -->
    <footer class=" footer text-center">
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
    <script src="<?= base_url('assets') ?>/js/stylish-portfolio.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/coming-soon.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.min.js"></script>
    <script type="text/javascript">
        // let data;
        // async function f() {

        //     let promise = new Promise((resolve, reject) => {

        //         let url = "";

        //         $.ajax({
        //             url: url,
        //             async: false,
        //             dataType: 'json',
        //             success: function(data) {
        //                 datasensor = data;
        //                 $("#gauge").attr("data", datasensor.datasensor_1);
        //             }
        //         });
        //     });
        //     data = $("#gauge").attr('data');
        // }
        // f();

        // setInterval(f, 1000);
        // console.log(data);



        $(document).ready(function() {
            var s1 = new JustGage({
                id: "gauge", // the id of the html element
                value: 0,
                min: 0,
                max: 100,
                relativeGaugeSize: true,
                label: 'Sensor 1',
                gaugeWidthScale: 0.6
            });

            var s2 = new JustGage({
                id: "gauge2", // the id of the html element
                value: 0,
                min: 0,
                max: 100,
                relativeGaugeSize: true,
                label: 'Sensor 2',
                gaugeWidthScale: 0.6
            });


            var s3 = new JustGage({
                id: "gauge3", // the id of the html element
                value: 0,
                min: 0,
                max: 100,
                relativeGaugeSize: true,
                label: 'Sensor 3',
                gaugeWidthScale: 0.6
            });

            // update the value randomly
            setInterval(() => {
                let url = "<?= base_url('api/fetch/' . $projek->id); ?>";
                $.ajax({
                    url: url,
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        datasensor1 = data.datafield_1;
                        datasensor2 = data.datafield_2;
                        datasensor3 = data.datafield_3;
                    }
                });
                s1.refresh(datasensor1);
                s2.refresh(datasensor2);
                s3.refresh(datasensor3);
            }, 1000);
        });



        // var $ele = $("#myValues"); // cache the reference
        // $ele.myfunc({
        // divFact: 10,
        // eventListenerType: 'keyup'
        // }); // initialize plug
        // $ele.val(datasensor).keyup();
    </script>
</body>

</html>