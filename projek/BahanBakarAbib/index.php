<!DOCTYPE html>
<html>
<head>
    <title>Bahan Bakar</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <center>
        <!-- logo wikrama -->
        <div class="satu">
            <div>
                <img class="gambar" src="aset/wikrama.png" alt="deskripsi_gambar">
            </div>
            <!-- logo wikrama -->

            <h1>WILINE</h1>
            <h2>Wikrama Gasoline</h2>
            <form action="ses2.php" method="post">
                <table>
                    <tr>
                        <td>Masukkan jumlah Liter</td>
                        <td>:</td>
                        <td><input name="liter" type="number" required></td>
                    </tr>
                    <tr>
                        <td>Pilih Tipe Bahan Bakar</td>
                        <td>:</td>
                        <td>
                            <select name="bahanbakar" id="type" required>
                                <option value="" disabled selected>-------------PILIH-------------</option>
                                <option value="Shell Super">Shell Super</option>
                                <option value="Shell V-Power">Shell V-Power</option>
                                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>
