<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h3>Tambah Data</h3>

            <form action="/bahan-baku/store" method="post">

                <input type="text" name="kode_batch" class="form-control mb-3" placeholder="Kode Batch">

                <input type="text" name="nama_petani" class="form-control mb-3" placeholder="Nama Petani">

                <input type="date" name="tanggal_panen" class="form-control mb-3">

                <textarea name="lokasi" class="form-control mb-3" placeholder="Lokasi"></textarea>

                <button class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

</body>
<?= $this->endSection() ?>