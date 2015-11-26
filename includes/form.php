
<?php print_r($error); ?>
<h4>Nouveau topic</h4>
<form id="topic-form"method="post" action="libs/form-topics.php">
	<div class="form-row">
		<label for="new-topic">Saisie un nouveau topic</label>
		<input type="text" id="new-topic" name="topic" value="" placeholder="" />
		<div class = "error-message">
			<?php 
				if (!empty($error["topic"])) {
					echo $error["topic"] ;
				}
			?>
		</div>
	</div>	
	<div class="submit-label">	
		<input type="submit" value="Envoyer !" />
	</div>
</form>