<?php
$id = $params["id"];
$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT v.id, v.naslov,v.description,v.createdAt,v.featured_imageID, m.storeName AS thumbnail
            FROM vesti v
            LEFT JOIN media m ON m.id = v.featured_imageID
            WHERE v.id = :id;
        SELECT m.storeName, m.fileName, vm.mediaID
            FROM vest_media vm
            JOIN media m ON m.id = vm.mediaID
            WHERE vm.vestID = :id;
        SELECT media.* 
            FROM media
            WHERE mimetype LIKE 'image/%' ORDER BY fileName;";
$vest = $db->query($sql, ["id" => $id])->findOne(PDO::FETCH_OBJ);
$attachment = $db->nextRowsetFind(PDO::FETCH_OBJ);
$media = $db->nextRowsetFind(PDO::FETCH_OBJ);
view("dashboard/vesti/show.view", [
    "vest" => $vest, "attachment" => $attachment, "media" => $media
]);