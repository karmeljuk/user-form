<?php include 'header.php'; ?>

<div class="form-container">

   <div class="title field">
      <h2>Your Profile</h2>
      <h3>You can view your information</h3>
   </div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione expedita optio perferendis corporis reiciendis consectetur, esse, exercitationem culpa eligendi quibusdam eaque nam, doloremque distinctio enim. Explicabo at accusamus corporis, labore?</p>

  <?php

  $con=mysqli_connect("localhost","form","form","form");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // $query = "SELECT login,first_name FROM data";

  // $result = MYSQL_QUERY($query);
  // $data = MYSQL_RESULT($result,0,"login");
  // $type = MYSQL_RESULT($result,0,"first_name");
  // Header( "Content-type: $type");
  // print $data;

  $result = mysqli_query($con,"SELECT * FROM data ORDER BY id DESC LIMIT 1");

  // $row = mysqli_fetch_array($result);
  //   echo $row['login'];
  //   echo "<br>";
  //   echo $row['first_name'];
  //   echo "<br>";
  //   echo $row['last_name'];
  //   echo "<br>";
  //   echo $row['email'];
  //   echo "<br>";
  //   echo $row['password'];
  //   echo "<br>";
  //   echo $row['website'];
  //   echo "<br>";
  //   echo $row['google_plus'];
  //   echo "<br>";

//   while($row = mysqli_fetch_array($result)) {
//   echo $row[''] . "<br>";
// }


  while ($row = mysqli_fetch_array($result)) {
    echo '<ul>';
    foreach($row as $field) {
        echo '<li>' . htmlspecialchars($field) . '</li>';
    }
    echo '</ul>';
}

  mysqli_close($con);

  ?>
</div>


<?php include 'footer.php'; ?>
