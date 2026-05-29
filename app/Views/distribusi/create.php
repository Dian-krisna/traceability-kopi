<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h3>Tambah Distribusi</h3>

            <form action="/distribusi/store" method="post">

                <select name="produksi_id" class="form-control mb-3">

                    <option>Pilih Produksi</option>

                    <?php foreach($produksi as $row): ?>

                    <option value="<?= $row['id'] ?>">

                        <?= $row['kode_batch'] ?>

                    </option>

                    <?php endforeach; ?>

                </select>

                <input type="text" name="nama_toko" class="form-control mb-3" placeholder="Nama Toko">

                <input type="date" name="tanggal_kirim" class="form-control mb-3">

                <button class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

</body>
<?= $this->endSection() ?>