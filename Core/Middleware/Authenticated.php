<?php

namespace Core\Middleware;

class Authenticated
{
    public function handle()
    {
        if (!isset($_SESSION["user"])) {
            view("403", ["heading" => "Error"]);
            exit();
        }
    }
}