<?php 

    $nameErr = $emailErr  = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["name"])){
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if(empty($_POST["email"])){
            $emailErr = "Email is required";
        } else{
            $email = test_input($_POST["email"]);
        }

        if(empty($_POST["gender"])){
            $genderErr = "Gender is required";
        } else{
            $gender = test_input($_POST["gender"]);
        }

        if(empty($_POST["website"])){
            $websiteErr = "Gender is required";
        } else{
            $gender = test_input($_POST["gender"]);
        }
        
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Required</title>
</head>
<body>
    <h1>Student Information Form</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        Name: <input type="text" name="name">
        E-mail: <input type="text" name="email">
        Website: <input type="text" name="website">
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        
        Gender:<input type="radio" name="gender" value="female">Female
               <input type="radio" name="gender" value="male">Male
               <input type="radio" name="gender" value="other">Other


    </form> 
    
</body>
</html>