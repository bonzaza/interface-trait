<?php

declare(strict_types=1);

interface Behavior
{
    /**
     * @param string $data
     * @return void
     */
    public function save(string $data): void;
}
