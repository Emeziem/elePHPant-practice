<?php
// Using ceil() functions
echo "Using ceil(value) function <br />";
echo ceil(4.2);
echo "<br />";
echo ceil(9.99);
echo "<br />";
echo ceil(-5.99);
echo "<br />";

echo "<br /><br />Using floor(value) function <br />";
echo "<br />";

// Using floor() functions
echo floor(4.2);
echo "<br />";
echo floor(9.99);
echo "<br />";
echo floor(-5.18);
echo "<br />";

echo "<br /><br /> Using Square Root(value) function <br />";

echo sqrt(9);
echo "<br />";
echo sqrt(25);
echo "<br />";
echo sqrt(10);
echo "<br />";
echo sqrt(-16);
echo "<br />";

echo "<br />Using Random Number with the rand() function in PHP <br />";
echo rand() . "<br />";
echo rand() . "<br />";

// Random numbers are used by banks to generate bank tokens, purchaseID, reference numbers etc
// whuch is then stored on the cookie.
echo "<br />Using Random Number with the rand() function that has value in PHP <br />";
echo rand(10, 60) . "<br/ >";
echo rand(20, 80) . "<br/ >";

echo "<br />Converting decimal numbers to binary and vice versa <br />";
// Change from decimal to binary
echo decbin(2) . "<br/ >";
// Change from binary to decimal.
echo bindec(110) . "<br/ >";
echo bindec(1100) . "<br/ >";
echo bindec(1100100) . "<br/ >";

echo "<br />Converting decimal numbers to hexadecimal and vice versa <br />";
echo dechex(255) . "<br/ >";
echo dechex(195) . "<br/ >";
echo dechex(0) . "<br/ >";
// Convert from hex to decimal
echo hexdec('f1') . "<br/ >";
echo hexdec('ff') . "<br/ >";
echo hexdec('c4') . "<br/ >";
echo hexdec(0) . "<br/ >";

echo "<br />Converting decimal to octal and vice versa<br />";
echo decoct(12) . "<br/ >";
?>