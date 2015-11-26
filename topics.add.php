<?php

$pdo = include('data/connexion.php');
$title = $_POST['title'];

if ( empty($_POST['title']) || !trim($_POST['title']) )
{
	$error["topic"] = "Veuillez saisir un topic !\n";
	var_dump($error["topic"]);
} else {

	$date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO topics ( creator_id, title, created ) VALUES ( ?, ?, ? );";
	$statement = $pdo->prepare($sql);
	$statement->execute([1, $title, $date]);
}

header('Location:topics.php');