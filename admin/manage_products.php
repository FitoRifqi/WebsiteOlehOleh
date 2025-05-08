<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

include '../config/database.php';

// Tambah/Edit/Hapus produk
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission here
}

$products = $pdo->query("SELECT * FROM products")->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Produk</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="manage_products.php">Produk</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <h2>Kelola Produk</h2>
        <a href="add_product.php" class="btn">Tambah Produk</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['id']) ?></td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td>Rp <?= number_format($product['price'], 0, ',', '.') ?></td>
                    <td>
                        <a href="edit_product.php?id=<?= $product['id'] ?>">Edit</a>
                        <a href="delete_product.php?id=<?= $product['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>