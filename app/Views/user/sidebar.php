<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <div class="mt-5 sidebar-heading">
        Menu
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home/index') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Home</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="dokumentasi/index">
            <i class="fas fa-fw fa-table"></i>
            <span>Dokumentasi</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Create Project</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Create new Project IoT</h6>
                <a class="collapse-item" href="<?= base_url('lampu/index'); ?>">Light Control</a>
                <a class="collapse-item" href="<?= base_url('monitoring/index'); ?>">Monitoring Sensor</a>
                <a class="collapse-item" href="#">Advanced</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->