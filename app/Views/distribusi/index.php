<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<body>

<div class="container mt-5">

    <a href="/distribusi/create" class="btn btn-primary mb-3">
        Tambah Distribusi
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Kode Batch</th>
            <th>Nama Toko</th>
            <th>Tanggal Kirim</th>
            <th>QR Code</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>

        <?php foreach($distribusi as $row): ?>

        <tr>

            <td><?= $no++ ?></td>

            <td><?= $row['kode_batch'] ?></td>

            <td><?= $row['nama_toko'] ?></td>

            <td><?= $row['tanggal_kirim'] ?></td>

            <td>

                <img src="<?= base_url('qrcode/' . $row['qr_code']) ?>" width="100">

            </td>

            <td>

                <a href="/distribusi/delete/<?= $row['id'] ?>" class="btn btn-danger btn-sm">
                    Hapus
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </table>

</div>

</body>
<?= $this->endSection() ?>