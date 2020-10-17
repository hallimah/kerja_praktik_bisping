<?php

$server="localhost";
$username="root";
$password = "";
$db = "kp_bismillah";

  $db = mysqli_connect($server, $username, $password, $db);

  if( !$db ){
    die("Gagal terhubung data base : " .mysqli_connect_error());
   }

 ?>
