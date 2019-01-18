<?php

use namespace1\Classe;
use namespace2\Classe as SegundaClasse;

use function namespace1\minhaFuncao;

require __DIR__.'/namespace1/Classe.php';
require __DIR__.'/namespace2/Classe.php';
require __DIR__.'/namespace1/funcoes.php';

$classe1 = new Classe;
$classe2 = new SegundaClasse;

echo Classe::class . PHP_EOL;
echo SegundaClasse::class . PHP_EOL;

minhaFuncao();

echo PHP_EOL;
