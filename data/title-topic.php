<?php 


$pdo = include('connexion.php');

$the_id = intval($_GET['id']);

$ma_req = 'SELECT id, title from topics where id = '.$the_id ; 

$request = $pdo->query($ma_req);

$result = $request-> fetch( PDO::FETCH_ASSOC );

return $result;