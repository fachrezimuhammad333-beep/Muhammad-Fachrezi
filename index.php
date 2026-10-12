<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mesin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Daftar Mesin Laundry</h1>
        <hr>
        <p>Tugas Modul Mesin &amp; Peralatan</p>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mesin</th>
                    <th>Merek</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
    <?php 
    $no = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM mesin");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['merek']; ?></td>
        <td><?= $row['status']; ?></td>
        <td>
            <!-- Letakkan tombol Lihat Detail di sini di dalam <td> -->
            <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-sm">Lihat Detail</a>
        </td>
    </tr>
    <?php } ?>
</tbody>