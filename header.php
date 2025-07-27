<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /profile_zidan/auth/login.php");
    exit;
}
?>

<link rel="stylesheet" href="/profile_zidan/style.css">

<div class="navbar">
    <div class="navbar-left">
        <strong>Profil Web</strong>
    </div>
    <div class="navbar-right">
        <a href="/profile_zidan/dashboard.php">Dashboard</a>
        <a href="/profile_zidan/crud/create.php">Upload File</a>
        <a href="/profile_zidan/crud/index.php">Lihat File</a>
        <a href="/profile_zidan/auth/logout.php">Logout</a>
    </div>
</div>
