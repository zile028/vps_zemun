<?php
//OSOBLJE
$router->get("/dashboard/osoblje", "/dashboard/osoblje/index.php")->only("auth");
$router->get("/dashboard/osoblje/dodaj", "/dashboard/osoblje/osoblje_dodaj_page.php")->only("auth");
$router->post("/dashboard/osoblje/dodaj", "/dashboard/osoblje/osoblje_dodaj.php")->only("auth");
$router->get("/dashboard/osoblje/savet", "/dashboard/osoblje/osoblje_savet_page.php")->only("auth");

$router->delete("/dashboard/osoblje/:id", "/dashboard/osoblje/osoblje_obrisi.php")->only("auth");