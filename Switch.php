<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Switch Case</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $number = 20;

    switch ($number) {
        case 10:
            # code...
            echo "The value is $number";
            break;
        case 15:
            # code...
            echo "The value is $number";
            break;
        case 20:
            # code...
            echo "The value is $number";
            break;
        case 25:
            # code...
            echo "The value is $number";
            break;
        
        default:
            # code...
            echo "Search Deeper please";
            break;
    }

    // Ternary Operator
    $studentID = 9;
    // The question mark (?) acts as the if while
    // The colon (:) acts as the else.
    echo $studentID >= 10 ? "<br />You are correct" : "<br />Not correct";

    // Convert to if..else
    if ($studentID >= 12) {
        # code...
        "<br />You are correct";
    } else {
        # code...
        "<br />Not correct";
    }
    ?>
</body>
</html>