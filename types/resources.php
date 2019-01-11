<?php

$resource = fopen(__DIR__.'/file', 'w');

fputs($resource, 'Hello, world');

var_dump($resource);

echo gettype($resource) . PHP_EOL;

fclose($resource);

var_dump(file_get_contents(__DIR__.'/file'));
