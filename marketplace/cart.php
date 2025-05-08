<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $product = $_POST["product"];
  $price = $_POST["price"];

  $_SESSION["cart"][] = ["product" => $product, "price" => $price];
}
$cart = $_SESSION["cart"] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Keranjang Belanja</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-[#1a1a1a] font-sans">
  <header class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto">
    <h1 class="text-xl font-bold text-orange-600">Keranjang Belanja</h1>
    <a href="produk.php" class="text-sm hover:text-[#d87a4a]">← Kembali ke Produk</a>
  </header>

  <main class="max-w-5xl mx-auto px-6 py-8">
    <?php if (empty($cart)): ?>
      <p class="text-gray-600">Keranjang Anda masih kosong.</p>
    <?php else: ?>
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="text-sm border-b border-gray-300">
            <th class="pb-2">Produk</th>
            <th class="pb-2">Harga</th>
          </tr>
        </thead>
        <tbody>
          <?php $total = 0; ?>
          <?php foreach ($cart as $item): ?>
            <tr class="border-b border-gray-100 text-sm">
              <td class="py-2"><?= htmlspecialchars($item['product']) ?></td>
              <td class="py-2">Rp <?= number_format($item['price'], 0, ',', '.') ?></td>
            </tr>
            <?php $total += $item['price']; ?>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr class="font-semibold">
            <td class="pt-4">Total</td>
            <td class="pt-4">Rp <?= number_format($total, 0, ',', '.') ?></td>
          </tr>
        </tfoot>
      </table>
      <div class="mt-6">
        <button class="bg-[#d87a4a] text-white px-6 py-2 rounded-full hover:bg-[#b96a3a]">
          Checkout Sekarang
        </button>
      </div>
    <?php endif; ?>
  </main>
</body>
</html>
