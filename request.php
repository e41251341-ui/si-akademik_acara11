<?php
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN';

if ($requestMethod === 'GET') {
    $message = 'Request menggunakan method GET.';
} elseif ($requestMethod === 'POST') {
    $message = 'Request menggunakan method POST.';
} else {
    $message = 'Request menggunakan method lain.';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Deteksi Request - SI Akademik</title>
</head>
<body>
    <h1>Tugas Mandiri: Deteksi Method Request</h1>

    <p>Nilai REQUEST_METHOD:
        <strong><?php echo htmlspecialchars($requestMethod, ENT_QUOTES, 'UTF-8'); ?></strong>
    </p>
    <p><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>

    <h2>Uji GET</h2>
    <form method="GET" action="request.php">
        <button type="submit">Uji GET</button>
    </form>

    <h2>Uji POST</h2>
    <form method="POST" action="request.php">
        <button type="submit">Uji POST</button>
    </form>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</body>
</html>
