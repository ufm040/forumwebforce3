<?php 


$pdo = include('connexion.php');
if (!empty($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}
$pageSize = 5;
$offset =($page - 1) * $pageSize;
print_r($offset);

// préparation de la requête
$requestList = $pdo->prepare(sprintf(
	// regarder la doc de sprintf pour la signification des %1$s
	'SELECT * FROM messages WHERE topic_id = ? ORDER BY CREATED DESC LIMIT %1$u, %2$u;',
	$offset,
	$pageSize
));
	
// exécution de la requête avec le paramètre id.
$requestList->execute([$_GET['id']]);


// récupère les données
$result = $requestList-> fetchAll( PDO::FETCH_ASSOC );

// récuperer le nombre total de messages du topic courant 
$requestCount = $pdo->prepare(sprintf(
	// regarder la doc de sprintf pour la signification des %1$s
	'SELECT count(*) as count FROM messages WHERE topic_id = ? '
));
$requestCount->execute([$_GET['id']]);
$total = $requestCount-> fetchAll( PDO::FETCH_ASSOC )[0]['count'];

return [
	"list" => $result,
	"total" => $total
];