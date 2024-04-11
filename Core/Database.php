<?php

namespace Core;

use PDO;

class Database
{
    public $pdo;
    private $statment;
    private bool $executeResult;

    public function __construct($config, $username = "root", $password = "")
    {
        $dsn = "mysql:" . http_build_query($config, "", ";");
        try {
            $this->pdo = new PDO($dsn, $config["username"], $config["password"], [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }

    public function query($query, $params = [], $type = [])
    {
        $this->statment = $this->pdo->prepare($query);

        if (count($type) === count($params)) {
            $index = 0;
            foreach ($params as $key => $value) {
                $this->statment->bindValue(":" . $key, $value, $type[$index]);
                $index++;
            }
            $this->executeResult = $this->statment->execute();
        } else {
            $this->executeResult = $this->statment->execute($params);
        }
        return $this;
    }

    public function find($fetchType = null)
    {
        return $this->statment->fetchAll($fetchType);
    }

    public function findOne($fetchType = null)
    {
        return $this->statment->fetch($fetchType);
    }

    public function findOneOrFail()
    {
        $result = $this->findOne();
        if (!$result) {
            abort();
        }
        return $result;
    }

    public function deleteOrFail()
    {
        $result = (bool)$this->statment->rowCount();
        if (!$this->executeResult) {
            abort(Response::SERVER_ERROR);
        } elseif (!$result) {
            abort(Response::FORBIDDEN);
        }

        return $result;
    }

    public function nextRowsetFind($fetchType = null)
    {
        $this->statment->nextRowset();
        return $this->statment->fetchAll($fetchType);
    }

    public function nextRowsetFindOne($fetchType = null)
    {
        $this->statment->nextRowset();
        return $this->statment->fetch($fetchType);
    }

    public function isExecuteResult(): bool
    {
        return $this->executeResult;
    }

    public function lastID()
    {
        return $this->pdo->lastInsertId();

    }

}
