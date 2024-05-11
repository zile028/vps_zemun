<?php
$router->get("/dashboard/preuzimanja", "/dashboard/preuzimanja/index_page.php")->only("auth");
$router->post("/dashboard/preuzimanja", "/dashboard/preuzimanja/create.php")->only("auth");
$router->delete("/dashboard/preuzimanja/:id", "/dashboard/preuzimanja/delete.php")->only("auth");