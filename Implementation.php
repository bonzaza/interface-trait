<?php

declare(strict_types=1);

require_once __DIR__ . '/Behavior.php';
require_once __DIR__ . '/CoolTrait.php';

class Implementation implements Behavior
{
    use CoolTrait;
}
