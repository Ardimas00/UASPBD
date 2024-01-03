<!-- C:\xampp\htdocs\UASPBD\application\views\task\edit_tugas.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Tugas</h1>
        <form action="<?= site_url('task/update/' . $task->task_id); ?>" method="post">
            <div class="mb-3">
                <label for="inputTask" class="form-label">Tugas</label>
                <input type="text" class="form-control" name="task_name" id="inputTask" value="<?= $task->task_name; ?>" required>
            </div>
            <div class="mb-3">
                <label for="inputDescription" class="form-label">Keterangan</label>
                <textarea class="form-control" name="task_description" id="inputDescription" rows="3" required><?= $task->description; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="inputTime" class="form-label">Waktu</label>
                <input type="datetime-local" class="form-control" name="task_due_time" id="inputTime" value="<?= $task->due_time; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Simpan Perubahan</button>
        </form>
        <a href="<?= site_url('task/daftar_tugas'); ?>" class="btn btn-secondary mt-3">Batal</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
