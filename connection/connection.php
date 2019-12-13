<?php
$host='localhost';
$user='root';
$pass='';
$database='apotek';

$con=mysqli_connect($host,$user,$pass,$database);

if ($con->connect_error) {
    echo "Koneksi gagal, Error pada: ".mysqli_error($con);
}