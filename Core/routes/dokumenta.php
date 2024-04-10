<?php
$router->get("/dashboard/dokumenta", "/dashboard/dokumenta/index.php")->only("auth");
$router->get("/dashboard/dokumenta/dodaj", "/dashboard/dokumenta/create_page.php")->only("auth");
$router->post("/dashboard/dokumenta/dodaj", "/dashboard/dokumenta/store.php")->only("auth");
$router->delete("/dashboard/dokumenta/:id", "/dashboard/dokumenta/delete.php")->only("auth");