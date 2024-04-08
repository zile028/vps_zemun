<?php

$db = \Core\App::resolve(\Core\Database::class);

$atachment = $db->query("SELECT image, cv FROM osoblje WHERE id = :id", $params)->findOne(PDO::FETCH_NUM);
$deleted = $db->query("DELETE FROM osoblje WHERE id = :id", $params);

if ($deleted) {
    foreach ($atachment as $item) {
        if ($item !== null) {
            unlink(realUploadPath($item));
        }
    }
}
redirect("/dashboard/osoblje");