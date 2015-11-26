<?php include('includes/top.php'); 
	include "libs/messages.php";
	$pdo = include('data/connexion.php');
	$title = include('data/title-topic.php');
	$data_message = include('data/messages.php') ;

	$the_id = $_GET['id'] ;

?>

<h3> Liste des messages du topic : " <?php echo  $title['title'] ?> "</h3>

<table>
	<tr>
		<td>Id</td><td>Date</td><td>Message</td>
	</tr>
<?php echo build_messages($data_message['list']); ?>
</table>
<div id="button">
	<?php if($page > 1) { ?> 
		<a id="left" href="topic.php?id=<?= $_GET['id']?>&page=<?=$page - 1 ?>"/><<</a>
	<?php } ?>	
	<?php if (($page *$pageSize) <= $data_message['total']  ) { ?> 
		<a id="right" href="topic.php?id=<?= $_GET['id']?>&page=<?=$page + 1 ?>"/>>></a>
	<?php } ?>	
</div>

<form id="topic-form"method="post" action="messages.add.php">

	<h4>Saisir un message</h4>
	<div class="form-row">
		<label for="new-topic">message</label>
		<input type="texte" id="new-topic" name="title" value="" placeholder="" />
		<input type="hidden" name="topic_id" value="<?php echo $the_id?>"/>

		<div class = "error-message">
			<?php 
				if (!empty($error["topic"])) {
					echo $error["topic"] ;
				} else {
					echo " pas erreur " ;
				}
			?>
		</div>
	</div>	
	<div class="submit-label">	
		<input type="submit" value="Envoyer !" />
	</div>
</form>

<?php include('includes/bottom.php'); ?>