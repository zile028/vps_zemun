<?php

use Core\Router;
use Core\ValidationException;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
if (session_status()) {
    session_start();
}
const BASE_PATH = __DIR__ . "/";
//echo BASE_PATH;
//die();
require_once(BASE_PATH . "Core/functions.php");

spl_autoload_register(static function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path("$class.php");
});
require_once base_path("bootstrap.php");


$router = new Router();
require_once base_path("Core/routes.php");

$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

try {
    $router->route(parse_url($_SERVER["REQUEST_URI"]), $method);

} catch (ValidationException $exception) {
    Session::flash("errors", $exception->errors);
    Session::flash("old", $exception->old);
    redirect($router->previusUrl());
}

//echo json_encode([
//    "firstName" => "Dejan",
//    "lastName" => "Zivkovic",
//    "age" => 40
//]);