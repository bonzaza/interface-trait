<?php

declare(strict_types=1);

function class_info(object $instance): void
{
    writeln('Instance class: ' . get_class($instance));
    writeln('Instance methods: ' . implode(', ', get_class_methods($instance)));
    writeln('Instance parents: ' . implode(', ', class_parents($instance) ?: ['not set']));
    writeln('Instance implements: ' . implode(', ', class_implements($instance) ?: ['not set']));
    writeln('Instance uses: ' . implode(', ', class_uses($instance) ?: ['not set']));
}

function writeln(string $message): void
{
    echo $message . PHP_EOL;
}
