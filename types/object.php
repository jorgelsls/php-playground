<?php

// Objeto padrão
echo 'Objeto padrão: ';
$obj = new stdClass();

var_dump($obj);

// Array Como Objeto
echo 'Array Como Objeto: ';
$arrayAsObject = (object) ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump($arrayAsObject);

// Criando Classe MyClass
class MyClass
{
    public $a = 1;
}

// Criando Classe MyClass2
class MyClass2
{
    public $a = 1;
}

// Herdando de Myclass2
class MyClass3 extends MyClass2
{
}

$obj2 = new MyClass();

var_dump($obj2);

$obj3 = new MyClass();

var_dump($obj3);

$obj4 = new MyClass2();

var_dump($obj4);

$obj5 = new MyClass3();

var_dump($obj5);

echo PHP_EOL;

// Mesmo tipo e propriedades com valores iguais
echo 'Mesmo tipo e propriedades com valores iguais: '.PHP_EOL;
echo 'Equal Operator: ';
var_dump($obj2 == $obj3);
echo 'Identical Operator: ';
var_dump($obj2 === $obj3);

echo PHP_EOL;

// Mesmo tipo e propriedades com valores diferentes
echo 'Mesmo tipo e propriedades com valores diferentes: ';
$obj2->a = 2;
var_dump($obj2 == $obj3);

echo PHP_EOL;

// Tipos diferentes
echo 'Tipos diferentes: ';
var_dump($obj3 == $obj4);

echo PHP_EOL;

// Herança de objetos com propriedades de mesmo valor
echo 'Herança de objetos com propriedades de mesmo valor: ';
var_dump($obj4 == $obj5);
