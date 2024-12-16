<?php
$host = 'localhost';
$user = 'root'; 
$password = '';
$database = 'fut_champians';
$conn = mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno())
{
    echo "Connection could not be established" ;
}
?>