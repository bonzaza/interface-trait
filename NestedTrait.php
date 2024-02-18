<?php

declare(strict_types=1);

trait NestedTrait
{
    public function save(string $data): void
    {
        $status = file_put_contents(__DIR__ . '/raw.txt', $data);

        if ($status === false) {
            throw new \RuntimeException('Something went wrong!');
        }

        return;
    }
}
