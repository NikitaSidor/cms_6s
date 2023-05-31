<?php

namespace Engine\Core\Database;

use \PDO;
use Engine\Core\Config\Config;

/**
 * Class Connection
 * @package Engine\Core\Database
 */
class Connection
{
    /**
     * @var PDO
     */
    private $link;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->connect();
    }

    /**
     * Connect to the database using the configuration file.
     *
     * @return Connection
     */
    private function connect(): Connection
    {
        $config = Config::file('database');
        $dns = "mysql:host={$config['host']};dbname={$config['db_name']};charset={$config['charset']}";
        $this->link = new PDO($dns, $config['username'], $config['password']);
        return $this;
    }

    /**
     * Execute a SQL statement with the given values.
     *
     * @param string $sql
     * @param array $values
     * @return bool
     */
    public function execute(string $sql, array $values = []): bool
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute($values);
    }

    /**
     * Execute a SQL query with the given values and return the result set.
     *
     * @param string $sql
     * @param array $values
     * @return array
     */
    public function query(string $sql, array $values = []): array
    {
        $sth = $this->link->prepare($sql);
        $sth->execute($values);

        return $sth->fetchAll(PDO::FETCH_ASSOC) ?: [];
    }
    
    /**
     * return insert last id
     */
    public function lastInsertId():int
    {
        return $this->link->lastInsertId();
    }
}