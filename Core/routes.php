<?php
$router->get("/", "/home/index.php");
$router->get("/nastavno_osoblje", "/nastavno_osoblje/index.php");
$router->get("/nastavno_osoblje/:id", "/nastavno_osoblje/employer.php");
$router->get("/akreditacija", "/akreditacija/index.php");

$router->get("/login", "/auth/loginPage.php");
$router->get("/register", "/auth/registerPage.php");
$router->post("/register", "/auth/register.php");
$router->post("/login", "/auth/login.php");
/****************************************************************
 * DASHBOARD ROUTES
 *****************************************************************/
$router->get("/dashboard", "/dashboard/index.php")->only("auth");
//OSOBLJE
$router->get("/dashboard/osoblje", "/dashboard/osoblje.php")->only("auth");
$router->get("/dashboard/osoblje/dodaj", "/dashboard/osoblje_dodaj_page.php")->only("auth");
$router->post("/dashboard/osoblje/dodaj", "/dashboard/osoblje_dodaj.php")->only("auth");
$router->delete("/dashboard/osoblje/:id", "/dashboard/osoblje_obrisi.php")->only("auth");
//CENOVNIK
$router->get("/dashboard/cenovnik", "/dashboard/cenovnik/index.php")->only("auth");
$router->get("/dashboard/cenovnik/dodaj", "/dashboard/cenovnik/create.php")->only("auth");
$router->post("/dashboard/cenovnik/dodaj", "/dashboard/cenovnik/create_store.php")->only("auth");
$router->delete("/dashboard/cenovnik/:id", "/dashboard/cenovnik/delete.php")->only("auth");
//DOKUMENTA
$router->get("/dashboard/dokumenta", "/dashboard/dokumenta/index.php")->only("auth");
$router->get("/dashboard/dokumenta/dodaj", "/dashboard/dokumenta/create_page.php")->only("auth");
$router->post("/dashboard/dokumenta/dodaj", "/dashboard/dokumenta/store.php")->only("auth");
$router->delete("/dashboard/dokumenta/:id", "/dashboard/dokumenta/delete.php")->only("auth");
//STUDIJE
$router->get("/dashboard/studije", "/dashboard/studije/index.php")->only("auth");
$router->get("/dashboard/studije/sp/dodaj", "/dashboard/studije/sp_create_page.php")->only("auth");
$router->post("/dashboard/studije/sp/dodaj", "/dashboard/studije/sp_create.php")->only("auth");
$router->get("/dashboard/studije/modul/dodaj", "/dashboard/studije/modul_create_page.php")->only("auth");
$router->post("/dashboard/studije/modul/dodaj", "/dashboard/studije/modul_create.php")->only("auth");
$router->get("/dashboard/studije/predmeti", "/dashboard/studije/predmeti_page.php")->only("auth");
$router->get("/dashboard/studije/predmet/dodaj", "/dashboard/studije/predmet_create_page.php")->only("auth");
$router->post("/dashboard/studije/predmet/dodaj", "/dashboard/studije/predmet_create.php")
    ->only("auth");
$router->get("/dashboard/studije/sp/:id", "/dashboard/studije/studijski_program_page.php")->only
("auth");
