<?php

require '../config/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM files WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $stmt = $pdo->prepare("UPDATE files SET nama = ? WHERE id = ?");
    $stmt->execute([$nama, $id]);
    header("Location: index.php");
}
?>
<link rel="stylesheet" href="../style.css">
<div class="container">
    <h2>Login</h2>

<form method="post">
    Nama: <input name="nama" value="<?= $data['nama'] ?>"><br>
    <button type="submit">Simpan</button>
</form>
</div>
