<?php
//OSOBLJE
$router->get("/dashboard/osoblje", "/dashboard/osoblje/index.php")->only("auth");
$router->get("/dashboard/osoblje/dodaj", "/dashboard/osoblje/osoblje_dodaj_page.php")->only("auth");
$router->get("/dashboard/osoblje/odbor/:id", "/dashboard/osoblje/osoblje_odbor_page.php")->only("auth");

$router->post("/dashboard/osoblje/dodaj", "/dashboard/osoblje/osoblje_dodaj.php")->only("auth");
$router->post("/dashboard/osoblje/odbor/:id", "/dashboard/osoblje/osoblje_odbor_store.php")->only("auth");
$router->delete("/dashboard/osoblje/:clanID/odbor/:odborID", "/dashboard/osoblje/osoblje_odbor_delete.php")
    ->only("auth");

$router->get("/dashboard/osoblje/:id", "/dashboard/osoblje/osoblje_single_page.php")->only("auth");
$router->put("/dashboard/osoblje/:id", "/dashboard/osoblje/osoblje_update.php")->only("auth");
$router->patch("/dashboard/osoblje/:doc/:id", "/dashboard/osoblje/osoblje_delete_file.php")->only
("auth");
$router->delete("/dashboard/osoblje/:id", "/dashboard/osoblje/osoblje_obrisi.php")->only("auth");
