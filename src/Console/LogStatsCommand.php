<?php

declare(strict_types=1);

namespace Tavaan\Engine\Log\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * log:stats command.
 */
final class LogStatsCommand implements CommandInterface
{
    public function name(): string
    {
        return 'log:stats';
    }

    public function description(): string
    {
        return 'Run log:stats (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
