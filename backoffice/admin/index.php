<?php
session_start();
require "../../utils/checkAcces.php";
require '../../utils/conn.php';
checkAcces("../");
chargerclass("../../class/", "Manager");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identification</title>
</head>
<body>
    
<div>
  <?php require "./component/page.php"?>  
</div>
<div>
  <?php require "./component/avis.php"?>  
</div>

    
<script type="text/javascript" src="../js/bindBdd.js"></script>
</body>
</html>