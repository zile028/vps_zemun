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

function realUploadPath($path)
{
    return BASE_PATH . "upload/" . $path;
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

function redirectBack()
{
    header("Location: " . $_SERVER["HTTP_REFERER"]);
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

function dateDDMMYYY($date): void
{
    $date = new DateTime($date);
    echo date_format($date, "d.m.Y.");
}

function getExcerpt($content, $word_limit = 20)
{
    // Uklanja HTML tagove iz sadržaja
    $content = strip_tags($content);

    // Razdvaja sadržaj na reči
    $words = explode(' ', $content);

    // Ako sadržaj ima manje reči od ograničenja, vraća ceo sadržaj
    if (count($words) <= $word_limit) {
        return $content;
    } else {
        // Uzima samo prvi deo niza reči, do ograničenja reči
        $excerpt_words = array_slice($words, 0, $word_limit);
        // Spaja reči nazad u string
        $excerpt = implode(' ', $excerpt_words);
        // Dodaje "..." na kraju izvoda
        $excerpt .= '...';
        return $excerpt;
    }
}