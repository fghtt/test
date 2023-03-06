<?php

namespace App\Database;

class Db
{
    /**
     * The self object
     *
     * @var self
     */
    private static $instance;

    /**
     * The pdo object
     *
     * @var \PDO
     */
    private $pdo;

    /**
     * Creating a new db instance
     *
     * @return void
     */
    private function __construct()
    {
        $file = file(__DIR__ . '/../../setting.txt');
        unset($file[0]);

        $host = trim(explode('=', $file[1])[1]);
        $port = trim(explode('=', $file[2])[1]);
        $database = trim(explode('=', $file[3])[1]);
        $user = trim(explode('=', $file[4])[1]);
        $password = trim(explode('=', $file[5])[1]);

        $this->pdo = new \PDO(
            "mysql:host=$host;port=$port;dbname=$database",
            $user,
            $password
        );

        $this->pdo->exec('SET NAMES UTF8');
    }

    /**
     * Makes a query to the database
     *
     * @param string $sql
     * @param array $params
     * @return array|null
     */
    public function query(string $sql, array $params = [])
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if ($result === false) {
            return null;
        }

        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Get an object of self class
     *
     * @return self
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}