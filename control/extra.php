<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>extra knowlwdge</h1>
    <?php
    // for($i=1; $i<10; $i++){
    //     if($i==5){
    //         continue;
    //     }
    //   echo $i;
    //   echo "<br>";
    // }

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

function is_leap_year($year){
  if($year % 400 == 0){

    echo "this is leap year";
  }
  elseif($year % 100 == 0){
    echo "this is not leap year";
  }
  elseif($year % 4){
    echo "this is leap year";
  }
  else{
    echo "this is not leap year";
  }
}


    echo (abs(-7)."<br>"); 
    echo (ceil(5.5)."<br>");
    echo (ceil(5.3)."<br>");
    echo (ceil(5.6)."<br>");



    ?>
</body>
</html>