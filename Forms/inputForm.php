<!--A basic PHP form. Does not require a database-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic PHP FORM</title>
</head>
<body>
    

    <form action=" <?php $_SERVER['PHP_SELF'];?>" method= "post">
        Enter your name: <input type="text" name="name" />
        <input type="submit" />
    </form>

    <?php

    #returning the value we are outputting
        if(!empty($_POST['name'])){
            echo "Hello
            {$_POST['name']}, and Welcome.";
        }
    ?>
</body>
</html>