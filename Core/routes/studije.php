<?php
$router->get("/dashboard/studije", "/dashboard/studije/index.php")->only("auth");
$router->get("/dashboard/studije/sp/dodaj", "/dashboard/studije/sp_create_page.php")->only("auth");
$router->post("/dashboard/studije/sp/dodaj", "/dashboard/studije/sp_create.php")->only("auth");
$router->get("/dashboard/studije/modul/dodaj", "/dashboard/studije/modul_create_page.php")->only("auth");
$router->post("/dashboard/studije/modul/dodaj", "/dashboard/studije/modul_create.php")->only("auth");
$router->get("/dashboard/studije/predmeti", "/dashboard/studije/predmeti_page.php")->only("auth");
$router->get("/dashboard/studije/predmet/dodaj", "/dashboard/studije/predmet_create_page.php")->only("auth");
$router->post("/dashboard/studije/predmet/dodaj", "/dashboard/studije/predmet_create.php")->only("auth");
$router->delete("/dashboard/studije/predmet/:id", "/dashboard/studije/predmet_delete.php")->only("auth");
$router->delete("/dashboard/studije/predmet/remove/:id", "/dashboard/studije/predmet_remove.php")
    ->only("auth");
$router->get("/dashboard/studije/sp/:id", "/dashboard/studije/studijski_program_page.php")->only("auth");
$router->put("/dashboard/studije/sp/:id", "/dashboard/studije/studijski_program_update.php")->only
("auth");
$router->delete("/dashboard/studije/sp/:id", "/dashboard/studije/studijski_program_delete.php")->only("auth");
$router->put("/dashboard/studije/sp/:id/predmet", "/dashboard/studije/studijski_program_predmet.php")->only("auth");
$router->patch("/dashboard/studije/sp/:spID/predmet/:predmetID/order", "/dashboard/studije/studijski_program_predmet_order.php")->only("auth");
$router->patch("/dashboard/studije/sp/:spID/:status", "/dashboard/studije/studijski_program_active_status.php")->only("auth");
