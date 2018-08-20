<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Integer Division</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $x = 10;
    $y = 3;
    $z = (int) ($x / $y);
    echo $z."\n"."<br />";
    // Divide function
    echo intdiv(8, 3)."\n"."<br />";

    // Spaceship operators
    $x = "Cat";
    $y = "Dog";
    echo ($x <=> $y)."\n"."<br />";

    // Null Coalescing Operator
    $name = $first_name ?? "Guest";
    echo $name;
    ?>
</body>
</html>