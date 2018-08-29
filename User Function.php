<?php
// Defining function
function today() {
    // mktime means bringing time
    echo "Today is " . date('l', mktime());
}

// Calling function
today();
?>