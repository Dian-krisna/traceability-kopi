<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- WELCOME -->
    <div class="card shadow mb-4 border-left-primary">

        <div class="card-body">

            <h4>
                Anda masuk sebagai
                <?= session()->get('username') ?> 
            </h4>

            <p class="mb-0">
                Sistem Traceability Produk Kopi
                membantu pelacakan produk mulai
                dari petani hingga pelanggan.
            </p>

        </div>

    </div>


    <!-- CARD STATISTIK -->
    <div class="row">

        <!-- BAHAN BAKU -->
        <div class="col-xl-4 col-md-6 mb-4">

            <div class="card shadow-lg py-4 border-left-primary">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Bahan Baku
                            </div>

                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                <?= $total_bahan ?>
                            </div>

                        </div>

                        <i class="fas fa-seedling fa-2x text-success"></i>

                    </div>

                </div>

            </div>

        </div>


        <!-- PRODUKSI -->
        <div class="col-xl-4 col-md-6 mb-4">

            <div class="card shadow-lg py-4 border-left-success">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Produksi
                            </div>

                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                <?= $total_produksi ?>
                            </div>

                        </div>

                        <i class="fas fa-industry fa-2x text-success"></i>

                    </div>

                </div>

            </div>

        </div>


        <!-- DISTRIBUSI -->
        <div class="col-xl-4 col-md-6 mb-4">

            <div class="card shadow-lg py-4 border-left-info">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Distribusi
                            </div>

                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                <?= $total_distribusi ?>
                            </div>

                        </div>

                        <i class="fas fa-truck fa-2x text-info"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- INFORMASI SISTEM -->
    <div class="card shadow mb-4">

        <div class="card-header">

            Informasi Sistem

        </div>

        <div class="card-body">

            Sistem ini digunakan untuk melacak
            proses kopi mulai dari petani,
            roasting, hingga distribusi ke pelanggan
            menggunakan QR Code.

        </div>

    </div>

</div>

<?= $this->endSection() ?>