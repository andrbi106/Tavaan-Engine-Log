<?php

declare(strict_types=1);

namespace Tavaan\Engine\Log\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * log:tail command.
 */
final class LogTailCommand implements CommandInterface
{
    public function name(): string
    {
        return 'log:tail';
    }

    public function description(): string
    {
        return 'Run log:tail (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
