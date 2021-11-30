<?php 
// Referensi
// https://stackoverflow.com/questions/5020202/creating-an-array-from-a-string-separated-by-spaces
// https://www.w3schools.com/php/func_string_strrev.asp


    $word = "I am A Great human";
    $wordExplode = explode(" ", $word);
    $wordReverse = "";

    for ($i = 0; $i < count($wordExplode); $i++) {
        $wordReverse = $wordReverse . strrev($wordExplode[$i]) . " ";
    }

    echo $wordReverse;


?>