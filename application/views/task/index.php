<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Manajemen Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-3">Aplikasi Manajemen Tugas</h1>
        <form action="<?= site_url('task/add'); ?>" method="post">
        <div class="mb-3">
            <label for="inputTask" class="form-label">Tugas Baru</label>
            <input type="text" class="form-control" name="task_name" id="inputTask" placeholder="Masukkan tugas baru" required>
            <div id="nameAvailability" class="form-text"></div>
        </div>
            <div class="mb-3">
                <label for="inputDescription" class="form-label">Keterangan</label>
                <textarea class="form-control" name="task_description" id="inputDescription" rows="3" placeholder="Masukkan keterangan tugas" required></textarea>
            </div>
            <div class="mb-3">
                <label for="inputDueTime" class="form-label">Waktu Penyelesaian</label>
                <input type="datetime-local" class="form-control" name="task_due_time" id="inputDueTime" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Tambah Tugas</button>
        </form>
        <a href="<?= site_url('task/daftar_tugas'); ?>" class="btn btn-primary mb-3">Lihat Daftar Tugas</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
