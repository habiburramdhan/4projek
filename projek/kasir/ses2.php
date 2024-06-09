<?php
session_start();

if (isset($_POST['nama_barang']) && isset($_POST['harga']) && isset($_POST['jumlah'])) {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    // Add the item to the session
    $_SESSION['barang'][] = array('nama_barang' => $nama_barang, 'harga' => $harga, 'jumlah' => $jumlah);
}

if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($_SESSION['barang'][$index])) {
        unset($_SESSION['barang'][$index]);
        // Re-index the array to avoid holes
        $_SESSION['barang'] = array_values($_SESSION['barang']);
    }
}

if (isset($_POST['clear'])) {
    unset($_SESSION['barang']);
}

$total = 0;
if (isset($_SESSION['barang'])) {
    foreach ($_SESSION['barang'] as $barang) {
        $total += $barang['harga'] * $barang['jumlah'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Belanja</title>
    <link rel="stylesheet" type="text/css" href="sesi2.css">
</head>
<body>
    <div class="result-container">
        <h1>Hasil Belanja</h1>
        <table>
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
            <?php if (isset($_SESSION['barang']) && !empty($_SESSION['barang'])) { 
                foreach ($_SESSION['barang'] as $key => $barang) { ?>
                <tr>
                    <td><?= htmlspecialchars($barang['nama_barang']) ?></td>
                    <td><?= htmlspecialchars($barang['harga']) ?></td>
                    <td><?= htmlspecialchars($barang['jumlah']) ?></td>
                    <td><?= htmlspecialchars($barang['harga'] * $barang['jumlah']) ?></td>
                    <td><a href="?delete=<?= $key ?>">Hapus</a></td>
                </tr>
            <?php } 
            } else { ?>
                <tr>
                    <td colspan="5">Tidak ada barang di keranjang belanja.</td>
                </tr>
            <?php } ?>
            <tr class="total">
                <th colspan="3">Total</th>
                <th><?= htmlspecialchars($total) ?></th>
                <th></th>
            </tr>
        </table>
        <button onclick="window.print()">Cetak</button>
        <form method="post" action="">
            <button type="submit" name="clear">Hapus Semua</button>
        </form>
        <button onclick="window.location.href='index.php'">Kembali</button>
    </div>
</body>
</html>
