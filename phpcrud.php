<?php

$conn = mysqli_connect("localhost","root","","demodb");

// check connection

if($conn === false)
{
  die("ERROR: Could not connect." . mysqli_connect_error());
}

// Attempt to create database query

$sql = "INSERT INTO players(firstname,lastname,email) VALUES('Peter','Parker','peter@mail.com'),('Mary','Dunn','mary@mail.com'),('Alice','Robinson','alice@mail.com')";

if(mysqli_query($conn,$sql))
{
  echo "Records inserted successfully";

}
else{
      echo "ERROR: Could not execute $sql. ".mysqli_error($conn);
}

// close connection

mysqli_close($conn);

?>