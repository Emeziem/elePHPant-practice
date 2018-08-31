<?php
// Defining function
function today() {
    // mktime means bringing time
    echo "Today is " . date('l', mktime());
}

// Calling function
today();

// Parameterized function
function square($AndroidClass) {
    return $AndroidClass * $AndroidClass;
}

echo "<br />" . square(100);

function addition() {
    $A = 100;
    $B = 200;
    $C = $A + $B;

    echo "<br />" . "The sum of 100 and 200 is: $C";
}

addition();

echo "<br />";

// Declare a function
function display() {
    echo "LEARNING PHP IS FUN" . "<br />";
}

echo display();

function subtraction($A, $B) {
    $C = $A - $B;
    echo "<br /> The difference of $A and $B is: $C";
}

subtraction(90, 45);

echo "<br />";

// Passing argument by reference
function Squares(&$A) {
    $A = $A * $A;
    echo "$A";
}

// Assigning value outside the function
$A = 5;

echo "The Square of $A is: ";

Squares($A);

echo "<br />";

function multiplication(&$A, &$B) {
    $C = $A * $B;
    echo "<br /><br /> The multiplication of $A and $B is: $C";
}

$A = 25;
$B = 30;

multiplication($A, $B);

echo "<br /><br />";

/* Defining a function that multiply a number 
   by itself and return the new value */
function selfMultiply(&$number) {
    $number *= $number;
    return $number;
}
$mynum = 5;

echo "First Output is: " . $mynum;

echo "<br />";

selfMultiply($mynum);

echo "Second Output is: " . $mynum;
?>