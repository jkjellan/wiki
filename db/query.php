<?php
  require 'connect.php';
  
  //A simple query to make sure it's working
  
  $query = "SELECT * FROM users";
  if($result = mysqli_query($db, $query))
  {
    while($row = $result->fetch_assoc())
    {
      echo "<p>My name is:   " .$row['name']. ".</p>";
    }
  }
  else
  {
    echo 'no data';
  }
    
  

?>