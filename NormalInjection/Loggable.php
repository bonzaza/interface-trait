<?php

declare(strict_types=1);

interface Loggable
{
    /**
     * @param string $data
     * @return void
     */
    public function log(string $data): void;
}
