<?php
require '../config/db.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../crud/index.php");
    exit;
}

$id = $_GET['id'];



// Hapus data dari database
$stmt = $pdo->prepare("DELETE FROM files WHERE id = ?");
$stmt->execute([$id]);



if ($fileName && file_exists($filePath)) {
    unlink($filePath);
}

header("Location: index.php");
exit;
?>
