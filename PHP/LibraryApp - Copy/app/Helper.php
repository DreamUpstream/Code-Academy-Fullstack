<?php

namespace App;

class Helper
{
    /**
     * @param array $data
     * @return string
     */
    public static function buildResponse(array $data): string
    {
        header('Content-Type: application/json; charset=utf-8');

        return json_encode($data);
    }

    /**
     * @param string $message
     * @param bool $status
     * @param array $optional
     * @return string
     */
    public static function buildResponseMessage(string $message, bool $status, array $optional = []): string
    {
        $response = [
            'status' => $status,
            'message' => $message
        ];

        if ($optional) {
            $response = array_merge($response, $optional);
        }

        header('Content-Type: application/json; charset=utf-8');

        return json_encode($response);
    }
}