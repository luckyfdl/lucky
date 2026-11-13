<?php
include 'koneksi.php';
if (isset($_POST['beli'])) {
    $produk = $_POST['ProdukID'];
    $jumlah = $_POST['jumlah'];
    $p = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM produk WHERE ProdukID='$produk'"));

    if ($jumlah > $p['Stok']) {
        echo "<script>alert('Stok tidak cukup!');</script>";
    } else {
        $total = $p['Harga'] * $jumlah;
        mysqli_query($koneksi, "INSERT INTO penjualan (TanggalPenjualan, TotalHarga, PelangganID) VALUES (CURDATE(), '$total', '$_POST[PelangganID]')");
        $id = mysqli_insert_id($koneksi);
        mysqli_query($koneksi, "INSERT INTO detailpenjualan (PenjualanID, ProdukID, JumlahProduk, Subtotal) VALUES ('$id','$produk','$jumlah','$total')");
        mysqli_query($koneksi, "UPDATE produk SET Stok = Stok - $jumlah WHERE ProdukID='$produk'");
        header("location: list-beli.php");
    }
}
$pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");
$produk    = mysqli_query($koneksi, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
    <div>
    <h2>Beli</h2>
    <form method="POST">
        Pelanggan
        <select name="PelangganID">
            <?php while ($a = mysqli_fetch_array($pelanggan)) { ?>
                <option value="<?php echo $a['PelangganID']; ?>"><?php echo $a['NamaPelanggan']; ?></option>
            <?php } ?>
        </select><br>
        Produk
        <select name="ProdukID">
            <?php while ($b = mysqli_fetch_array($produk)) { ?>
                <option value="<?php echo $b['ProdukID']; ?>"><?php echo $b['NamaProduk']; ?></option>
            <?php } ?>
        </select><br>
        Jumlah <input type="number" name="jumlah"><br>
        <button name="beli">Beli</button>
    </form>
</div>
</body>
</html>

