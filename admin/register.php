<?php
session_start();
include '../config/database.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validasi
    if (empty($username) || empty($password)) {
        $error = 'Username dan password harus diisi!';
    } elseif ($password !== $confirm_password) {
        $error = 'Konfirmasi password tidak sesuai!';
    } elseif (strlen($password) < 8) {
        $error = 'Password minimal 8 karakter!';
    } else {
        // Cek username sudah ada
        $stmt = $pdo->prepare("SELECT id FROM admin_users WHERE username = ?");
        $stmt->execute([$username]);
        
        if ($stmt->rowCount() > 0) {
            $error = 'Username sudah digunakan!';
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Simpan ke database
            $stmt = $pdo->prepare("INSERT INTO admin_users (username, password) VALUES (?, ?)");
            if ($stmt->execute([$username, $hashed_password])) {
                $_SESSION['register_success'] = true;
                header('Location: login.php');
                exit;
            } else {
                $error = 'Gagal membuat akun!';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-[#f9f6f0] text-[#1a1a1a]">
    <main class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="max-w-md w-full bg-white rounded-3xl shadow-lg p-8">
            <div class="text-center mb-8">
                <img alt="Logo Kabupaten Lamongan" class="w-20 h-20 mx-auto" src="../websiteoleh/img/logolamongan.png"/>
                <h1 class="text-2xl font-extrabold text-[#1a1a1a] mt-4">
                    Daftar <span class="text-[#d87a4a]">Akun Baru</span>
                </h1>
                <p class="text-[#4a4a4a] mt-2">Buat akun baru untuk mengakses panel admin</p>
            </div>
            
            <?php 
            if (isset($_SESSION['register_success'])) {
                echo '<p class="text-green-500 text-sm mb-4 text-center">Pendaftaran berhasil! Silakan login.</p>';
                unset($_SESSION['register_success']);
            }
            if (!empty($error)) echo "<p class='text-red-500 text-sm mb-4 text-center'>$error</p>"; 
            ?>
            
            <form method="POST" class="space-y-6">
                <div>
                    <label for="username" class="block text-sm font-medium text-[#1a1a1a] mb-1">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username" required
                        class="w-full px-4 py-3 rounded-xl border border-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#d87a4a] focus:border-transparent transition-colors">
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium text-[#1a1a1a] mb-1">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password (min. 8 karakter)" required
                        class="w-full px-4 py-3 rounded-xl border border-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#d87a4a] focus:border-transparent transition-colors">
                </div>
                
                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-[#1a1a1a] mb-1">Konfirmasi Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password" required
                        class="w-full px-4 py-3 rounded-xl border border-[#e0e0e0] focus:outline-none focus:ring-2 focus:ring-[#d87a4a] focus:border-transparent transition-colors">
                </div>
                
                <button type="submit" 
                    class="w-full bg-[#d87a4a] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#b96a3a] transition-colors">
                    Daftar
                </button>
            </form>
        </div>
    </main>
</body>
</html>