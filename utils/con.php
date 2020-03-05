<?php
// connect to bdd

$conn = new PDO('mysql:host=localhost;dbname=RessourceManager;charset=utf8', 'YooN', 'pass');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échouéconn
function chargerclass($classname, $dossier){
    require $dossier.$classname.".php";
}
