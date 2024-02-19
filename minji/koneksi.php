<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$database = "db_siswaa";
$db = mysqli_connect($SERVER, $USER, $PASSWORD, $database);
if(!$db){
die("Gagal terhubung dengan database: ".mysqli_connect_error());
} ?>