<?php
$router->get("/", "/home/index.php");
$router->get("/nastavno_osoblje", "/nastavno_osoblje/index.php");
$router->get("/nastavno_osoblje/:id", "/nastavno_osoblje/employer.php");
$router->get("/akreditacija", "/akreditacija/index.php");

$router->get("/login", "/auth/loginPage.php");
$router->get("/register", "/auth/registerPage.php");
$router->post("/register", "/auth/register.php");
$router->post("/login", "/auth/login.php");

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
//dokumenta
$router->get("/dashboard/dokumenta", "/dashboard/dokumenta/index.php")->only("auth");
$router->get("/dashboard/dokumenta/dodaj", "/dashboard/dokumenta/create_page.php")->only("auth");
$router->post("/dashboard/dokumenta/dodaj", "/dashboard/dokumenta/store.php")->only("auth");
$router->delete("/dashboard/dokumenta/:id", "/dashboard/dokumenta/delete.php")->only("auth");
//STUDIJE
$router->get("/dashboard/studije", "/dashboard/studije/index.php")->only("auth");
$router->get("/dashboard/studije/sp/dodaj", "/dashboard/studije/sp_create_page.php")->only("auth");
$router->post("/dashboard/studije/sp/dodaj", "/dashboard/studije/sp_create.php")->only("auth");
$router->get("/dashboard/studije/modul/dodaj", "/dashboard/studije/modul_create_page.php")->only("auth");
$router->post("/dashboard/studije/modul/dodaj", "/dashboard/studije/modul_create.php")->only
("auth");


//
//$router->get("/about", "controllers/about.php");
//$router->get("/notes", "controllers/notes/index.php")->only("auth");
//$router->get("/note", "controllers/notes/show.php");
//$router->get("/contact", "controllers/contact.php");
//$router->get("/notes/create", "controllers/notes/create.php");
//$router->get("/note/edit", "controllers/notes/edit.php");
//$router->get("/register", "controllers/auth/register.php")->only("guest");
//$router->get("/login", "controllers/auth/login.php")->only("guest");
//$router->get("/logout", "controllers/auth/logout.php")->only("auth");
//
//$router->post("/notes/create", "controllers/notes/create.php");
//$router->post("/register", "controllers/auth/create.php")->only("guest");
//$router->post("/login", "controllers/auth/signin.php")->only("guest");
//
//$router->patch("/note", "controllers/notes/update.php");
//
//$router->delete("/note", "controllers/notes/delete.php");
