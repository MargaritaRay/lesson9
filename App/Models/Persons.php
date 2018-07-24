<?php
//можно отключить с помощью __autoload($class)
//require_once __DIR__ . '/Person.php';

namespace App\Models;

use \App\Models\Person as Person;

class Persons
{
    protected $dbh;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=test';
//специальный класс подключения к базе
        $this->dbh = new \PDO($dsn, 'root', '');
    }

    public function findAll()
    {

        $sql =  'SELECT * FROM persons';
//метод возвращает строку-запрос
        $sth = $this->dbh->prepare($sql);
//выполнение запроса (ни чего не видно)
        $sth->execute();
//возвращает из базы для чтения
        $data = $sth->fetchAll();

        $ret = [];
        foreach ($data as $row) {
            $ret[] = new Person($row['id'], $row['lastname'], $row['age']);
        }
        return $ret;
    }


}