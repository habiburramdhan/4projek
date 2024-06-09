
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Hasil</title>
</head>
<body>
<div class="container">
    <h1>Cetak Hasil</h1>
    <?php if(isset($_SESSION['result'])): ?>
    <div class="result">
        <?php echo $_SESSION['result'];?>
    </div>
    <button onclick="window.print()">Cetak</button>
    <a href="index.php">Kembali</a>
    <?php else: ?>
    <p>Anda tidak memiliki hasil dari laman sebelumnya.</p>
    <a href="index.php">Kembali</a>
    <?php endif; ?>
</div>
</body>
</html>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(aset/wikramabg.jpg);
    margin: 0;
    padding: 0;
    text-align: center;
    background-size: cover;
    background-repeat: no-repeat;
        }
       .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
       .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 4px;
            text-align: center;
        }
    </style>
    

    |