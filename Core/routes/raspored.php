<?php
$router->get("/dashboard/raspored", "/dashboard/raspored/index.php")->only("auth");
$router->get("/dashboard/raspored/predavanja", "/dashboard/raspored/predavanja_page.php")
    ->only("auth");
$router->post("/dashboard/raspored/predavanja", "/dashboard/raspored/predavanja_create.php")
    ->only("auth");

$router->get("/dashboard/raspored/ispiti", "/dashboard/raspored/ispiti_page.php")
    ->only("auth");
$router->post("/dashboard/raspored/ispiti", "/dashboard/raspored/ispiti_create.php")
    ->only("auth");


$router->patch("/dashboard/raspored/active/:id", "/dashboard/raspored/raspored_activ_status.php")
    ->only("auth");
$router->delete("/dashboard/raspored/:id", "/dashboard/raspored/raspored_delete.php")
    ->only("auth");