<?php
$sal = $_GET['sal'];
echo "Salary before bonus : $" . $sal . "<br />";

if ($sal > 850) {
    # code...
    $bonus = $sal * 0.1;
    echo "Bonus : $$bonus" . "<br />";
    // Calculate the bonus with the salary
    $sal += $bonus;
    echo "Total Salary: $$sal";    
}
?>