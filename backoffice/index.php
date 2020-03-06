<!DOCTYPE html>
<?php
session_start();
//mdp crée avec password_hash("pass",PASSWORD_DEFAULT);
//require tout pour test le mdp
require '../src/AdminIdentification.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identification</title>
</head>
<body>
        <input type="text" name="username" id="username-identification"/>
        <input type="password" name="password" id="password-identification"/>
        <input type="submit" value="Submit" id="admin-identification"/>


<script type="text/javascript" src="./js/getPass.js"></script>
</body>
</html>