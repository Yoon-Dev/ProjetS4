<!DOCTYPE html>
<?php
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
    <form>
        <input type="text" name="username"/>
        <input type="password" name="password"/>
        <input type="submit" value="Submit"/>
    </form>
    

</body>
</html>