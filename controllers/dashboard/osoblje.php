<?php

$db = \Core\App::resolve(\Core\Database::class);

$osoblje = $db->query("SELECT * FROM osoblje WHERE lang = 'srb'")->find();

view("dashboard/osoblje", ["osoblje" => $osoblje]);