<?php

declare(strict_types=1);

require_once __DIR__ . '/Loggable.php';
require_once __DIR__ . '/LogFileTrait.php';

class ImplFirst implements Loggable
{
    use LogFileTrait;
}
