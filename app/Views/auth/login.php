<?= $this->extend('layout/template'); ?>

<?= $this->section('isicontent'); ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control form-control-user'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control form-control-user'
];

$session = session();
$errors = $session->getFlashdata('errors');
$message = $session->getFlashdata('message');
?>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?= $message ?>
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
                                    <?= form_open('Auth/login') ?>
                                    <div class="form-group">
                                        <?= form_label("Username", "username") ?>
                                        <?= form_input($username) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label("Password", "password") ?>
                                        <?= form_password($password) ?>
                                    </div>
                                    <div class="text-right">
                                        <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary btn-user btn-block']) ?>
                                    </div>
                                    <?= form_close() ?>
                                    <hr />
                                    <div class="text-center">
                                        <a class="small" href="forgot-password">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>