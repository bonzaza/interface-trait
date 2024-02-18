<?php

declare(strict_types=1);

require_once __DIR__ . '/Behavior.php';
require_once __DIR__ . '/BehaviorTrait.php';

class Implementation implements Behavior
{
    use BehaviorTrait;
}
