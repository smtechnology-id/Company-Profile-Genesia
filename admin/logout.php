<?php
session_start(); // Memulai sesi

// Menghapus semua variabel sesi
$_SESSION = array();

// Jika ingin menghancurkan sesi juga di sisi server, tidak hanya mengosongkan variabel sesi
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Menghancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain
header("Location: ../login.php"); // Ganti dengan halaman login Anda
exit;
?>