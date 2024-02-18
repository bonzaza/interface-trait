<?php

declare(strict_types=1);

require_once __DIR__ . '/Loggable.php';
require_once __DIR__ . '/LogTempFileTrait.php';

class ImplSecond implements Loggable
{
    use LogTempFileTrait;
}
