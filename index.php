<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="img/png" href="c2.png" >
    <title>Chandra | add</title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>
</head>
<body>
<div class="header">
<div class="container" style=" border:0; padding:10px; width:760px; height:auto;">
<form action="index.php" method="POST" align="center" name="form1">
    <div class=" badge badge-primary" style="width: auto;">
        <h1>Request GiveAway Gitar</h1>

      </div> 
    
    <table class='p-3 mb-2 bg-primary text-white  ini' width="auto" border="0" align="center" cellpadding="0" cellspacing="0">
        <br>
        <br>
        <br>
        <br>
        
         
        <tr height="46">
            <td> </td>
            <td>Nama</td>
            <td><input placeholder="masukkan namamu!" type="text"required='' name="nama" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Kode Undangan</td>
            <td><input placeholder="masukkan kode undangan yang telah dikirimkan!" type="text" required='' name="kode" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Email</td>
            <td><input placeholder='masukkan email yang valid!' type="email" required='' name="email" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Merk</td>
            <td><select name="merk" required>
                    <option value="-"><i>silakan pilih merk</i>
                    <option value="Yamaha">Yamaha
                    <option value="Ibanez">Ibanez
                    <option value="Fender">Fender
                    <option value="Cowboy">Cowboy
                    <option value="Taylor">Taylor
                    <option value="ColeClark">ColeClark
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jenis</td>
            <td><select name="jenis" required>
                    <option value="-">silakan pilih jenis gitar
                    <option value="Akustik">Akustik
                    <option value="Classic">Classic
                    <option value="Ukulele">Ukulele
                    <option value="Electrik">Electrik
                        <option value="Bass Akustik">Bass Akustik
                        <option value="Bass Electrik">Bass Electrik
                   
                </select></td>
        </tr>
     
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input class="btn-outline-primary" type="submit" name="Submit" value="Submit">   
                <input class="btn-outline-primary" type="reset" onclick="cancel()" name="reset" value="Cancel"></td>
        </tr>
 
    </table>
</form>
<p><a href="list.php" class="text-light bg-dark"><i>*lihat list survei</i></a></p>

<?php

// Check If form submitted, insert form data into gitar table.
if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kode = $_POST['kode'];
    $merk =$_POST['merk'];
    $jenis =$_POST['jenis'];
    // include database connection file
    include_once("config.php");
    
    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO gitar(kode,nama,email,merk,jenis) VALUES('$kode','$nama','$email','$merk','$jenis')");
    
    // Show message when user added
    
}
?>
</div>
</div>

<script>
    function cancel() {
        alert('Mengapa di Cancel???')
    }
</script>

</body>
</html>