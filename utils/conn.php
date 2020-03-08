<?php
// connect to bdd
// $conn = new PDO('mysql:host=localhost;dbname=s4;charset=utf8', 'admin', 'pass');
$conn = new PDO('mysql:host=localhost;dbname=s4;charset=utf8', 'YooN', 'pass');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué

function chargerclass($dossier, $classname){
    require $dossier.$classname.".php";
}
