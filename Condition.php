<?php
$phone1 = "Red";
$phone2 = "Green";
$person = $phone1 && $phone2;
if (($person == $phone1) && ($person == $phone2)) {
    echo "You met the color requirements.";
} elseif ($person) {
    # code...
    $color = yellow;
    echo "You have a new color which is $color";
} else {
    echo "You just met one requirement.";
}
?>