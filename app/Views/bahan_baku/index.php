<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<body>

<div class="container mt-5">

    <a href="/bahan-baku/create" class="btn btn-primary mb-3">
        Tambah Data
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Kode Batch</th>
            <th>Nama Petani</th>
            <th>Tanggal Panen</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>

        <?php foreach($bahan as $row): ?>

        <tr>

            <td><?= $no++ ?></td>
            <td><?= $row['kode_batch'] ?></td>
            <td><?= $row['nama_petani'] ?></td>
            <td><?= $row['tanggal_panen'] ?></td>
            <td><?= $row['lokasi'] ?></td>

            <td>

                <a href="/bahan-baku/delete/<?= $row['id'] ?>" class="btn btn-danger btn-sm">
                    Hapus
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </table>

</div>

</body>
<?= $this->endSection() ?>