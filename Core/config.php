<?php

$serverConfig = [
    "dev" => [
        "database" => [
            "host" => "localhost",
            "port" => 3306,
            "dbname" => "vps_sajt",
            "charset" => "utf8mb4",
            "username" => "root",
            "password" => ""
        ]
    ],
    "test" => [
        "database" => [
            "host" => "localhost",
            "port" => 3306,
            "dbname" => "zilecom_vps_sajt",
            "charset" => "utf8mb4",
            "username" => "zilecom_vpsadmin",
            "password" => "LbM0uvD=3JvN"
        ]
    ],
    "production" => [
        "database" => [
            "host" => "localhost",
            "port" => 3306,
            "dbname" => "vpscacak_vps_sajt",
            "charset" => "utf8mb4",
            "username" => "vpscacak_vps_admin",
            "password" => "R!1kQaJUi%U;"
        ]
    ]
];

switch ($_SERVER["SERVER_NAME"]) {
    case "localhost":
        return $serverConfig["dev"];
        break;
    case "vps.zile028.com":
        return $serverConfig["test"];
        break;
    default:
        return $serverConfig["production"];
        break;
}

//
//return $_SERVER["SERVER_NAME"] === "localhost" ?
//    [
//        "database" => [
//            "host" => "localhost",
//            "port" => 3306,
//            "dbname" => "vps_sajt",
//            "charset" => "utf8mb4",
//            "username" => "root",
//            "password" => ""
//        ]] : [
//        "database" => [
//            "host" => "localhost",
//            "port" => 3306,
//            "dbname" => "vpscacak_vps_sajt",
//            "charset" => "utf8mb4",
//            "username" => "vpscacak_vps_admin",
//            "password" => "R!1kQaJUi%U;"
//        ]
//    ];
