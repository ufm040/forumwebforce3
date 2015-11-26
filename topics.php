<?php

include "includes/top.php";
include "libs/topics.php";
global $error;

echo '<h2> Topic </h2>'; ?>



<form id="topic-form"method="post" action="topics.add.php">

	<h4>Créer un nouveau topic</h4>
	<div class="form-row">
		<label for="new-topic">Topic</label>
		<input type="text" id="new-topic" name="title" value="" placeholder="" />
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
	<p>Merci !</p>
</form>

<?php
echo build_topics(include('data/topics.php')); 
include "includes/bottom.php";
?>