<?php

$con=mysqli_connect("localhost","root","","registration");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM registration");
mysqli_query($con,"INSERT INTO user (FirstName,LastName,Age) 
VALUES ('Glenn','Quagmire',33)");

mysqli_close($con);
?>