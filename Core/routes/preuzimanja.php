<?php
$router->get("/dashboard/preuzimanja", "/dashboard/preuzimanja/index_page.php")->only("auth");
$router->post("/dashboard/preuzimanja", "/dashboard/preuzimanja/create.php")->only("auth");