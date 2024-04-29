<?php
dd($_SERVER["SERVER_NAME"]);
return $_SERVER["SERVER_NAME"] === "localhost" ?
    [
        "database" => [
            "host" => "localhost",
            "port" => 3306,
            "dbname" => "vps_sajt",
            "charset" => "utf8mb4",
            "username" => "root",
            "password" => ""
        ]] : [
        "database" => [
            "host" => "localhost",
            "port" => 3306,
            "dbname" => "vpscacak_vps_sajt",
            "charset" => "utf8mb4",
            "username" => "vpscacak_vps_admin",
            "password" => "R!1kQaJUi%U;"
        ]
    ];
