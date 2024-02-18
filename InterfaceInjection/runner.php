<?php

declare(strict_types=1);

require_once __DIR__ . '/Client.php';
require_once __DIR__ . '/Loggable.php';
require_once __DIR__ . '/ImplFirst.php';
require_once __DIR__ . '/ImplSecond.php';
require_once __DIR__ . '/../helpers.php';

$implementation = new ImplSecond(); // new ImplFirst();

$client = new Client($implementation);
$client->perform('test ' . random_int(0, 9));
