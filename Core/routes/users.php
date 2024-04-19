<?php
$router->get("/dashboard/users", "/dashboard/users/index_page.php")->only("admin");
$router->get("/dashboard/users/create", "/dashboard/users/create_page.php")->only("admin");
$router->post("/dashboard/users/create", "/dashboard/users/create.php")->only("admin");