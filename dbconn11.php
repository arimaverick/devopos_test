<?php
   @mysql_connect("mysql153.secureserver.net","java2s","password") or die("Could not connect to MySQL server!");

   @mysql_select_db("java2s") or die("Could not select database!");

   echo "You're connected to a MySQL database!";

   mysql_close();

?>

