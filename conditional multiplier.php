<?php 
$result = 0;

function bonusTime($salary, $bonus)
{
    if ($bonus) {
        $result = '$' . $salary * 10;
    } else {
        $result = '$' . $salary;
    }
    return $result;
}

echo bonusTime(200, true);

?>