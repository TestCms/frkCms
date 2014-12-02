<?php
        ## Connect Information ##
$host = "localhost";
$user = "root";
$password = "";
$veritabani = "myDB";
         
         ## MYSQL CONNECT ##
$connect = mysql_connect ("$host","$user","$password") or die (mysql_error());
         ## Database CONNECT
 mysql_connect_db ($veritabani,$connect) or die ("Sorry, We can't find your DATABASE!");
?>
