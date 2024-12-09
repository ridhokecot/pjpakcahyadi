<?php
// Memanggil class BarangManager untuk mengambil data barang
require_once 'BarangManager.php';

$barangManager = new BarangManager();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
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
        h1 {
            text-align: center; /* Menambahkan center text */
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ff0808;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
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
              margin-top: 10px;
        }
        .btn:hover {
            background-color: #db3333;
          
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Daftar Barang READY</h1>
    <table>
        <thead>
            <tr>    
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barangManager->getBarang() as $barang): ?>
                <tr>
                    <td><?= htmlspecialchars($barang['nama']); ?></td>
                    <td><?= htmlspecialchars($barang['harga']); ?></td>
                    <td><?= htmlspecialchars($barang['stok']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="home.php" class="btn">HOME</a>
</div>
</body>
</html>
