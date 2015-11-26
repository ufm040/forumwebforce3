<?php

function build_topics($menu){
	$lien =  "\t" ."<ul>\n";
	foreach ($menu as $key => $value) {
		$lien .= sprintf(
			"\t\t\t" .'<li id="%1s"><a href="topic.php?id=%2s">%3s</a></li>'."\n",
			$value['id'],
			$value['id'],
			htmlentities($value['title'])			
			);

	}
	$lien .=  "\t\t" ."</ul>\n";

	return $lien;
}

function recursive_build_topics($menu){
	$lien =  "\t" ."<ul>\n";

}


?>