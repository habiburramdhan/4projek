<?php
session_start();
if(!isset($_SESSION['data_siswa'])){
    header('Location: ujian.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
        function printPage() {
            window.print();
        }
    </script>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Rayon</th>
            <th>NIS</th>
        </tr>
        <tr>
            <td><?php echo $_SESSION['data_siswa']['nama']; ?></td>
            <td><?php echo $_SESSION['data_siswa']['kelas']; ?></td>
            <td><?php echo $_SESSION['data_siswa']['rayon']; ?></td>
            <td><?php echo $_SESSION['data_siswa']['nis']; ?></td>
        </tr>
    </table>
    <button onclick="printPage()">Cetak</button>
    <a href="ujian.php">Kembali</a>
</body>
</html>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

table {
    margin-top: 20px;
    width: 80%;
    max-width: 800px;
    border-collapse: collapse;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

button, a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #007bff;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
}

button:hover, a:hover {
    background: #0056b3;
}

a {
    text-align: center;
    display: inline-block;
}

</style>