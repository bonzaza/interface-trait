<?php

declare(strict_types=1);

require_once __DIR__ . '/Loggable.php';

class ImplFirst implements Loggable
{
    const FILE_PATH = __DIR__ . '/raw.txt';

    public function log(string $data): void
    {
        $status = file_put_contents(self::FILE_PATH, $data);

        if ($status === false) {
            throw new \RuntimeException('Something went wrong!');
        }

        return;
    }
}
