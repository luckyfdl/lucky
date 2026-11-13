<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $produk_id   = $_POST['ProdukID'];
    $nama_produk = $_POST['NamaProduk'];
    $harga       = $_POST['Harga'];
    $stok        = $_POST['Stok'];

    $sql = mysqli_query($koneksi, "INSERT INTO produk (ProdukID, NamaProduk, Harga, Stok) VALUES ('$produk_id', '$nama_produk', '$harga', '$stok')");

    if ($sql) {
        echo "<script>
                alert('Barang berhasil ditambahkan!');
                window.location.href = 'produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan data!');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Stok Barang</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
    <p><a href="index.php">Kembali</a></p>
    <h2>Isi dan Stok Barang</h2>

    <form action="" method="POST">
        <p>
            <label>ProdukID:</label><br>
            <input type="text" name="ProdukID" required>
        </p>
        <p>
            <label>Nama Produk:</label><br>
            <input type="text" name="NamaProduk" required>
        </p>
        <p>
            <label>Harga:</label><br>
            <input type="number" name="Harga" required>
        </p>
        <p>
            <label>Stok:</label><br>
            <input type="number" name="Stok" required>
        </p>
        <p>
            <button type="submit" name="simpan">Tambah Barang</button>
        </p>
    </form>
</body>
</html>
