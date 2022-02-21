<?php

namespace App\Controllers;

use App\Helper;

class ServerController 
{
    public static function getIndex() {
        
        echo file_get_contents(ROOT_PATH . '/views/index.phtml');
    }

    public static function findPlace($name) {
        $places = ApiController::getPlaces();
        strtolower($places);
        strtolower($name);
        $places = json_decode($places, true);

        $result = array_filter($places, function ($place) use ($name) {
            if (self::startsWith($place['code'], $name))
            return true;
        }, ARRAY_FILTER_USE_BOTH);

        $result = array_slice($result, 0, 9);
        
        echo self::buildResponse($result);
    }

    private static function startsWith( $haystack, $needle ) {
        $length = strlen( $needle );
        return substr( $haystack, 0, $length ) == $needle;
    }

    public static function findForecast($name) {
            $forecast = ApiController::getPlaceForecast($name);
            json_decode($forecast, true);
            echo self::buildResponse($forecast);
    }

    public static function buildResponse($data)
    {
        header('Content-Type: application/json; charset=utf-8');

        if (is_array($data)) {
            return json_encode($data);
        }

        return $data;
    }

}