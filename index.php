<?php
    // echo "Hello Ninja";
    define('NAME', 'mario');
    $name="Yoshi";
    $age=20;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first PHP file</title>
</head>
<body>
    <h1>User Profile Page</h1>
    <div><?php echo $name ?></div>
    <div><?php echo $age ?></div>
    <div><?php echo NAME ?></div>
</body>
</html>