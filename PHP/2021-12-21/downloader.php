<?php

$source = "https://randomuser.me/api/?format=csv";
  
$data = file_get_contents($source);
   
$myfile = fopen("generatedFiles/blabla.csv", "w");
  
fwrite($myfile, $data);
  
fclose($myfile);

//OR======

function csv_recursive($arr, $map){
    foreach ($arr as $key => $val) {
        if (is_array($val)) {
            $map = csv_recursive($val, $map);
        } else {
            $map[$key] = $val;
        }
    }
    return $map;
}

function csvFinal($map){
    $keys = "";
    $values = "";
    foreach ($map as $key => $val) {
        $keys = $keys . $key . ",";
        $values = $values . $val . ",";
    }
    return $keys . "\n" . $values;
}

$source2 = "https://randomuser.me/api/";
$data2 = file_get_contents($source2);
$json = json_decode($data2, true);
$map=array();
$keyValue = csv_recursive($json, $map);
$final = csvFinal($keyValue);
$myfile2 = fopen("generatedFiles/blabla2.csv", "w");
fwrite($myfile2, $final);
fclose($myfile2);
  
?>