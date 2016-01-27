<?php
  while($row = $result->fetch_assoc())
  {
    echo "<p>My name is:   " .$row['name']. ".</p>";
  }
?>