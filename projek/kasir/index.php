<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Kasir</title>
  <link rel="stylesheet" type="text/css" href="index1.css">
</head>
<body>
    <form action="ses2.php" method="post">
        <table>
        <h1 class="judul-kasir">Kasir Abib</h1>
        <div class="teks">
      <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nama_barang" required></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="number" name="harga" required></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="number" name="jumlah" required></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Submit"></td>
      </tr>
      </div>
    </table>
  </form>
  </div>
</body>
</html>


