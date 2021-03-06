<?php

namespace KCS\lib\DB;

use KCS\Model\Product;
use KCS\Model\Tb_list;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class DB
{
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $conn;
    private $logger;

    public function __construct(
        $host = 'localhost',
        $dbname = 'gabora',
        $user = 'root',
        $password = ''

    )
    {
        try{
            $this->host = $host;
            $this->dbname = $dbname;
            $this->user = $user;
            $this->password = $password;
            if (!$this->conn) {
                $this->conn = new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            }
        } catch (\PDOException $exception){
            $this->logger = new Logger('name');
            $this->logger->pushHandler(new StreamHandler('app.log', Logger::WARNING));
            $this->logger->addCritical($exception->getMessage());
            throw new \Exception('Klaida jungiantis į DB.');
        }
    }

    public function showAllProducts()
{
    $stmt = $this->conn->prepare('SELECT * FROM products');
    $stmt->execute();
    $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);
    $rezultatai = $stmt->fetchAll();
//var_dump($rezultatai);
    return $rezultatai;
}

    public function showAllProductListForMeniu($table)
    {
        $stmt = $this->conn->prepare('SELECT * FROM '.$table);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);
        $rezultatai = $stmt->fetchAll();

        return $rezultatai;
    }


    public function showAllProductList($table)
    {
        $stmt = $this->conn->prepare('SELECT * FROM '.$table);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Tb_list::class);
        $rezultatai = $stmt->fetchAll();

        return $rezultatai;
    }


}
