<?php 
namespace Engine\Core\Database;

class Connection
{
    private $link;
    public function __construct()
    {
        $this->connect();
    }
    /**
     * Summary of connect
     * @return Connection
     */
    private function connect()
    {
        $config = [
            'host' => 'localhost',
            'db_name' => 'nsm1008w_6c',
            'username' => 'nsm1008w_6c',
            'password' => '7&4Jatdd',
            'charset' => 'utf8'
        ];
        $dns = "mysql:host={$config['host']};dbname={$config['db_name']};charset={$config['charset']}";
        $this->link = new \PDO($dns, $config['username'], $config['password']);
        return $this;
    }
    public function execute(string $sql)
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute();
    }
    public function query(string $sql)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC) ?: [];
    }
}
?>