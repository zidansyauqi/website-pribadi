<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: pages/dashboard.php");
} else {
    header("Location: auth/login.php");
}
exit;
