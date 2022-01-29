<?php

$conn = mysqli_connect("localhost","root","");

// check connection

if($conn === false)
{
  die("ERROR: Could not connect." . mysqli_connect_error());
}

// Print host information

echo "Connected successfully. Host info: ".mysqli_get_host_info($conn);

// close connection

mysqli_close($conn);

?>