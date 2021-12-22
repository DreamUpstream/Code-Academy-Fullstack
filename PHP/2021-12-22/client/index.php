<?php

define("IP", "192.168.1.209"); // CHANGE YOUR IP HERE

function curl_download($Url){
    if (!function_exists('curl_init')){
      die('Sorry cURL is not installed!');
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $output = curl_exec($ch);
    curl_close($ch);

    return $output;
  }

function curl_post($data) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'http://' . IP . ':8081/2021-12-22/server/index.php');
    $postData = array(
        'testData' => $data,
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    $response = curl_exec($ch);

    echo($response);
}

$url = "https://randomuser.me/api/";
curl_post(curl_download($url))
?>