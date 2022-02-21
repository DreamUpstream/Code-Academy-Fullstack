<?php

namespace App\Controllers;

class ApiController 
{
    public static function getPlaces() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.meteo.lt/v1/places");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public static function getPlaceForecast($name) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.meteo.lt/v1/places/{$name}/forecasts/long-term");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}
