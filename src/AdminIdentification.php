<?php
$_SESSION['acces'] = false;

require '../utils/conn.php';

chargerclass('../class/', 'Manager');
$manager = new Manager($conn);
