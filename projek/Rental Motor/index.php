<!-- start php -->
<?php
session_start();

class Motor {
    private $harga;
    public $pajak = 0;

    public function __construct($harga) {
        $this->harga = $harga;
    }

    public function hitungTotalHarga($lamaWaktu) {
        $totalHarga = $this->harga * $lamaWaktu + $this->pajak;
        return $totalHarga;
    }
}

$hargaMotor = [
    "supra" => 50000,
    "vario" => 70000,
    "nmax" => 90000,
    "zx25r" => 120000
];

$result="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaPelanggan = $_POST["namaPelanggan"];
    $lamaWaktu = $_POST["lamaWaktu"];
    $jenisMotor = $_POST["jenisMotor"];

    // Basic validation
    if (empty($namaPelanggan) || empty($lamaWaktu) || empty($jenisMotor) ||!is_numeric($lamaWaktu)) {
        $result = "Please fill in all fields correctly.";
    } else {
        $harga = isset($hargaMotor[$jenisMotor])? $hargaMotor[$jenisMotor] : 0;

        $motor = new Motor($harga);

        $totalHarga = $motor->hitungTotalHarga($lamaWaktu);

        $result = "Pelanggan $namaPelanggan<br> jenis motor yang dirental adalah $jenisMotor selama $lamaWaktu hari<br>Harga rental per harinya adalah: Rp. ". number_format($harga, 0). "<br><br>Besar yang harus dibayarkan adalah: Rp. ". number_format($totalHarga, 0);

        // Simpan hasil ke session
        $_SESSION['result'] = $result;
        header('Location: sesi2.php');
        exit();
    }
}
?>

<!-- end php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <link rel=stylesheet href=index.css>
</head>
<body>

<div class="container">
    <h1>Rental Motor</h1>
    <form action="" method="POST">
    
        <label for="namaPelanggan">Nama Pelanggan:</label>
        <input type="text" id="namaPelanggan" name="namaPelanggan" required>
        
        <label for="lamaWaktu">Lama Waktu (hari):</label>
        <input type="number" id="lamaWaktu" name="lamaWaktu" required>
        
        <label for="jenisMotor">Jenis Motor:</label>
        <select id="jenisMotor" name="jenisMotor" required>
            
            <option value="">Pilih jenis motor</option>
            <option value="supra">Supra</option>
            <option value="vario">Vario</option>
            <option value="nmax">Nmax</option>
            <option value="zx25r">ZX25R</option>
        </select>
        
        <input type="submit" value="Submit">
    </form>
    <div class="result">
        <?php echo $result; ?>
    </div>
</div>
</body>
</html>

