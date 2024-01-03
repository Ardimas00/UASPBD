<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Presensi Mahasiswa</title>
    <style>
        .belum-hadir {
            background-color: #dc3545; 
            color: white;
        }

        .hadir {
            background-color: #16FF00; 
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <h2>Presensi Mahasiswa</h2>

        <!-- Tombol untuk Memunculkan Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPresensi">Presensi</button>

        <!-- Modal Presensi -->
        <div class="modal fade" id="modalPresensi" tabindex="-1" aria-labelledby="modalPresensiLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPresensiLabel">Presensi Mahasiswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulir di Dalam Modal -->
                        <form method="post" action="<?php echo base_url('presensi/ubah_status'); ?>">
                            <div class="mb-3 form-group">
                                <label for="nim_ubah" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="nim_ubah" name="nim" placeholder="Masukkan NIM" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Presensi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped mt-3">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($presensi as $key => $row): ?>
                    <tr class="<?php echo ($row->status == 'Belum Hadir') ? 'belum-hadir' : 'hadir'; ?>">
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $row->nim; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><?php echo ($row->status == 'Belum Hadir') ? '' : $row->waktu_presensi; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
