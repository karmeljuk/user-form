<?php

    include 'includes/header.php';

    // Connects to Database
    include "includes/connect.php";

    //Retrieves data from MySQL
    $data = mysql_query("SELECT * FROM data ORDER BY id DESC LIMIT 1") or die(mysql_error());

    //Puts it into an array
    $info = mysql_fetch_array( $data );

    mysql_close();

    include 'includes/uk/view.html';

    include 'includes/footer.php';

?>
