<?php
session_start();
require "../utils/conn.php";
chargerclass('../class/', "Manager");
$manager = new Manager($conn);

$username = $_GET['username'];
$pass = $_GET['pass'];

$res = $manager->getAdminPassword($username, $pass);

if(json_decode($res) == "succes"){
    $_SESSION['acces'] = true;
}

echo $res; 
