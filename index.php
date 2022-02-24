<?php

$numbers = array(1, 2, 3, 4, 5);

foreach ($numbers as $value) {
    echo "Value is $value <br />";
}

$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach ($numbers as $value) {
    echo "Value is $value <br />";
}
?>
<?php
$salaries = array(
    "mohammad" => 2000,
    "qadir" => 1000,
    "zaria" => 500,
);
echo "salary of mohammad is " . $salaries['mohammad'] . '<br/>';
?>
<?php
$marks = array(
    "mohammad" => array(
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39,
    ),
    "qadir" => array(
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29,
    ),
    "zara" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39,
    ),
);
echo "Marks for mohammad in physics : ";
echo $marks['mohammad']['physics'] . "<br/>";
?>
<br><?php
$array = array(
    'amzuni.com',
    'website hoc lap trinh online',

);
print_r(array_pop($array));
?>
<br><?php
$array = [5,4,3,2,1];
sort($array);
print_r($array);
?>