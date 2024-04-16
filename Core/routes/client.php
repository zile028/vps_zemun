<?php
$router->get("/", "home/index.php");
$router->get("/nastavno_osoblje", "nastavno_osoblje/index.php");
$router->get("/nastavno_osoblje/:id", "nastavno_osoblje/employer.php");
$router->get("/studije", "studije/index.php");
$router->get("/studije/:id", "studije/studije_single.php");
$router->get("/dokumenta/:kategorijaID", "dokumenta/index.php");
$router->get("/onama/cenovnik", "onama/cenovnik.php");
$router->get("/onama/projekti", "onama/projekti.php");
$router->get("/onama/:odborID", "onama/odbor.php");


$router->get("/akreditacija", "/akreditacija/index.php");
$router->get("/kontakt", "/kontakt/index.php");
$router->get("/vesti", "/vesti/index.php");
$router->get("/vesti/:id", "/vesti/vest_single.php");

$router->get("/login", "/auth/loginPage.php");
$router->get("/register", "/auth/registerPage.php");
$router->post("/register", "/auth/register.php");
$router->post("/login", "/auth/login.php");