<?php 
$dsn = 'mysql:host=localhost;dbname=forum';
$username='root';
$pdo = new PDO($dsn,$username);

$error = [];

if ( $_POST ) {
	if (empty($_POST['topic'])) {
		$error['topic'] = "le champ Topic est manquant !\n";
		;
		exit();
	}
}

$creator_id = 1 ;
$created = date ('Y-m-d H:i:s');
$topic = $_POST['topic'] ;

$request = "INSERT INTO `topics` (`creator_id`, `title`, `created`) VALUES ($creator_id,'$topic','$created');";

$result = $pdo->query($request);
if (! $result) {
	die(" Erreur sur la requête : " .$request );
} else {
	echo " requete OK " .$request .'</br>';
}