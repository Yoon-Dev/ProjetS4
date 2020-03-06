<?php

function checkAcces(string $redirect)
{
    
   if(!$_SESSION['acces']){
        header("Location: ".$redirect);
        exit();
        echo "acces denied";
    } 

}
