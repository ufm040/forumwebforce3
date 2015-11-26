<?php

function build_html_menu($menu){
	$lien =  "\t" ."<ul>\n";
	foreach ($menu as $key => $value) {
		$lien .= sprintf(
			"\t\t\t" .'<li><a href="%1$s" target="%3$s" title="%2$s">%2$s</a></li>' ."\n",
			$value['url'],
			$value['title'],
			$value['new'] ? '_blank' : ''
		);			
	}
	$lien .=  "\t\t" ."</ul>\n";

	return $lien;
}




?>