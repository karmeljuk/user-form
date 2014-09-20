<?php

  // MySQL connect
  $con=mysqli_connect("localhost","form","form","form");


  // Check connection
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
