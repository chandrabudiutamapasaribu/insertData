<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM gitar ORDER BY kode DESC");
?>

<html>
<head>    
<link rel="icon" type="img/png" href="c2.png" >
    <title>Chandra | list</title>
</head>

<body>
<a href="index.php">Tambah User Lagi</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>Email</th> <th>Kode</th> <th>Merk</th> <th>Jenis</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['kode']."</td>";    
        echo "<td>".$user_data['merk']."</td>";    
        echo "<td>".$user_data['jenis']."</td>";    
    }
    ?>
    </table>
</body>
</html>