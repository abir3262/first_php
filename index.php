<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Prject</title>
</head>
<body>
    <?php
        include("navbar.php");
        include("body.php");
        include("footer.php");
    ?>


    <form action ="server.php" method="post">
        <input type="text"placeholder="Enter name" id="name"name="name" value="">
        <input type="num"placeholder="Enter age" id="age"name="age" value="">
        <input type="text"placeholder="Enter address" id="address"name="address" value="">
        
        
        <button type="submit">
            Add user DB
        </button>
    </form>
</body>
</html>