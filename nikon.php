<?php
$html = "";
$url = "http://feeds.feedburner.com/NikonRumors?format=xml";
$xml = simplexml_load_file($url);
$lastupdate = $xml->channel->lastBuildDate; 
$html = "<p>";
for($i = 0; $i < 10; $i++){	
	$title = $xml->channel->item[$i]->title;
	$link = $xml->channel->item[$i]->link;
	$html .= "<a href='$link'><small>$title</small></a><br>";	
}
$html .= "</p>$lastupdate";
echo $html;
?>
