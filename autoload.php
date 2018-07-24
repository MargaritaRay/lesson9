<?php

//программа встретила новое имя класса Persons() и подставляет его на место $class, вывод: string 'Persons' (length=7)
function __autoload($class)
{
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

}