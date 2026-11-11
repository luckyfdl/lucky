<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Stok Barang</title>
</head>
<body>

    <p><a href="index.php">Kembali</a></p>
    <h2>isi dan Stok Barang</h2>

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
            <label for=""></label>
        </p>
        <p>
            <button type="submit" name="simpan">Tambah Barang</button>
        </p>
    </form>

    <hr>

    <h3>Daftar Barang</h3>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Produk ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
    </table>
</body>
</html>
