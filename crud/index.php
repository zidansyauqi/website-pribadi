<?php
include '../header.php';
require '../config/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit;
}

$stmt = $pdo->query("SELECT * FROM files");
$files = $stmt->fetchAll();
?>

<a href="create.php">Upload Baru</a><br><br>
<link rel="stylesheet" href="../style.css">
<div class="container">
    <h2>FILE</h2>

<table border="1">
    <tr><th>Nama</th><th>File</th><th>Aksi</th></tr>
    <?php foreach ($files as $f): ?>
    <tr>
        <td><?= $f['nama'] ?></td>
        <td><a href="../uploads/<?= $f['file_path'] ?>" target="_blank">Download</a></td>
        <td>
            <a href="edit.php?id=<?= $f['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $f['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
