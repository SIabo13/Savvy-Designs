<?php


$servername = "localhost";
$username = "raultper_siabo";
$password = "P9!%gvrDTG%n";
<<<<<<< HEAD
$database = "raultper_savy_design";

// $servername = "localhost";
// $username = "admin";
// $password = "";
// $database = "savvy_design";
=======
$database = "raultper_portfolio";

>>>>>>> 18a9ee5f5190a32426286162c33bb92ce6040536

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


<<<<<<< HEAD
$sql = "SELECT * FROM team";
=======
$sql = "SELECT * FROM work_items";
>>>>>>> 18a9ee5f5190a32426286162c33bb92ce6040536
$result = mysqli_query($conn, $sql);
?>