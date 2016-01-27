<?php
  require 'php/connect.php';
  require 'php/query.php';
?>

<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
      <link type="text/css" rel="stylesheet" href="css/Master.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
      <title>Agency Insights</title>

      <link rel="stylesheet" type="text/css" href="css/content-tools.min.css" />
      
      <script language="JavaScript" src="js/show_input.js"></script>
      <script src="js/content-tools.min.js"></script>
      <script src="js/app.js"></script>

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
        
        <form>
          First name:<br>
          <input type="text" name="firstname" value="" id="user_input_first">
          <br>
          Last name:<br>
          <input type="text" name="lastname" value="" id = "user_input_last">
          <br><br>
          <input type="submit" value="Submit" onclick="return showInput();"><br>
        </form> 

        <p id = 'display'> </p>

        <?php require 'php/display_query.php';?>
          
      </section>
    
    </body>
  </html>