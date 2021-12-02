<?php
$arr = [
    'lt' => ['Pirmadienis', 'Antradienis', 'Treciadienis', 'Ketvirtadienis', 'Penktadienis', 'Sestadienis', 'Sekmadienis'],
    'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
echo "{$arr['lt'][0]}, {$arr['en'][2]} <br>";
$lang = 'lt';
function dayPrinter ($arr, $lang) {
    $today = date("l");
    if ($lang == 'en') {
        echo "Today's date is $today";
    }
    else {
        echo 'Šiandien yra ';
        $index = array_search($today, $arr['en']);
        echo $arr['lt'][3];
    }
}
dayPrinter($arr, $lang);