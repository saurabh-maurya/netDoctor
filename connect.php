<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname='hospital';
    
$db = mysqli_connect($servername,$username,$password,$dbname);


if($db->connect_error)
{
    echo $db->connect_error;
}
?>