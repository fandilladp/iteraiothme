 <?php
    $session = session();
    ?>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <div class="container">
         <a class="navbar-brand" href="#">ITERAIOTHME</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item active">
                     <a class="nav-link" href="<?= base_url('') ?>">Home
                         <span class="sr-only">(current)</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">About</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('dokumentasi/index') ?>">Documentasion</a>
                 </li>
                 <?php if ($session->get('isLoggedIn')) : ?>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('user/index') ?>">My Account</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
                     </li>
                 <?php else : ?>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/register'); ?>">Register</a>
                     </li>
                 <?php endif ?>
             </ul>
         </div>
     </div>
 </nav>