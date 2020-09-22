<?php 
$db = new PDO('mysql:host=localhost; dbname=jsp; charset=utf8', 'david', 'zxcv1234');
$rows = $db->query("SELECT * FROM inquiry")->fetchAll(PDO::FETCH_OBJ);
?>