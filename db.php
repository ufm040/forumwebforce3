<?php 

// création de l'objet pdo 
// => il va appeler le constructeur de la classe conrespondante (__construct() : méthode magique)

$dsn = 'mysql:host=localhost;dbname=forum';
$username='root';
$pdo = new PDO($dsn,$username);

// requête à la base de données :

$tab_req =[
/*	"DELETE FROM messages;",
	"DELETE FROM topics;",
	"DELETE FROM users;",
	"DELETE FROM menus;",
	"ALTER TABLE messages AUTO_INCREMENT = 1;",
	"ALTER TABLE topics AUTO_INCREMENT = 1;",
	"ALTER TABLE users AUTO_INCREMENT = 1;",
	"ALTER TABLE menus AUTO_INCREMENT = 1;",*/
	"INSERT INTO `users` (`email`, `password`, `birthday`) VALUES
	( 'user1@user.com', 'user1', '1990-01-01' ),
	( 'user2@user.com', 'user2', '1980-01-01' ),
	( 'user3@user.com', 'user3', '1970-01-01' );",
	"INSERT INTO `topics` (`creator_id`, `title`, `created`) VALUES
	( 1, 'title1', '1990-01-01 00:00:01' ),
	( 2, 'title2', '1980-01-01 00:00:01' ),
	( 3, 'title3', '1970-01-01 00:00:01' );",
	"INSERT INTO `messages` (`creator_id`, `topic_id`, `message`, `created`) VALUES
	( 1, 1, 'title1', '1990-01-01 00:00:01' ),
	( 2, 2, 'title2', '1980-01-01 00:00:01' ),
	( 3, 3, 'user3@user.com', '1970-01-01 00:00:01' );",
	"INSERT INTO `menus` (`url`, `title`, `new`) VALUES
	(  './', 'Accueil' , false ),
	(  'topics.php', 'TOPICS' , false ),
	(  'logout.php', 'DECONNEXION' , false ),
	(  'profile.php', 'PROFIIL' , false );",	
	"UPDATE users SET password = CONCAT(id, '-', email);",
	"UPDATE topics  SET title = CONCAT('topic-', id);",
	"UPDATE messages SET message = CONCAT('message-', creator_id, id);",
] ;



foreach ($tab_req as $key => $value) {
	$result = $pdo->query($value);
	if (! $result) {
		die(" Erreur sur la requête : " .$value );
	} else {
		echo " requete OK " .$value .'</br>';
	}
}

echo " Toutes les requêtes se sont bien exécutés !";







