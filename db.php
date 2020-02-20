<?php
//Database connection.
$con = MySQLi_connect(
   "3.6.52.254:3306", //Server host name.
   "shashank", //Database username.
   "root", //Database password.
   "realestate" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>