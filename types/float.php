<?php

$positive = 10;
var_dump($positive);

$positive_as_dot = 10.0;
var_dump($positive_as_dot);

$float_number = 3.2;
var_dump($float_number);

$negative_float_number = -11.4;
var_dump($negative_float_number);

$zero = 0;
var_dump($zero);

$minus_zero = -0;
var_dump($minus_zero);

$not_a_number = NAN;
var_dump($not_a_number);

$infinite = INF;
var_dump($infinite);

$negative_infinite = -INF;
var_dump($negative_infinite);

// NAN
var_dump($float_number * $not_a_number);

var_dump(sqrt($negative_float_number));

var_dump($float_number / 0);

// Is Equal?
var_dump($infinite == INF);
var_dump($infinite * $infinite == INF);
var_dump($not_a_number == NAN);

var_dump(is_nan($not_a_number));
