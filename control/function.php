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


// function abc($num1, $num2){
//   $num3 = $num1 + $num2;
//   return $num3;
// }
// $a = abc(9,10);
// echo "the value after adding the function $a";

// function abc($a="50"){
//   echo "value $a \n";
// }
// abc();
// abc(10);
// abc(100);

// function abc(){
//   echo "this is dynamic functon call";
// }

// $func = "abc";
// $func();

// $a=function (){
//   echo "this is a anonymous function";

// };
// $a();

// function abc(){
//   $a="php";
//   echo $a;
// }
// abc();
// echo $a;



function fact($n){
  if($n<0){
    return -1;}
  if($n==0){
    return 1;}
  return  ($n * fact($n-1));
}
echo fact(5);



?>