<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_hima';

$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die(mysqli_connect_error());

if( $koneksi->connect_error )
{
    die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
}
?>