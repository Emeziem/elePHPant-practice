<?php
$money = $_GET["naira"];
$submit = $_GET["submit"];
// $coins = $_GET["dollar"];

if (isset($submit)) {
    # code...
    echo "Naira: &#8358;$money" . "<br />";
    echo "Dollar: $361.00" . "<br />";
    // Exchange rate
    $exchange = $money * 361.00;
    echo "Converted in Naira: &#8358;$exchange";
}
?>