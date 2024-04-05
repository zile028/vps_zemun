<?php

use Core\Response;
use Core\Session;

function dd($arg): void
{
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
    die();
}

function vd($arg): void
{
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
}

function authorize($condition, $status = Response::FORBIDDEN): void
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path): string
{
    return BASE_PATH . $path;
}

function uploadPath($src): void
{
    echo UPLOAD_DIR . $src;
}

function view($view, $params = []): void
{
    extract($params);
    require base_path("views/$view" . ".php");
}

function abort($statusCode = Response::NOT_FOUND): void
{
    view("$statusCode.php", ["heading" => "Error"]);
    die();
}

function redirect($path)
{
    header("Location: $path");
    exit();
}

function getOld($key, $default = "")
{
    return Session::get("old")[$key] ?? $default;
}

function isLogged()
{
    return Session::has("user");
}

function getUser($key)
{
    return Session::get("user")[$key];
}

function base_uri($path = "/")
{
    echo $path;
}