<?php
session_start();

// Redirect ke halaman login jika belum login
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

include '../config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>Admin - Oleh-Oleh Lamongan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .sidebar {
      min-height: calc(100vh - 4rem);
    }
  </style>
</head>
<body class="bg-gray-100">
  <!-- Header Admin -->
  <header class="bg-[#1a1a1a] text-white py-4 px-6 shadow-md">
    <div class="flex items-center justify-between max-w-7xl mx-auto">
      <div class="flex items-center space-x-2">
        <img alt="Logo kabupaten Lamongan" class="w-8 h-8" src="../uas/img/logolamongan.png"/>
        <span class="font-semibold">Admin Oleh-Oleh Lamongan</span>
      </div>
      <div class="flex items-center space-x-4">
        <span class="text-sm">Halo, Admin</span>
        <a href="../index.php" class="text-sm hover:text-[#d87a4a] transition-colors flex items-center">
  <i class="fas fa-sign-out-alt mr-1"></i> Keluar
</a>
      </div>
    </div>
  </header>

  <div class="flex max-w-7xl mx-auto">
    <!-- Sidebar -->
    <aside class="sidebar w-64 bg-white shadow-md hidden md:block">
  <nav class="p-4">
    <ul class="space-y-2">
      <li>
        <a href="dashboard.php" class="flex items-center p-2 rounded hover:bg-gray-100">
          <i class="fas fa-tachometer-alt mr-3 text-[#d87a4a]"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a href="produk.php" class="flex items-center p-2 rounded hover:bg-gray-100">
          <i class="fas fa-box-open mr-3 text-[#d87a4a]"></i>
          Kelola Produk
        </a>
      </li>
      <li>
        <a href="tempat.php" class="flex items-center p-2 rounded hover:bg-gray-100">
          <i class="fas fa-store mr-3 text-[#d87a4a]"></i>
          Kelola Tempat
        </a>
      </li>
      <li>
        <a href="kategori.php" class="flex items-center p-2 rounded hover:bg-gray-100">
          <i class="fas fa-tags mr-3 text-[#d87a4a]"></i>
          Kategori
        </a>
      </li>
      <li>
        <a href="pengguna.php" class="flex items-center p-2 rounded hover:bg-gray-100">
          <i class="fas fa-users mr-3 text-[#d87a4a]"></i>
          Pengguna
        </a>
      </li>
      <li>
        <a href="register.php" class="flex items-center p-2 rounded hover:bg-gray-100">
          <i class="fas fa-user-plus mr-3 text-[#d87a4a]"></i>
          Tambah Admin
        </a>
      </li>
      <li>
        <a href="activity_log.php" class="flex items-center p-2 rounded hover:bg-gray-100">
          <i class="fas fa-clipboard-list mr-3 text-[#d87a4a]"></i>
          Activity Log
        </a>
      </li>
      <li>
        <a href="pengaturan.php" class="flex items-center p-2 rounded hover:bg-gray-100">
          <i class="fas fa-cog mr-3 text-[#d87a4a]"></i>
          Pengaturan
        </a>
      </li>
    </ul>
  </nav>
</aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-6">Dashboard</h2>
        

  <!-- Mobile Bottom Navigation -->
  <div class="md:hidden fixed bottom-0 left-0 right-0 bg-white shadow-lg">
    <div class="flex justify-around">
      <a href="dashboard.php" class="p-4 text-center text-[#d87a4a]">
        <i class="fas fa-home block text-xl"></i>
        <span class="text-xs">Home</span>
      </a>
      <a href="produk.php" class="p-4 text-center text-gray-600">
        <i class="fas fa-box-open block text-xl"></i>
        <span class="text-xs">Produk</span>
      </a>
      <a href="tempat.php" class="p-4 text-center text-gray-600">
        <i class="fas fa-store block text-xl"></i>
        <span class="text-xs">Tempat</span>
      </a>
      <a href="pengaturan.php" class="p-4 text-center text-gray-600">
        <i class="fas fa-cog block text-xl"></i>
        <span class="text-xs">Pengaturan</span>
      </a>
    </div>
  </div>
</body>
</html>