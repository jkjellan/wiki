<?php
    require 'connect.php';
    
    $username = $_POST['username'];
    $name = $_POST['name'];
    $sql = "INSERT INTO users (username, name) VALUES('$username','$name')";
    $query = mysqli_query($db, $sql);
    
    if(!$query)
        echo "Failed".mysql_error();
    else
        echo "Successful";

?>
