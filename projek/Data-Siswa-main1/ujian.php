<?php
session_start();
if(isset($_POST['submit'])){
    $_SESSION['data_siswa'] = $_POST;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1 class="main-heading">Formulir Data Siswa</h1>

    <div class="container">

        <form method="post" action="">
            <label>Nama:</label><br>
            <input type="text" name="nama"><br>
            <label>Kelas:</label><br>
            <input type="text" name="kelas"><br>
            <label>Rayon:</label><br>
            <input type="text" name="rayon"><br>
            <label>NIS:</label><br>
            <input type="text" name="nis"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php if(isset($_SESSION['data_siswa'])): ?>
    <div class="table-container">
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
        <a href="ses2.php">Lihat Detail</a>
    </div>
    <?php endif; ?>
</body>
</html>


<style>
    /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-image: url(aset/wikramabg.jpg);
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
 background-repeat: no-repeat;
 background-size: cover;
}



.main-heading {
    font-size: 3em;
    color: white;
    margin-bottom: 20px;
    padding-top: 60px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    align-self: flex-start;
    margin-left: 20px; /* Sesuaikan dengan jumlah margin yang diinginkan */
    position: absolute;
    background: transparent;
    backdrop-filter: blur(5px);

}


form {
    background: transparent;
    backdrop-filter: blur(5px);
    border: 1.5px solid rgb(255, 255, 255);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: 20px;
    color: #fff;
    position: relative; 
}

form label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    color: #fff;
}

form input[type="text"] {
    width: calc(100% - 20px);
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background: #5cb85c;
    border: none;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background: #4cae4c;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
    color: #fff;
    background: transparent;
    backdrop-filter: blur(5px);
}

table th {
    background: transparent;
    backdrop-filter: blur(5px);
    
}

a {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    color: #337ab7;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}
    
</style>