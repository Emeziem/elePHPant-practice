<?php
echo "<strong>Mathematical Functions in  PHP</strong>";
echo "<br />";
echo "<br />";

echo "The absolute value of 100 is: ";
echo abs(100);
echo "<br />";
echo "<br />";

echo "The nearest integer of 99.6 is: ";
echo round(99.6);
echo "<br />";
echo "<br />";

echo "The largest number from 99.6, 9.9999 and 99.9 is: ";
echo max(99.6, 9.9999, 99.9);
echo "<br />";
echo "<br />";

echo "The smallest number from 99.6, 9.9999 and 99.9 is: ";
echo min(99.6, 9.9999, 99.9);
echo "<br />";
echo "<br />";

echo "Converting to uppercase: ";
echo strtoupper("php");
echo "<br />";
echo "<br />";

echo "Converting to lowercase: ";
echo strtolower("PASCAL");
echo "<br />";
echo "<br />";

// ASCII keys are in hexadecimal
// Space is 20 in ASCII
echo "The ASCII value of A with Space is: ";
echo bin2hex("A ");
echo "<br />";
echo "<br />";

echo "The reverse of the term ECNALUBMA is: ";
echo strrev("ECNALUBMA");
echo "<br />";
echo "<br />";

// Setting timezone
date_default_timezone_set('Asia/Calcutta');
echo "Today is: " . date("1");

// Getting the current month
$Today_Date = getdate();

$current_month = $Today_Date['month'];

echo "<br />";

echo "Current Month is: ";

echo $current_month;
?>