<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<body>

<div class="container mt-5">

    <a href="/produksi/create" class="btn btn-primary mb-3">
        Tambah Produksi
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Kode Batch</th>
            <th>Nama Petani</th>
            <th>Tingkat Sangrai</th>
            <th>Tanggal Produksi</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>

        <?php foreach($produksi as $row): ?>

        <tr>

            <td><?= $no++ ?></td>
            <td><?= $row['kode_batch'] ?></td>
            <td><?= $row['nama_petani'] ?></td>
            <td><?= $row['tingkat_sangrai'] ?></td>
            <td><?= $row['tanggal_produksi'] ?></td>

            <td>

                <a href="/produksi/delete/<?= $row['id'] ?>" class="btn btn-danger btn-sm">
                    Hapus
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </table>

</div>

</body>
<?= $this->endSection() ?>