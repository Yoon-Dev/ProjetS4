<?php
session_start();
require "../utils/conn.php";
// require "../utils/checkAcces.php";
// checkAcces("../");
chargerclass('../class/', "Manager");
$manager = new Manager($conn);
echo 'in';
$value = null;
$table = $_GET['bdd'];
$type = $_GET['type'];
$rownbr = (int)$_GET['rownbr'];

if(!empty($_FILES)){
    // il y a une image
    $imgtab = $_FILES['img1'];
    chargerclass('../class/', "ImgWorker");
    $imgworker = new ImgWorker('../img/');
    $imgpath = $imgworker->getBddPath($imgtab['name'], 'bdd');
    if($imgworker->ThrowImgOnServer($imgtab, $conn)){
        if($table === "Page"){
            $manager->updateSingleRow($table, $type, $imgpath, 1);
        }     
    }
}else{
    echo 'y';
    $value = $_POST['value'];
    $manager->updateSingleRow($table, $type, $value, $rownbr);
}
