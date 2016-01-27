<?php

  //And now to perform a simple query to make sure it's working
  if($insert = $db->query("
  INSERT INTO users (username, name)
  VALUES ('username10', 'name10')"));
  $query = "SELECT * FROM users";
  $result = mysqli_query($db, $query);
  

?>