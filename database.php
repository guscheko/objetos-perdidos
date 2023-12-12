<?php

/*
$server= '148.202.164.99';
$username= "root";
$password= "";
$database= "objetos_perdidos";
*/

$server= 'localhost';
$username= "root";
$password= "";
$database= "objetos_perdidos";

try{
 $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
  

}catch(PDOException $e){
    die('no hay conexion:'.$e ->getMessage());
}



/*$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
    die("no hay conexion:" .mysqli_connect_error());
}
*/
?>
