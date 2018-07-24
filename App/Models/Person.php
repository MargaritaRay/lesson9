<?php

namespace App\Models;

class Person
{
    //свойства из базы
    public $id;
    public $lastname;
    public $age;

    //конструктор для заполнения свойств
    public function __construct($id, $lastname, $age)
    {
        $this->id = $id;
        $this->lastname = $lastname;
        $this->age = $age;
    }
}