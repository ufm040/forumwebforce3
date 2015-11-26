<?php

$pdo = include('data/connexion.php');
$title = $_POST['title'];
$topic_id = intval($_POST['topic_id']);
if ( empty($_POST['title']) || !trim($_POST['title']) )
{
	$error["topic"] = "Veuillez saisir un message !\n";
} else {

	$date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO messages ( creator_id, topic_id ,message, created ) VALUES ( ?, ?, ?,? );";
	$statement = $pdo->prepare($sql);
	$statement->execute([1,$topic_id ,$title, $date]);
}

header('Location:topic.php?id='.$topic_id);