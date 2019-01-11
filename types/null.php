<?php

$variable = null;

var_dump($variable);

// Comparação com null
var_dump(null == $variable);
var_dump(null === $variable);

// Comparação por chamada de função
var_dump(is_null($variable));

// Comparação com outros tipos
var_dump(1 == $variable);
var_dump(0 == $variable);
var_dump('' == $variable);
var_dump([] == $variable);
