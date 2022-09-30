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



// function fact($n){
//   if($n<0){
//     return -1;}
//   if($n==0){
//     return 1;}
//   return  ($n * fact($n-1));
// }
// echo fact(5);


// PHP code to check if a given
// year is leap year
 
  function checkYear($year)
    {
      // If a year is multiple of 400,
      // then it is a leap year
      if ($year % 400 == 0)
          print("Leap Year");
          
      // Else If a year is multiple of 100,
      // then it is not a leap year
      else if ($year % 100 == 0)
          print("Not a Leap Year");
              
      // Else If a year is multiple of 4,
      // then it is a leap year
      else if ($year % 4 == 0)
          print("Leap Year");
          
      else
          print("Not a Leap Year");
    }
  
  // Driver code
  $year = 2003;
  
  checkYear($year);
     
// This code is contributed by ash264


?>