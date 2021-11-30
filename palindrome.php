<?php 

    $word = "Radar";
    $word = strtolower($word);

    if ($word == strrev($word)) {
        echo "Palindrome";
    } else {
        echo "not Palindrome";
    }

?>