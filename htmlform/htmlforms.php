<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact us HTML form</h1>
    <form action="post">
        <p>
            <label for="inputName">Name:</label> <br>
            <input type="text" name="name" id="iputName">
        </p> 
        <p>
            <label for="inputEmail">Email Address:</label> <br>
            <input type="email" name="email" id="inputEmail">
        </p> 
        <p>
            <label for="inputSub">Subject:</label> <br>
            <input type="text" name="subject" id="inputSub">
        </p> 
        <p>
            <label for="inputMsg">Messege:</label> <br>
            <textarea name="messege" id="inputMsg" cols="30" rows="10"></textarea>
        </p> 
        <input type="submit" value="Submit">

        <h1>Resgistration Form</h1>
        <p>
            <label for="inputFullName">Full Name:</label>  <br>
            <input type="text" name="Name" id="inputFullName">
        </p> 
        <p>
            <label for="inputEmail">Email:</label> <br>
            <input type="email" name="Email" id="inputEmail">
        </p>
        <p>
            <label for="inputPass">Password:</label> <br>
            <input type="password" name="Pass" id="inputPass">
        </p>
        <input type="submit" value="Submit">
        <button type="reset" value="Reset">Reset</button>


    
    
    
    </form>


    
</body>
</html>