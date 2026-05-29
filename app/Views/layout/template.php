<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Traceability App</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

<div id="wrapper">

    <!-- SIDEBAR -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">

            <div class="sidebar-brand-text mx-3">
                <?= session()->get('username') ?>
            </div>

        </a>

        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php if(session()->get('role') == 'petani'): ?>

<li class="nav-item">
    <a class="nav-link" href="/bahan-baku">
        <i class="fas fa-fw fa-seedling"></i>
        <span>Bahan Baku</span>
    </a>
</li>

<?php endif; ?>


        <?php if(session()->get('role') == 'roaster'): ?>

<li class="nav-item">
    <a class="nav-link" href="/produksi">
        <i class="fas fa-fw fa-industry"></i>
        <span>Produksi</span>
    </a>
</li>

<?php endif; ?>


        <?php if(session()->get('role') == 'toko'): ?>

<li class="nav-item">
    <a class="nav-link" href="/distribusi">
        <i class="fas fa-fw fa-truck"></i>
        <span>Distribusi</span>
    </a>
</li>

<?php endif; ?>

        <li class="nav-item">
            <a class="nav-link" href="/logout">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>

    <!-- CONTENT -->

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <div class="container-fluid mt-4">

                <?= $this->renderSection('content') ?>

            </div>

        </div>

    </div>

</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

</body>
</html>