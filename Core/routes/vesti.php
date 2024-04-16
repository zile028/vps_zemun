<?php
$router->get("/dashboard/vesti", "/dashboard/vesti/index.php")->only("auth");
$router->get("/dashboard/vesti/dodaj", "/dashboard/vesti/vesti_create_page.php")->only("auth");
$router->post("/dashboard/vesti/store", "/dashboard/vesti/vesti_store.php")->only("auth");
