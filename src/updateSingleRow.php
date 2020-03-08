<?php
session_start();
require "../utils/conn.php";
require "../utils/checkAcces.php";
checkAcces("../");
chargerclass('../class/', "Manager");
$manager = new Manager($conn);

$value = null;
$table = $_GET['bdd'];
$type = $_GET['type'];

if(!empty($_FILES)){
    // il y a une image
    $imgtab = $_FILES['img1'];
    chargerclass('../class/', "ImgWorker");
    $imgworker = new ImgWorker('../img/');
    $imgpath = $imgworker->getBddPath($imgtab['name'], 'bdd');
    if($imgworker->ThrowImgOnServer($imgtab, $conn)){
        if($table === "Page"){
            $manager->updateSingleRow($table, $type, $imgpath);
        }     
    }
}else{
    $value = $_POST['value'];
    $manager->updateSingleRow($table, $type, $value);
}
