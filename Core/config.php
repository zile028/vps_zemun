<?php

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
            "dbname" => "zilecom_vps_sajt",
            "charset" => "utf8mb4",
            "username" => "zilecom_vpsadmin",
            "password" => "UQBXKHHVawXz"
        ]
    ];
