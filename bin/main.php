<?php

require_once dirname(__DIR__) . '../vendor/autoload.php';

$iterator = new \Test\ExampleIterator([
    0, 5, 6, 3, 4, 5, 6, 6, 7, 5, 2, 43,
]);

foreach ($iterator->Iterate(6) as $valid) {
    echo $valid . PHP_EOL;
}