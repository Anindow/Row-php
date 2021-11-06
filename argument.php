<?php 
/*function testing(&$string){
$string .=" and somthing extra.";
}
$str ="this is string";
testing($str);
echo $str;
*/
function first($num){
    $num += 5;
}
function secound(&$num){
     $num +=7;
}
$number =10;
first($number);
echo "Original value is $number";

secound($number);
echo "<br>Original value is $number";
 ?>

