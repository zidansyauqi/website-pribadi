<?php
session_start();
require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$user]);
    $data = $stmt->fetch();

    if ($data && password_verify($pass, $data['password'])) {
        $_SESSION['user'] = $data['username'];
        header("Location: ../dashboard.php");
    } else {
        echo "Login gagal";
    }
}
?>
<link rel="stylesheet" href="../style.css">
<div class="container">
    <h2>Login</h2>
<form method="post">
    <input name="username" placeholder="Username"><br>
    <input name="password" type="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>
</div>
