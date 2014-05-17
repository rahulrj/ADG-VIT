<?php

$indi=call("i great rahul","rahul");
echo $indi[0];




function call($haystack,$needle){
    echo"here";
$indices=array();
echo "oo";

while($index=strpos($haystack,$needle)) 
{
    
    $indices[]=$index;
    break;

}

return $indices;


}

?>