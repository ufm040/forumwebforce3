<?php

function build_messages($messages){
	if (count($messages)== 0) return "Pas de message sur ce topic";
	$message_html = "";
	foreach ($messages as $message) {
		$message_html .= sprintf('<tr>
				<td>%1$s</td>
				<td>%2$s</td>
				<td>%3$s</td>
			</tr>' , $message['id'] ,$message['created'] ,htmlentities($message['message'] ));
	}
	return $message_html;
}





?>