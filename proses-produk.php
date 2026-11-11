<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $produk_id   = $_POST['ProdukID'];
    $nama_produk = $_POST['NamaProduk'];
    $harga       = $_POST['Harga'];
    $stok        = $_POST['Stok'];

    $stmt = mysqli_prepare($koneksi, "INSERT INTO produk (ProdukID, NamaProduk, Harga, Stok) VALUES ('$produkID', '$NamaProduk', '$Harga', '$Stok')");
    mysqli_stmt_bind_param($stmt, "ssdi", $produk_id, $nama_produk, $harga, $stok);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Barang berhasil ditambahkan!');
                window.location.href = 'produk.php';
              </script>";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }

    mysqli_stmt_close($stmt);
} else {
    header("Location: produk.php");
    exit;
}
?>
