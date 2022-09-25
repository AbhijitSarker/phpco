<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h1>arrays in php</h1>

<?php

// indexed array
//     $country = array('usa', 'uk', 'germeny', 'canada');

//     echo $country[2];

//     $countries = array();
//     $countries[0] = 'cchina';
//     echo $countries[0];

//associated array

// $country=array('usa'=>1, 'uk'=>2, "uae"=>3);
// print_r( $country);

// $countries=array('usa'=>1, 'uk'=>2, 'uae'=>3);

// foreach ($countries as $a => $a_value){
//     echo 'key='.$a.' value='.$a_value;
//     echo '<br>';
// }

// $num =array(12,4,655,23,46,10,7,67);
// sort($num);

// $array = count($num);
// for($x=0; $x<=$array; $x++){
//     echo $num[$x].'<br>';
    
// }
?>

<table align="left" border="2" cellpadding ></table>
<?php 
for($i=1; $i<=3; $i++){
    echo "<tr>";
    for($j=1; $j<=2; $j++){
        echo "<td> $i * $j="."</td>";
    }
}


?>
</table>


</body>
</html>