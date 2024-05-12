<?php
$router->get("/dashboard/vesti", "/dashboard/vesti/index.php")->only("auth");
$router->get("/dashboard/vesti/dodaj", "/dashboard/vesti/vesti_create_page.php")->only("auth");
$router->post("/dashboard/vesti/store", "/dashboard/vesti/vesti_store.php")->only("auth");
$router->delete("/dashboard/vesti/:id", "/dashboard/vesti/delete.php")->only("auth");
$router->get("/dashboard/vesti/:id", "/dashboard/vesti/vest_show_page.php")->only("auth");
$router->put("/dashboard/vesti/:id", "/dashboard/vesti/update.php")->only("auth");
$router->get("/dashboard/vesti/remove_attacment/:vestID/:attachID", "/dashboard/vesti/remove_attachment.php")
    ->only("auth");
