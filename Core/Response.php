<?php

namespace Core;
class Response
{
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const SERVER_ERROR = 500;
    const UNDER_CONSTRUCTION = 503;

    public static function send($data)
    {
        try {
            echo json_encode($data, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            echo self::SERVER_ERROR;
        }
    }
}