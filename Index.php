<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Our First Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>First Head</h1>
    <?php
    // gmdate("M d Y") M displays the current month
    // d displays the current date
    // Y displays 4 digits of the current year
        echo gmdate("M d Y");
        // Use the dollar sign to create variables
        $Aptech = "<br />You are welcome to PHP Class";
        // Print out the statement
        echo $Aptech;
    ?>
</body>
</html>