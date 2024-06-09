<?php
session_start();

if(isset($_POST['submit'])) {
    $_SESSION['liter'] = $_POST['liter'];
    $_SESSION['bahanbakar'] = $_POST['bahanbakar'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pembelian</title>
    <link rel=stylesheet href=sesi2.css>
</head>
<body>
    <div class="hasil">
        <h2>Hasil Pembelian</h2>
        <?php
        if(isset($_SESSION['liter']) && isset($_SESSION['bahanbakar'])) {
            echo "<p>Jumlah Liter: ".$_SESSION['liter']."</p>";
            echo "<p>Tipe Bahan Bakar: ".$_SESSION['bahanbakar']."</p>";
        } else {
            echo "<p>Data tidak ditemukan.</p>";
        }
        ?>
        <button class="btn" onclick="window.print()">Print</button>
        <a href="index.php" class="btn">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
