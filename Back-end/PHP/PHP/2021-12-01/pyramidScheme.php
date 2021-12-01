<?php

    function pyramid1 () {
        $answer = '';
        for ($x = 1; $x <= 9; $x++) {
            for ($j = 0; $j < $x; $j++) { 
                $answer .= "$x";
            }
            $answer .= '<br>';
          }
        return $answer;
    }
    function pyramid2 () {
        $i = 0;
        $answer = '';
        while ($i < 10){
            $answer .= str_repeat("$i", $i)."<br>";
            $i++;
        }
        return $answer;
    }

    echo pyramid1();
    echo pyramid2();

?>