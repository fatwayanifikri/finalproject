<?php

$host="localhost";
$User="root";
$Pass="";
$dbname="finalproject";
$connect=mysql_connect($host, $User, $Pass) or die(mysql_error());
$dbselect=mysql_select_db($dbname);

?>