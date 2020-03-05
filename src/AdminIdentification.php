<?php
require '../utils/conn.php';

chargerclass('../class/', 'Manager');
$manager = new Manager($conn);
