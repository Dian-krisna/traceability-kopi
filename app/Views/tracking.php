<!DOCTYPE html>
<html>
<head>

    <title>Tracking Produk</title>

    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body>
<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h2 class="mb-4">
                Histori Produk
            </h2>

            <table class="table table-bordered">

                <tr>
                    <th>Kode Batch</th>
                    <td><?= $tracking['kode_batch'] ?></td>
                </tr>

                <tr>
                    <th>Nama Petani</th>
                    <td><?= $tracking['nama_petani'] ?></td>
                </tr>

                <tr>
                    <th>Tanggal Panen</th>
                    <td><?= $tracking['tanggal_panen'] ?></td>
                </tr>

                <tr>
                    <th>Lokasi</th>
                    <td><?= $tracking['lokasi'] ?></td>
                </tr>

                <tr>
                    <th>Tingkat Sangrai</th>
                    <td><?= $tracking['tingkat_sangrai'] ?></td>
                </tr>

                <tr>
                    <th>Tanggal Produksi</th>
                    <td><?= $tracking['tanggal_produksi'] ?></td>
                </tr>

                <tr>
                    <th>Nama Toko</th>
                    <td><?= $tracking['nama_toko'] ?></td>
                </tr>

                <tr>
                    <th>Tanggal Kirim</th>
                    <td><?= $tracking['tanggal_kirim'] ?></td>
                </tr>

            </table>

        </div>

    </div>

</div>

</body>
</html>