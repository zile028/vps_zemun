<?php
require_once "routes/client.php";
/****************************************************************
 * DASHBOARD ROUTES
 *****************************************************************/
$router->get("/dashboard", "/dashboard/index.php")->only("auth");
//OSOBLJE
require_once "routes/osoblje.php";
//CENOVNIK
require_once "routes/cenovnik.php";
//DOKUMENTA
require_once "routes/dokumenta.php";
//STUDIJE
require_once "routes/studije.php";
