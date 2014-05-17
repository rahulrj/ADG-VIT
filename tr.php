<html>
<head>
</head>
<body>

<?php
$url = "http://www.nfl.com/teams/sandiegochargers/roster?team=SD";
 
$raw = file_get_contents($url);

$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($raw));

$start = strpos($content,'<table id="result" style="width:100%"');
$end = strpos($content,'</table>',$start) + 8;
 
$table = substr($content,$start,$end-$start);

//$table = substr($content,$start,$end-$start);

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
echo $rows[0];
 
foreach ($rows[0] as $row){
 
	if ((strpos($row,'<th')==false)){
 
		preg_match_all("|<td(.*)</td>|U",$row,$cells);
 
		$number = strip_tags($cells[0][0]);
 
		$name = strip_tags($cells[0][1]);
 
		$position = strip_tags($cells[0][2]);
 
		echo "{$position} - {$name} - Number {$number} <br\n";
 
	}
 
}
 
?>
</body>
</html>