<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Handaling In php</h1>
    <form style="margin-left: 10px;" action="formhandaling.php"  method="POST">
        <label for="">Full Name: <sup>*</sup></label> <br>
        <input type="text" name="name" placeholder="Input Name"> <br>

        <label for="">Email:<sup>*</sup></label> <br>
        <input type="email" name="email" placeholder="Input Email"><br>
      
        <label for="">Subject:<sup>*</sup></label> <br>
        <input type="text" name="subject" placeholder="Input Subject"><br>

        <label for="">Messege:<sup>*</sup></label> <br>
        <textarea name="messege" id="" cols="17" rows="5"></textarea> <br>

        <input type="submit" name="send" value="Send Messsege">
        <button type="reset">Reset</button>




    </form>
</body>
</html>