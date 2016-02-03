<?php


require '../db/connect.php';

$post = $_POST['name'];

$sql = "SELECT * FROM users WHERE name = '$post'";



$query = mysqli_query($db,$sql);

$row = mysqli_fetch_assoc($query);
echo "$post" . "'s " . "favorite food is: " . $row["food"];
//printf ("$post"&"'s "&"favorite food is: %s\n",$row["food"]);



?>

