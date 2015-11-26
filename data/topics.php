<?php 


$pdo = include('connexion.php');

$request = $pdo->query("SELECT id, title from topics order by id");

$result = $request-> fetchAll( PDO::FETCH_ASSOC );

return $result;