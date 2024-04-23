<?php
$statusCode = \Core\Response::UNDER_CONSTRUCTION;
view($statusCode, ["heading" => "Error",
    "heroImage" => $statusCode . "_error.jpg",
    "heroTitle" => ""
]);