<?php

// MySQL connect
mysql_connect("localhost", "form", "form") or die(mysql_error()) ;

// Check connection
mysql_select_db("form") or die(mysql_error()) ;
