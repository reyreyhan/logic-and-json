<?php 

    $input = 1900;
    $inputTwo = 2020;
    $difference = $inputTwo - $input;

    for ($i = 0; $i < $difference; $i++) {
        $input = $input + 1;
        if ($input % 4 == 0) {
            echo $input . "     ";
        }
    }

?>