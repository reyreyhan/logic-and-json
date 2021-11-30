<?php 

$input = 30;
$output = [];

for ($i = 1; $i <= $input; $i++) {

    if ($i % 15 == 0) {
        $output[$i-1] = "FizzBuzz"; 
    } else if ($i % 5 == 0) {
        $output[$i-1] = "Buzz";
    } else if ($i % 3 == 0) {
        $output[$i-1] = "Fizz";
    } else {
        $output[$i-1] = $i;
    }

}

for ($i = 0; $i < $input; $i++) {
    echo $output[$i] . "<br>";
}

?>