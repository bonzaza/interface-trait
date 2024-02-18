<?php

declare(strict_types=1);

require_once __DIR__ . '/Behavior.php';
require_once __DIR__ . '/Implementation.php';
require_once __DIR__ . '/CoolTrait.php';

$impl = new Implementation();
$impl->save('test ' . random_int(0, 9));
