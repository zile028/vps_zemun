<?php
$router->get("/dashboard/alumni", "/dashboard/alumni/index.php");
$router->post("/dashboard/alumni", "/dashboard/alumni/create.php");
$router->delete("/dashboard/alumni/:id", "/dashboard/alumni/delete.php");