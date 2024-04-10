<?php
$router->get("/dashboard/cenovnik", "/dashboard/cenovnik/index.php")->only("auth");
$router->get("/dashboard/cenovnik/dodaj", "/dashboard/cenovnik/create.php")->only("auth");
$router->post("/dashboard/cenovnik/dodaj", "/dashboard/cenovnik/create_store.php")->only("auth");
$router->delete("/dashboard/cenovnik/:id", "/dashboard/cenovnik/delete.php")->only("auth");
