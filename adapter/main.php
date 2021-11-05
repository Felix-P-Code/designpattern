<?php
interface Databases
{
    public function connect();

    public function query();

}

class Mysql implements Databases
{
    public function connect()
    {
        echo 'mysql connect';
    }

    public function query(){
        echo 'mysql query';
    }

}

class Mongo implements Databases{
    public function connect()
    {
        echo 'Mongo connect';
    }

    public function query(){
        echo 'Mongo query';
    }
}

class Adapter {
    private $db;
    public function __construct($db){
        $this->db = new $db;
    }

    public function connect()
    {
        $this->db->connect();
    }

    public function query(){
        $this->db->query();
    }
}

$mysqlAdapter = new Adapter(Mysql::class);
$mysqlAdapter->connect();