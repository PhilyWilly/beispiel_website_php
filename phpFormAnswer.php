<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Answer</title>
</head>
<body>
    <?php 
        $user_name = $_POST['user_name'];
        $user_age = $_POST['user_age'];
        echo("Der User " . $user_name . " ist " . $user_age . " Jahre alt!");
    ?>
</body>
</html>