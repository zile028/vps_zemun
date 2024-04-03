<?php
$router->get("/", "/home/index.php");
$router->get("/nastavno_osoblje", "/nastavno_osoblje/index.php");
$router->get("/nastavno_osoblje/:id", "/nastavno_osoblje/employer.php");
$router->get("/akreditacija", "/akreditacija/index.php");

$router->get("/course_level", "course/show.php");
$router->get("/course_level/:id", "course/details.php");
$router->get("/news", "news/getNews.php");
$router->get("/news/getSingle/:id", "news/getSingleNews.php");

$router->post("/news/add", "news/addNews.php");
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
