<?php

declare(strict_types=1);

require_once __DIR__ . '/../helpers.php';

class Client
{
    private Loggable $logger;

    public function __construct(Loggable $logger)
    {
        $this->logger = $logger;
    }

    public function perform(string $data): void
    {
        // we do something useful with data

        $this->logger->log($data);

        class_info($this->logger);
    }
}
