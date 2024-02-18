<?php

declare(strict_types=1);

trait LogTempFileTrait
{
    public function log(string $data): void
    {
        $tmpfile = tempnam(sys_get_temp_dir(), 'test');

        $status = file_put_contents($tmpfile, $data);

        unlink($tmpfile);

        if ($status === false) {
            throw new \RuntimeException('Something went wrong!');
        }

        return;
    }
}
