<?php
$arr = [
    'lt' => ['Pirmadienis', 'Antradienis', 'Treciadienis', 'Ketvirtadienis', 'Penktadienis', 'Sestadienis', 'Sekmadienis'],
    'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
echo "{$arr['lt'][0]}, {$arr['en'][2]} <br> <br>";
?>

<html>
    <body>
        <h3>Enter your preferred language to show current day:</h1>

        <form action="" method="post">
            Language: <input name="weekDay" type="text" />
            <input name="submit" type="submit" />
        </form>
    </body>
</html>

<?php
function dayPrinter ($arr, $lang) {
    $today = date("l");
    if ($lang == 'en') {
        echo "Today's weekday is $today";
    }
    else if ($lang == 'lt'){
        echo 'Šiandien yra ';
        $index = array_search($today, $arr['en']);
        echo $arr['lt'][$index];
    }
    else {
        echo 'You have to enter \'en\' or \'lt\'';
    }
}
if (isset($_POST['submit'])) {
    $lang = $_POST['weekDay'];
    dayPrinter($arr, $lang);
}