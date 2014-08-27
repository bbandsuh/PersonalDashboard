<?php
$html = "";
$url = "http://blog.cleveland.com/realtimenews/atom.xml";
$xml = simplexml_load_file($url);
$lastupdate = $xml->title->updated;
$html = "<p>";
/*
for($i = 0; $i < 10; $i++){	
	$title = $xml->title->entry[$i]->title;
	$link = $xml->title->entry[$i]->link;
	$html .= "<a href='$link'><small>$title</small></a><br>";	
}
*/
$html .= "</p>$lastupdate";
echo $html;
?>
