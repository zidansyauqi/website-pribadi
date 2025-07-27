<?php

include '../header.php';
require '../config/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nama'];
    $file = $_FILES['file']['name'];
    $tmp  = $_FILES['file']['tmp_name'];
    $dest = "../uploads/" . $file;

    move_uploaded_file($tmp, $dest);

    $stmt = $pdo->prepare("INSERT INTO files (nama, file_path) VALUES (?, ?)");
    $stmt->execute([$name, $file]);

    header("Location: index.php");
}
?>
<link rel="stylesheet" href="../style.css">
<div class="container">
    <h2>Tambah File</h2>

<form method="post" enctype="multipart/form-data">
    Nama File: <input name="nama"><br>
    Pilih File: <input type="file" name="file"><br>
    <button type="submit">Upload</button>
</form>
</div>
