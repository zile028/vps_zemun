<?php
$router->get("/dashboard/media", "dashboard/media/index.php")->only("auth");
$router->post("/dashboard/media", "dashboard/media/create.php")->only("auth");
$router->delete("/dashboard/media/:id", "dashboard/media/delete.php")->only("auth");