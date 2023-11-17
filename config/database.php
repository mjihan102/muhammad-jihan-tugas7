<?php
$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'tugas_db';

$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);

if(mysqli_connect_errno()){
    echo 'Gagal Login / Register'.mysqli_connect_error();
}
?>