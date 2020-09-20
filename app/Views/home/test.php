<?= $this->extend('layout/template'); ?>

<?= $this->section('isicontent'); ?>
<?= $this->include('layout/sidebar'); ?>

<?php
$session = session();
?>

<body id="page-top">

    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
        <i class="fas fa-bars"></i>
    </a>

    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1">HME ITERA</h1>
            <h3 class="mb-5">
                <em>It's Free you can make an Internet of Think project here</em>
            </h3>
            <a class="btn btn-outline-primary btn-xl js-scroll-trigger" href="#services">Find Out More</a>
        </div>
        <div class="overlay"></div>
    </header>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container">
            <div class="content-section-heading">
                <h2 class="mb-5">What We Offer</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <i class="icon-screen-smartphone"></i>
                    </span>
                    <h4>
                        <strong>Banyak Template</strong>
                    </h4>
                    <p class="text-faded mb-0">Mempercepat pembuatan projek kamu</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <i class="icon-pencil"></i>
                    </span>
                    <h4>
                        <strong>Gratis</strong>
                    </h4>
                    <p class="text-faded mb-0">Buat projekmu secara gratis</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <i class="icon-mustache"></i>
                    </span>
                    <h4>
                        <strong>Dokumentasi</strong>
                    </h4>
                    <p class="text-faded mb-0">Dokumentasi yang lengkap
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <i class="icon-mustache"></i>
                    </span>
                    <h4>
                        <strong>Magic</strong>
                    </h4>
                    <p class="text-faded mb-0">Tanpa perlu ngoding</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->

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

    <!-- Call to Action -->
    <?php if (!$session->get('isLoggedIn')) : ?>
        <section class="content-section bg-primary text-white">
            <div class="container text-center">
                <h2 class="mb-4">Buat akunmu Sekarang dan mulailah berkarya</h2>
                <a href="<?= base_url('auth/register') ?>" class="btn btn-xl btn-light mr-4">Sign up</a>
                <a href="#!" class="btn btn-xl btn-dark">About</a>
            </div>
        </section>
    <?php endif ?>


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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript -->

    <?= $this->endSection(); ?>