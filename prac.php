

<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/web-programming/php/extracting-content-between-two-delimiters.html
*/

function extract_unit($string, $start, $end)
{
$pos = stripos($string, $start);

$str = substr($string, $pos);

$str_two = substr($str, strlen($start));

$second_pos = stripos($str_two, $end);

$str_three = substr($str_two, 0, $second_pos);

$unit = trim($str_three); // remove whitespaces

return $unit;
}
$text = 'PHP is an acronym for for PHP: Hypertext for  Preprocessor.';

$unit = extract_unit($text, 'an', 'for');

// Outputs: acronym
echo $unit;
?>