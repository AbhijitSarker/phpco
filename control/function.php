<?php
// function familyName($fname) {
//   echo "$fname Refsnes.<br>";
// }

// familyName("Jani");
// familyName("Hege");
// familyName("Stale");
// familyName("Kai Jim");
// familyName("Borge");

// function abc($i){

//   $i ="php";
// }
// $hi = "php5";
// abc($hi);
// echo $hi;

// function xyz(&$a){
//   $a="php";
// }
// $hello="this is php 5";
// xyz($hello);
// echo $hello;


function abc($num1, $num2){
  $num3 = $num1 + $num2;
  return $num3;
}
$a = abc(9,10);
echo "the value after adding the function $a";
?>