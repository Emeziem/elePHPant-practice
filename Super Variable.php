<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Super Global GET Variable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]?>">
        <label for="inputName">Name: </label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="submit">
    </form>
    <?php
    if (isset($_GET['name'])) {
        # code...
        echo "<strong>Hello, " . $_GET['name'] . "</strong>";
    }
    ?>
</body>
</html>