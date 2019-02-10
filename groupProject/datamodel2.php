

<?php
 
  $servername = "localhost:3306";
  $username = "root";
  $password = "";
  $dbname = "fitness_tracker";

  require('credentials.php');
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  ?>