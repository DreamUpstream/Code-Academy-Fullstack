<?php
    if(!isset($_POST['testData'])) {
        echo "Request was denied. Please post your user correctly.";
        exit;
    }

    function arrayMultiline($arr, $map){
        foreach ($arr as $key => $val) {
            if (is_array($val)) {
                $map = arrayMultiline($val, $map);
            } else {
                $map[$key] = $val;
            }
        }
        return $map;
    }
    
    function commaResult($map){
        $keys = "";
        $values = "";
        foreach ($map as $key => $val) {
            $keys = $keys . $key . ",";
            $values = $values . $val . ",";
        }
        return $keys . "\n" . $values;
    }

    function checkIfExists($username) {
        $dir = new DirectoryIterator(dirname(__FILE__) . "/userFiles");
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                if($fileinfo->getFilename() == $username . ".txt") {
                return true;
                }
            }
        }
        return false;
    }
    
    $json = json_decode($_POST['testData'], true);
    $map=array();
    $keyValue = arrayMultiline($json, $map);
    $final = commaResult($keyValue);
    $username = $keyValue["username"];
    echo "Hi, ". $username;
    if(!checkIfExists($username)) {
        $myfile = fopen("userFiles/" . $username . ".txt", "w");
        fwrite($myfile, $final);
        fclose($myfile);
    } else {
        echo "<br> Sorry, but your user already exist.";
    }
?>