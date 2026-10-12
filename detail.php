<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM mesin WHERE id = $id");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Mesin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <main class="card mx-auto my-5" style="max-width:640px">

        <div class="card-header text-white p-4" style="background:#2f4858">
            <h1 class="h4 mb-1"><?= htmlspecialchars($row['nama']); ?></h1>
            <small>Detail mesin</small>
        </div>

        <dl class="list-group list-group-flush mb-0">
            <div class="list-group-item d-flex">
                <dt class="col-4 text-secondary">Merek</dt>
                <dd class="mb-0"><?= htmlspecialchars($row['merek']); ?></dd>
            </div>
            <div class="list-group-item d-flex">
                <dt class="col-4 text-secondary">Kapasitas</dt>
                <dd class="mb-0"><?= htmlspecialchars($row['kapasitas']); ?></dd>
            </div>
            <div class="list-group-item d-flex">
                <dt class="col-4 text-secondary">Kondisi</dt>
                <dd class="mb-0 text-success">● <?= htmlspecialchars($row['status']); ?></dd>
            </div>
        </dl>

        <div class="card-footer">
            <a href="index.php" class="btn">Kembali ke daftar</a>
        </div>

    </main>
</body>
</html>