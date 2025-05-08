<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Oleh-Oleh Khas Lamongan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-white text-[#1a1a1a]">

  <!-- Header -->
<header class="flex items-center justify-between px-6 py-5 max-w-7xl mx-auto border-b border-gray-200">
  <div class="flex items-center space-x-4">
    <img src="img/logolamongan.png" alt="Logo Lamongan" class="h-10 w-10 object-contain" />
    <nav class="flex space-x-6 text-sm font-medium text-[#1a1a1a]">
      <a href="#" class="hover:text-[#d87a4a]">Home</a>
      <a href="#" class="hover:text-[#d87a4a]">Makanan</a>
      <a href="#" class="hover:text-[#d87a4a]">Minuman</a>
      <a href="#" class="hover:text-[#d87a4a]">Kerajinan</a>
    </nav>
  </div>
  <button class="bg-[#d87a4a] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#b96a3a]">
    Jelajahi Sekarang
  </button>
</header>


  <!-- Hero Section -->
  <section class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 items-center gap-12">
    <div class="text-center md:text-left">
      <h1 class="text-5xl font-bold mb-6 leading-tight">Oleh-Oleh Khas Lamongan</h1>
      <p class="text-gray-600 mb-6 text-lg">Temukan oleh-oleh khas Lamongan langsung dari sumbernya!</p>
      <button class="bg-[#d87a4a] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#b96a3a]">
        Jelajahi Sekarang <i class="fas fa-arrow-right ml-2"></i>
      </button>
    </div>
    <div class="grid grid-cols-2 gap-4">
      <img src="../websiteoleh/img/soto lamongan.jpg" class="rounded-xl object-cover h-36 w-full" alt="Soto" />
      <img src="../websiteoleh/img/Wingko Babat.jpg" class="rounded-xl object-cover h-36 w-full" alt="Wingko" />
      <img src="../websiteoleh/img/batiklam.jpg" class="rounded-xl object-cover h-36 w-full" alt="Batik" />
      <img src="../websiteoleh/img/bandeng.jpg" class="rounded-xl object-cover h-36 w-full" alt="Bandeng" />
    </div>
  </section>

  <!-- Kategori Oleh-Oleh -->
  <section class="max-w-7xl mx-auto px-6 py-12">
    <h2 class="text-xl font-bold mb-6">Kategori Oleh-Oleh</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center">
        <i class="fas fa-utensils text-2xl text-[#d87a4a] mb-2"></i>
        <h3 class="font-semibold">Makanan</h3>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center">
        <i class="fas fa-wine-bottle text-2xl text-[#d87a4a] mb-2"></i>
        <h3 class="font-semibold">Minuman</h3>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center">
        <i class="fas fa-gem text-2xl text-[#d87a4a] mb-2"></i>
        <h3 class="font-semibold">Kerajinan</h3>
      </div>
    </div>
  </section>

  <!-- Rekomendasi Populer -->
  <section class="max-w-7xl mx-auto px-6 py-6">
    <h2 class="text-xl font-bold mb-4">Rekomendasi Populer</h2>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
      <div class="text-center">
        <img src="../websiteoleh/img/soto lamongan.jpg" alt="Soto Lamongan" class="rounded-lg h-24 w-full object-cover mb-2" />
        <h3 class="font-semibold">Soto Lamongan</h3>
        <p class="text-sm text-gray-500">5 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
      <div class="text-center">
        <img src="../websiteoleh/img/Wingko Babat.jpg" alt="Wingko Babat" class="rounded-lg h-24 w-full object-cover mb-2" />
        <h3 class="font-semibold">Wingko Babat</h3>
        <p class="text-sm text-gray-500">6 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
      <div class="text-center">
        <img src="../websiteoleh/img/batiklam.jpg" alt="Batik Lamongan" class="rounded-lg h-24 w-full object-cover mb-2" />
        <h3 class="font-semibold">Batik Lamongan</h3>
        <p class="text-sm text-gray-500">7 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
      <div class="text-center">
        <img src="../websiteoleh/img/bandeng.jpg" alt="Bandeng Asap" class="rounded-lg h-24 w-full object-cover mb-2" />
        <h3 class="font-semibold">Bandeng Asap</h3>
        <p class="text-sm text-gray-500">8 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
    </div>
  </section>

  <!-- Peta Interaktif -->
  <section class="max-w-7xl mx-auto px-6 py-6">
    <h2 class="text-xl font-bold mb-4">Peta Interaktif</h2>
    <button class="flex items-center space-x-2 text-[#d87a4a] hover:underline">
      <i class="fas fa-map-marker-alt"></i>
      <span>Lihat Toko Oleh-Oleh Terdekat</span>
    </button>
  </section>

  <!-- Artikel Terbaru -->
  <section class="max-w-7xl mx-auto px-6 py-12">
    <h2 class="text-xl font-bold mb-6">Artikel Terbaru</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="../websiteoleh/img/oleh1.jpg" alt="Artikel 1" class="w-full h-32 object-cover" />
        <div class="p-4">
          <h3 class="font-semibold mb-2">5 Oleh-Oleh Khas Lamongan Favorit Wisatawan</h3>
          <a href="#" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="../websiteoleh/img/wingko.jpg" alt="Wingko" class="w-full h-32 object-cover" />
        <div class="p-4">
          <h3 class="font-semibold mb-2">Sejarah di Balik Wingko Babat Lamongan</h3>
          <a href="#" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="../websiteoleh/img/kerajinan.jpg" alt="Kerajinan" class="w-full h-32 object-cover" />
        <div class="p-4">
          <h3 class="font-semibold mb-2">Panduan Wisata Belanja Oleh-Oleh di Lamongan</h3>
          <a href="#" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-[#1a1a1a] text-white mt-12">
    <div class="text-center text-xs py-4">
      © 2025 Oleh - Oleh Lamongan. Dibuat oleh Tim Redaksi Nafian.com.
    </div>
  </footer>

</body>
</html>
