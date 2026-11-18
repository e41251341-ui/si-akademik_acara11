<?php
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SI Akademik</title>
</head>
<body>
    <h1>Sistem Informasi Akademik - HALAMAN UTAMA</h1>

    <h2>Form Pencarian (GET)</h2>
    <form method="GET" action="index.php">
        <label for="keyword">Kata kunci:</label>
        <input type="text" id="keyword" name="keyword" placeholder="Cari mahasiswa">
        <button type="submit">Cari</button>
    </form>

    <?php
    if (isset($_GET['keyword'])) {
        $keyword = htmlspecialchars($_GET['keyword'], ENT_QUOTES, 'UTF-8');
        echo "<p>Kata kunci pencarian: " . $keyword . "</p>";
    }
    ?>

    <hr>

    <h2>Form Login Sederhana (POST)</h2>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>

    <hr>

    <h2>Tugas Mandiri: Deteksi Method Request</h2>
    <p>Method request halaman ini:
        <strong><?php echo htmlspecialchars($requestMethod, ENT_QUOTES, 'UTF-8'); ?></strong>
    </p>
    <p>
        <?php
        if ($requestMethod === 'GET') {
            echo "Request menggunakan method GET.";
        } elseif ($requestMethod === 'POST') {
            echo "Request menggunakan method POST.";
        } else {
            echo "Request menggunakan method lain.";
        }
        ?>
    </p>

    <p><a href="request.php">Buka halaman uji GET/POST</a></p>
</body>
</html>
