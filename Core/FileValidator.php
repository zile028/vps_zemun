<?php

namespace Core;

class FileValidator
{
    private string $unit = "MB";
    public const UPLOAD_DIR = "upload";
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
    private string $name;
    public string $type;
    private string $tmp_name;
    public mixed $size = null;
    private mixed $error = [];
    public string $extension;
    public string $storeName = "";

    public function __construct($file)
    {
        if ($file["size"] > 0) {
            $this->file = $file;
            $this->name = $file["name"];
            $this->type = $file["type"];
            $this->size = $file["size"];
            $this->tmp_name = $file["tmp_name"];
            $this->extension = pathinfo($file["name"], PATHINFO_EXTENSION);
        } else {
            $this->error["required"] = "File is required!";
        }
    }

    static function deleteFile($fileName): bool
    {
        return unlink(BASE_PATH . self::UPLOAD_DIR . "/" . $fileName);
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
        if (count($this->error) === 0) {
            if ($this->size > $this->limit * self::UNITS[$this->unit]) {
                $this->error["limit"] = "File is to large, maximum file size is " . $this->limit . $this->unit;
            }

            if (!in_array($this->extension, $this->validType)) {
                $this->error["fileType"] = "Filetype is not allowed, allowed filetype is " . implode
                    (", ", $this->validType);
            }
        }
        return count($this->error) === 0;
    }

    public function getError(): mixed
    {
        return $this->error;
    }

    public function upload()
    {
        $this->storeName = $this->generateFileName($this->extension);
        $storeDirectory = realpath(__DIR__ . "../../" . self::UPLOAD_DIR);
        if (!file_exists($storeDirectory)) {
            mkdir($storeDirectory);
        }
        $storePath = $storeDirectory . "/" . $this->storeName;
        return move_uploaded_file($this->tmp_name, $storePath);
    }

    public function generateFileName($extension, $prefix = "", $suffix = "")
    {
        $timestamp = microtime(true); // Trenutni vremenski pečat
        $random = mt_rand(); // Slučajan broj
        return $prefix . round($timestamp * 1000) . "_" . $random . $suffix . "." . $extension;
    }

}