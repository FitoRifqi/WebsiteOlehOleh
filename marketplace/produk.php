<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Produk Oleh-Oleh Lamongan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-white text-[#1a1a1a]">
  <header class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto">
    <div class="flex items-center space-x-2">
      <img src="../websiteoleh/img/logolamongan.png" alt="Logo" class="w-10 h-10">
      <span class="font-semibold text-lg text-orange-600">Oleh - Oleh Lamongan</span>
    </div>
    <nav class="hidden md:flex space-x-8 text-sm font-medium text-[#1a1a1a]"> 
    <a class="hover:text-[#d87a4a] transition-colors" href="/websiteoleh/index.php">
     Beranda
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="/websiteoleh/marketplace/produk.php">
     Belanja
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="#">
     Tempat
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="#">
     Kontak
    </a>
   </nav>
    <a href="cart.php" class="text-sm font-semibold text-[#1a1a1a] hover:text-[#d87a4a]">
      <i class="fas fa-shopping-cart"></i>
    </a>
  </header>

  <main class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold mb-8">Produk Unggulan</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <!-- Produk Card -->
      <div class="bg-white rounded-3xl shadow-md overflow-hidden">
        <img src="../websiteoleh/img/Wingko Babat.jpg" alt="Wingko Babat" class="w-full h-56 object-cover">
        <div class="p-4">
          <h2 class="font-semibold text-lg">Wingko Babat</h2>
          <p class="text-sm text-gray-600 mb-2">Kue kelapa khas Lamongan</p>
          <p class="text-orange-600 font-semibold mb-4">Rp 25.000</p>
          <form method="post" action="cart.php">
            <input type="hidden" name="product" value="Wingko Babat">
            <input type="hidden" name="price" value="25000">
            <button type="submit" class="w-full bg-[#d87a4a] text-white px-4 py-2 rounded-full hover:bg-[#b96a3a]">
              Tambah ke Keranjang
            </button>
          </form>
        </div>
      </div>
      <!-- Tambahkan produk lainnya di sini -->
    </div>
  </main>
</body>
</html>
