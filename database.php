<?php 
$pdo = new PDO('mysql:host=localhost;dbname=db_petsuplies', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
