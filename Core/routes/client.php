<?php
$router->get("/", "home/index.php");
$router->get("/nastavno_osoblje", "nastavno_osoblje/index.php");
$router->get("/nastavno_osoblje/:id", "nastavno_osoblje/employer.php");
$router->get("/studije", "studije/index.php");


$router->get("/akreditacija", "/akreditacija/index.php");

$router->get("/login", "/auth/loginPage.php");
$router->get("/register", "/auth/registerPage.php");
$router->post("/register", "/auth/register.php");
$router->post("/login", "/auth/login.php");