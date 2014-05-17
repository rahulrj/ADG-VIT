
<?php
$url = "https://academics.vit.ac.in/";
 
$raw = file_get_contents($url);

$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($raw));

$start = strpos($content,'<td bgcolor="#FFFFFF" valign="top" align="left" width="80%">');

$end = strpos($content,'td align="center" background="images/banner_bg3.jpg"',$start);
 
$table = substr($content,$start,$end-$start);
$table = preg_replace('|<!--(.*)-->|U', '', $table);

//echo"the table is {$table}";

//$table = substr($content,$start,$end-$start);

preg_match_all("|<ul(.*)</ul>|U",$table,$rows);
//echo $rows[0];

 
foreach ($rows[0] as $row){
    //echo $row;
 
	if ((strpos($row,'<th')==false)){
 
		preg_match_all("|<li(.*)</li>|U",$row,$cells);
        $y=max(array_map('count', $cells));

        
      for($i=0;$i<$y;$i++)
      {
          $k=$i;
		$number = strip_tags($cells[0][$i]);
       $names[$i]=$number;
       
        
      }
  	}
 
}
 
  print(json_encode($names));
?>
