<?php

namespace Core;

class Media
{
    public string $storeName;
    public string $fileName;
    public string $type;
    public int $size;
    public string $mimetype;
    protected int $lastId;
    private $db;

    public function __construct($storeName, $fileName, $type, $size, $mimetype)
    {
        $this->db = App::resolve(Database::class);
        $this->type = $type;
        $this->size = $size;
        $this->mimetype = $mimetype;
        $this->storeName = $storeName;
        $this->fileName = $fileName;
    }

    public function save($lang = "srb")
    {
        $sql = "INSERT INTO media (fileName, storeName, type, size, mimetype,lang)
                    VALUES (:fileName, :storeName, :type, :size, :mimetype,:lang);";
        $this->db->query($sql, [
            "fileName" => $this->fileName,
            "storeName" => $this->storeName,
            "type" => $this->type,
            "size" => $this->size,
            "mimetype" => $this->mimetype,
            "lang" => $lang
        ]);
        $this->lastId = $this->db->lastID;
        return $this->db->isExecuteResult();
    }

}