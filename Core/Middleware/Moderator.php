<?php

namespace Core\Middleware;

class Moderator
{
    public function handle()
    {
        if (!isset($_SESSION["user"]) || $_SESSION["user"]["role"] !== "moderator") {
            redirect("/");
        }
    }
}