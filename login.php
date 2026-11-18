<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$username = $_POST['username'] ?? '';
if (!is_string($username)) {
    $username = '';
}
$username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Login - SI Akademik</title>
</head>
<body>
    <h1>Form Login SI Akademik</h1>
    <p>Request menggunakan method <?php echo htmlspecialchars($_SERVER['REQUEST_METHOD'], ENT_QUOTES, 'UTF-8'); ?>.</p>
    <p>Data login diterima untuk username: <strong><?php echo $username; ?></strong></p>
    <p>Ini hanya simulasi praktikum. Akun belum diverifikasi.</p>
    <p><a href="index.php">Kembali ke halaman utama</a></p>
</body>
</html>
