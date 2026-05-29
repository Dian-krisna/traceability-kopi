<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h3>Tambah Produksi</h3>

            <form action="/produksi/store" method="post">

                <select name="bahan_baku_id" class="form-control mb-3">

                    <option>Pilih Batch</option>

                    <?php foreach($bahan as $row): ?>

                    <option value="<?= $row['id'] ?>">

                        <?= $row['kode_batch'] ?> - <?= $row['nama_petani'] ?>

                    </option>

                    <?php endforeach; ?>

                </select>

                <input type="text" name="tingkat_sangrai" class="form-control mb-3" placeholder="Tingkat Sangrai">

                <input type="date" name="tanggal_produksi" class="form-control mb-3">

                <button class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

</body>
<?= $this->endSection() ?>