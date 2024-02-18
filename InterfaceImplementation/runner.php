<?php

declare(strict_types=1);

require_once __DIR__ . '/Behavior.php';
require_once __DIR__ . '/Implementation.php';
require_once __DIR__ . '/BehaviorTrait.php';

$implementation = new Implementation();
$implementation->save('test ' . random_int(0, 9));

echo "done" . PHP_EOL;
