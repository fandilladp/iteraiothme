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

    <link href="<?= base_url('assets') ?>css/blog-post.css" rel="stylesheet">



</head>

<?= $this->section('isicontent'); ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?= $this->include('user/sidebar'); ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?= $this->include('user/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="my-4">My Project</h1>
                    <?php foreach ($myprojek as $projek) : ?>
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#">
                                    <img class="img-fluid rounded mb-3 mb-md-0 mx-auto my-auto" width="300px" height="200px" alt="gambar" src="<?= base_url('uploads/' . $projek->gambar) ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <?php if ($projek->role == 'manual') : ?>
                                    <h3><?= $projek->namaprojek; ?></h3>
                                    <p><?= $projek->deskripsi ?></p>
                                    <strong> API Write : <input type="text" value="<?= base_url("api/index/" . $projek->token); ?>"></strong>
                                    <br>
                                    <strong> API Read : <input type="text" value="<?= base_url("api/read/" . $projek->token); ?>"></strong>
                                    <hr>
                                    <small>category : <strong><?= $projek->category ?></strong></small>
                                    <br>
                                    <small>created : <?= $projek->created_date ?></small>
                                    <hr>
                                    <a class="btn btn-success" href="<?= site_url($projek->role . '/update/' . $projek->id) ?>">Edit Project</a>
                                    <a class="btn btn-danger" href="" data-toggle="modal" data-whatever="<?= site_url($projek->role . '/delete/' . $projek->id) ?>" data-target="#deleteModal">Delete Project</a>
                                <?php else :  ?>
                                    <h3><?= $projek->namaprojek; ?></h3>
                                    <p><?= $projek->deskripsi ?></p>
                                    <?php if ($projek->category == 'monitoring') : ?>
                                        <strong> API : <input type="text" value="<?= base_url("api/index/" . $projek->token); ?>"></strong>
                                    <?php else : ?>
                                        <strong> API : <input type="text" value="<?= base_url("api/read/" . $projek->token); ?>"></strong>
                                    <?php endif; ?>
                                    <hr>
                                    <small>category : <strong><?= $projek->category ?></strong></small>
                                    <br>
                                    <small>created : <?= $projek->created_date ?></small>
                                    <hr>
                                    <a class="btn btn-primary" href="<?= site_url($projek->role . '/projek/' . $projek->id) ?>">View Project</a>
                                    <a class="btn btn-success" href="<?= site_url($projek->role . '/update/' . $projek->id) ?>">Edit Project</a>
                                    <a class="btn btn-danger" href="" data-toggle="modal" data-whatever="<?= site_url($projek->role . '/delete/' . $projek->id) ?>" data-target="#deleteModal">Delete Project</a>
                                <?php endif;  ?>
                            </div>
                        </div>
                        <!-- /.row -->
                        <hr>

                    <?php endforeach ?>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Delete" below if you are ready to delete project.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a id="delete" class="btn btn-danger" href="">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
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

        <script>
            $('#deleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('#delete').attr('href', recipient)

            })
        </script>
</body>

</html>