<?php include 'includes/header.php'; ?>

<div class="form-container">


  <?php

  // Connects to Database
  include "includes/connect.php";

  // $result = mysqli_query($con,"SELECT * FROM data ORDER BY id DESC LIMIT 1");


  // $row = mysqli_fetch_array($result);



 //Retrieves data from MySQL
 $data = mysql_query("SELECT * FROM data ORDER BY id DESC LIMIT 1") or die(mysql_error());

//Puts it into an array

  $info = mysql_fetch_array( $data );
 //Outputs the image and other data

  // echo "<img src=images/".$info['photo'] ."> <br>";

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
                <input type="text" class="regular-text" readonly="readonly" value="<?=$info['login']; ?>" id="user_login" name="user_login">
            </td>
        </tr>

        <tr>
            <th>
                <label for="first_name">First Name</label>
            </th>
            <td>
                <input type="text" class="regular-text" readonly="readonly"  value="<?=$info['first_name']; ?>" id="first_name" name="first_name">
            </td>
        </tr>

        <tr>
            <th>
                <label for="last_name">Last Name</label>
            </th>
            <td>
                <input type="text" class="regular-text" readonly="readonly"  value="<?=$info['last_name']; ?>" id="last_name" name="last_name">
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
                <input type="text" class="regular-text ltr" readonly="readonly"  value="<?=$info['email']; ?>" id="email" name="email">
            </td>
        </tr>

        <tr>
            <th>
                <label for="url">Website</label>
            </th>
            <td>
                <input type="text" class="regular-text code" readonly="readonly"  value="<?=$info['website']; ?>" id="url" name="url">
            </td>
        </tr>
        <tr>
            <th>
                <label for="jabber">Google+</label>
            </th>
            <td>
                <input type="text" class="regular-text" readonly="readonly"  value="<?=$info['google_plus']; ?>" id="google_plus" name="google_plus">
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
                <textarea rows="5" id="description" readonly="readonly"  name="description"><?=$info['information']; ?></textarea>
            </td>
        </tr>

        <tr>
            <th>
                <label for="password">Password</label>
            </th>
            <td>
                <input type="password" autocomplete="off" readonly="readonly"  value="******" class="regular-text" id="password" name="password">
            </td>
        </tr>

        <tr>
            <th>
                <label for="photo">Photo</label>
            </th>
            <td>
                <p>
                  <img width="220" src="images/photo/<?=$info['photo'] ?>">
                </p>
            </td>
        </tr>
    </tbody>
</table>
</div>

<?php

  mysql_close();
  include 'includes/footer.php';

?>
