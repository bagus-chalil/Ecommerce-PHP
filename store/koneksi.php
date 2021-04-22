<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'lecomm');

$con = mysqli_connect(HOST, USER, PASS, DB) or die('Unable to Connect');

if( !$con ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>