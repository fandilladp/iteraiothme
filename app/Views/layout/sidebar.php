<?php
$session = session();
?>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#about">About</a>
        </li>
        <?php if ($session->get('isLoggedIn')) : ?>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="<?= base_url('user/index'); ?>">My Account</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </li>
        <?php else : ?>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="<?= base_url('auth/login'); ?>">Login</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="<?= base_url('auth/register'); ?>">Register</a>
            </li>
        <?php endif ?>
    </ul>
</nav>