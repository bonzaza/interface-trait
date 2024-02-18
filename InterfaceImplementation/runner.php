<?php

declare(strict_types=1);

require_once __DIR__ . '/Loggable.php';
require_once __DIR__ . '/LoggableTrait.php';
require_once __DIR__ . '/ImplFirst.php';
require_once __DIR__ . '/../helpers.php';

$implementation = new ImplFirst();
$implementation->log('test ' . random_int(0, 9));

class_info($implementation);
