<?php
require_once 'Barang.php';
require_once 'BarangManager.php';

$barangManager = new BarangManager();

// Menangani form tambah barang
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $barangManager->tambahBarang($nama, $harga, $stok);
    header('Location: index.php'); // Redirect untuk mencegah resubmission
    exit();
}

// Menangani penghapusan barang
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $barangManager->hapusBarang($id);
    header('Location: index.php'); // Redirect setelah menghapus
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencatatan Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #ff0808;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #db3333;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Pencatatan Barang</h1>
    <form method="POST">
    <div class="form-group">
        <label for="nama">Nama Barang:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga Barang:</label>
        <input type="number" id="harga" name="harga" required>
    </div>
    <div class="form-group">
        <label for="stok">Stok Barang:</label>
        <input type="number" id="stok" name="stok" required>
    </div>
    <button type="submit" name="tambah" class="btn">Tambah Barang</button>
    <a href="home.php" class="btn" style="background-color: #ff0808;">Kembali ke Home</a>
</form>


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barangManager->getBarang() as $barang): ?>
                <tr>
                    <td><?= htmlspecialchars($barang['id']); ?></td>
                    <td><?= htmlspecialchars($barang['nama']); ?></td>
                    <td><?= htmlspecialchars($barang['harga']); ?></td>
                    <td><?= htmlspecialchars($barang['stok']); ?></td>
                    <td>
                        <a href="?hapus=<?= urlencode($barang['id']); ?>" class="btn" style="background-color: #dc3545;">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
</div>
</body>
</html>
