<?php

function vardumpBooks($books) {
    foreach ($books as $key => $value) {
        foreach ($value as $subValue) {
            var_dump($subValue);
        }
    }
}

function bookYearAvarage($books) {
    $avarageSum = 0;
    $avarageAmount = 0;
    foreach ($books as $key => $value) {
        if ($key == 'Year') {
            foreach ($value as $subValue) {   
                $avarageSum += $subValue; 
                $avarageAmount++;
            }
        }
    }
    return $avarageSum/$avarageAmount;
}

$books = [
    'Title' => ['Trys parseliai', 'Haris poteris', 'Mazasis princas'],
    'Author' => ['Jonas Kazimieras', 'Astrida Lindgren', 'Foo Baris'],
    'Year' => [1990, 1999, 2005],
    'Genre' => ['Children literature', 'Fantasy', 'Science fiction'],
];

vardumpBooks($books);
echo '<br><br>';
echo bookYearAvarage($books);
