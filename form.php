<?php


$con=mysqli_connect("localhost","form","form","form");
   echo "Connect to MySQL: ";
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$login = mysqli_real_escape_string($con, $_POST['login']);
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$website = mysqli_real_escape_string($con, $_POST['website']);
$google_plus = mysqli_real_escape_string($con, $_POST['google_plus']);


$sql="INSERT INTO data (login, first_name, last_name, email, password, website, google_plus)
VALUES ('$login','$first_name','$last_name','$email','$password','$website','$google_plus')";

// $sql="INSERT INTO Persons (FirstName, LastName, Age)
// VALUES ('$firstname', '$lastname', '$age')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);

