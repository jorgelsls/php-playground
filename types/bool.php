<?php

$t = true;

$f = false;

var_dump($t);
var_dump($f);

var_dump(1 == $t);
var_dump(0 == $t);
var_dump('' == $t);
var_dump('0' == $t);
var_dump([] == $t);
var_dump([0] == $t);
var_dump(new stdClass == $t);

var_dump(1 == $f);
var_dump(0 == $f);
var_dump('' == $f);
var_dump('0' == $f);
var_dump([] == $f);
var_dump([0] == $f);
var_dump(new stdClass == $f);
