<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Tugas</h1>
        <?php foreach ($tasks as $task): ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $task->task_name; ?></h5>
                    <p class="card-text"><?= $task->description; ?></p>
                    <small class="text-muted">Tanggal selesai: <?= $task->due_time; ?></small>
                    <a href="<?= site_url('task/edit_tugas/' . $task->task_id); ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?= site_url('task/delete/' . $task->task_id); ?>" class="btn btn-danger btn-sm">Hapus</a>
                    <a href="<?= site_url('task/complete/' . $task->task_id); ?>" class="btn btn-success btn-sm">Selesai</a>
                </div>
            </div>
        <?php endforeach; ?>
        <a href="<?= site_url('task/index'); ?>" class="btn btn-secondary mt-3">Kembali</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
