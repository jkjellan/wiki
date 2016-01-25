<?php

  $servername = getenv('IP');
  $username = getenv('C9_USER');
  $password = "";
  $database = "c9";
  $dbport = 3306;
  
  // Create connection
  $db = new mysqli($servername, $username, $password, $database, $dbport);
  
  // Check connection
  if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
  } 
  echo "Connected successfully (".$db->host_info.")";
  
  //And now to perform a simple query to make sure it's working
  $query = "SELECT * FROM users";
  $result = mysqli_query($db, $query);

  
?>


<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
      <link type="text/css" rel="stylesheet" href="css/Master.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
      <title>Agency Insights</title>

    <link rel="stylesheet" type="text/css" href="css/content-tools.min.css" />

    </head>
    <body>
      <header data-editable data-name="header">
        <h1>
          Agency Insights
        </h1>
      </header>
        <nav>
          <ul>
            <a href="Expense.html"><li>Expense</li></a>
            <a href="Onboarding.html"><li>Onboarding</li></a>
          </ul>
        </nav>
        <section data-editable data-name="section">
          
          
          <?php
          
            while($row = $result->fetch_assoc()){
              echo "<p>My name is:   " .$row['name']. ".</p>";
            }
          ?>
          
        </section>
    <script src="js/content-tools.min.js"></script>
    <script src="js/app.js"></script>
    </body>
  </html>
