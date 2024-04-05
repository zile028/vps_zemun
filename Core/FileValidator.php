<?php

namespace Core;

class FileValidator
{
    private string $unit = "MB";
    public const KB = 1024;
    public const MB = 1024 * self::KB;
    public const GB = 1024 * self::MB;
    private const UNITS = [
        "KB" => self::KB,
        "MB" => self::MB,
        "GB" => self::GB,
    ];

    private int $limit = 3;
    private array $validType = [];
    public mixed $file = null;
    private string $name = "";
    private string $type = "";
    private string $tmp_name = "";
    private int $size = null;
    private mixed $error = [];
    private string $extension = "";

    public function __construct($file)
    {
        $this->file = $file;
        $this->name = $file["name"];
        $this->type = $file["type"];
        $this->size = $file["size"];
        $this->tmp_name = $file["tmp_name"];
        $this->extension = pathinfo($file["name"], PATHINFO_EXTENSION);
    }

    public function setLimit(int $limit, $unit)
    {
        $this->limit = $limit;
        $this->unit = strtoupper($unit);
        return $this;
    }

    public function setValidType(array $validType)
    {
        $this->validType = $validType;
        return $this;
    }

    public function isValid()
    {
        if ($this->size > $this->limit * self::UNITS[$this->unit]) {
            $this->error["limit"] = "File is to large, maximum file size is $this->limit $this->unit";
        }

        if (!in_array($this->extension, $this->validType)) {
            $this->error["fileType"] = "Filetype is not allowed, allowed filetype is " . implode
                (", ", $this->validType);
        }
        return count($this->error);
    }


}