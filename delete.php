
<?php
// include database connection file
include_once("config.php");

// Get kode from URL to delete that user
$kode = $_GET['kode'];

// Delete user row from table based on given kode
$result = mysqli_query($mysqli, "DELETE FROM gitar WHERE kode=$kode");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>