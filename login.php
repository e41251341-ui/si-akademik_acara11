
<?php
session_start();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Username dan password wajib diisi!';
    } elseif ($username === 'admin' && $password === '12345') {
        $_SESSION['username'] = $username;
        $success = 'Login berhasil! Selamat datang, ' . htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
    } else {
        $error = 'Username atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - SI Akademik</title>
</head>
<body>
    <h1>Login Sistem Informasi Akademik</h1>

    <?php if ($error): ?>
        <p style="color:red;">
            <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
        </p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p style="color:green;">
            <?php echo $success; ?>
        </p>
    <?php else: ?>
        <form method="POST" action="login.php">
            <label>Username:</label><br>
            <input type="text" name="username" required>
            <br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required>
            <br><br>

            <button type="submit">Login</button>
        </form>
    <?php endif; ?>

    <p><a href="index.php">Kembali ke halaman utama</a></p>
</body>
</html>
