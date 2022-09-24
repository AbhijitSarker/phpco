<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contactback.php" method="post">
        <label for="Inputname">Fullname<sup>*</sup></label>
        <input type="text" name="name" id="inputname">
            <br>
        <label for="Inputemail">Email<sup>*</sup></label>
        <input type="email" name="email" id="inputemail">
           <br>
        <label for="Inputsubject">Subject<sup>*</sup></label>
        <input type="text" name="subject" id="inputsubject">
           <br>
        <label for="inputmessege">Messege<sup>*</sup></label>
        <textarea name="messege" id="inputmessege" cols="30" rows="10"></textarea>    
            br
        <input type="submit" value="submit">
        <input type="reset" value="reset">

    </form>
    
</body>
</html>