<?php include 'header.php'; ?>

<div class="form-container">


  <?php

  $con=mysqli_connect("localhost","form","form","form");
  // Check connection
  if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // $query = "SELECT login,first_name FROM data";

  // $result = MYSQL_QUERY($query);
  // $data = MYSQL_RESULT($result,0,"login");
  // $type = MYSQL_RESULT($result,0,"first_name");
  // Header( "Content-type: $type");
  // print $data;

  $result = mysqli_query($con,"SELECT * FROM data ORDER BY id DESC LIMIT 1");


  $row = mysqli_fetch_array($result);

  ?>

  <div class="title field">
      <h2>Personal Information</h2>
  </div>
  <hr>
  <h3>Name</h3>
  <table class="form-table">
    <tbody>
        <tr>
            <th>
                <label for="user_login">Login</label>
            </th>
            <td>
                <input type="text" class="regular-text" readonly="readonly" value="<?=$row['login']; ?>" id="user_login" name="user_login">
            </td>
        </tr>

        <tr>
            <th>
                <label for="first_name">First Name</label>
            </th>
            <td>
                <input type="text" class="regular-text" readonly="readonly"  value="<?=$row['first_name']; ?>" id="first_name" name="first_name">
            </td>
        </tr>

        <tr>
            <th>
                <label for="last_name">Last Name</label>
            </th>
            <td>
                <input type="text" class="regular-text" readonly="readonly"  value="<?=$row['last_name']; ?>" id="last_name" name="last_name">
            </td>
        </tr>
    </tbody>
  </table>
  <h3>Contact Info</h3>
  <table class="form-table">
    <tbody>
        <tr>
            <th>
                <label for="email">E-mail</label>
            </th>
            <td>
                <input type="text" class="regular-text ltr" readonly="readonly"  value="<?=$row['email']; ?>" id="email" name="email">
            </td>
        </tr>

        <tr>
            <th>
                <label for="url">Website</label>
            </th>
            <td>
                <input type="text" class="regular-text code" readonly="readonly"  value="<?=$row['website']; ?>" id="url" name="url">
            </td>
        </tr>
        <tr>
            <th>
                <label for="jabber">Google+</label>
            </th>
            <td>
                <input type="text" class="regular-text" readonly="readonly"  value="<?=$row['google_plus']; ?>" id="google_plus" name="google_plus">
            </td>
        </tr>
    </tbody>
  </table>
  <h3>About Yourself</h3>
  <table class="form-table">
    <tbody>
        <tr>
            <th>
                <label for="description">Information</label>
            </th>
            <td>
                <textarea rows="5" id="description" readonly="readonly"  name="description"><?=$row['information']; ?></textarea>
            </td>
        </tr>

        <tr>
            <th>
                <label for="password">Password</label>
            </th>
            <td>
                <input type="password" autocomplete="off" readonly="readonly"  value="<?=$row['password']; ?>" class="regular-text" id="password" name="password">
            </td>
        </tr>

        <tr>
            <th>
                <label for="photo">Photo</label>
            </th>
            <td>
                <img src="images/photo/<?=$row['photo'] ?>">
            </td>
        </tr>
    </tbody>
</table>

<?php


      // echo $row['login'];
      // echo "<br>";
      // echo $row['first_name'];
      // echo "<br>";
      // echo $row['last_name'];
      // echo "<br>";
      // echo $row['email'];
      // echo "<br>";
      // echo $row['password'];
      // echo "<br>";
      // echo $row['website'];
      // echo "<br>";
      // echo $row['google_plus'];
      // echo "<br>";



  // while($row = mysqli_fetch_array($result))
  // {
  //     echo $row[''] . "<br>";
  // }


  // while ($row = mysqli_fetch_array($result)) {
  //   echo '<ul>';
  //   foreach($row as $field) {
  //       echo '<li>' . htmlspecialchars($field) . '</li>';
  //   }
  //   echo '</ul>';
  // }


  mysqli_close($con);

  ?>
</div>


<?php include 'footer.php'; ?>
