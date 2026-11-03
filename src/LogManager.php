<?php

declare(strict_types=1);

namespace Tavaan\Engine\Log;

use Tavaan\Engine\Log\Contracts\LoggerInterface;
use Tavaan\Engine\Log\Contracts\HandlerInterface;
use Tavaan\Engine\Log\Handlers\FileHandler;
use Tavaan\Engine\Log\Handlers\StreamHandler;
use Tavaan\Engine\Log\Formatters\JsonFormatter;
use Tavaan\Engine\Log\Formatters\LineFormatter;
use Tavaan\Engine\Log\LogLevel;

/**
 * LogManager — مدیریت چندین کانال لاگ.
 */
final class LogManager implements LoggerInterface
{
    /**
     * @var array<string, Logger>
     */
    private array $loggers = [];

    private Logger $default;

    /**
     * @param array<string, mixed> $config
     */
    public function __construct(
        private readonly array $config = [],
    ) {
        $this->default = $this->createLogger($this->config['default'] ?? 'default');
    }

    public function channel(string $name): LoggerInterface
    {
        if (!isset($this->loggers[$name])) {
            $this->loggers[$name] = $this->createLogger($name);
        }
        return $this->loggers[$name];
    }

    public function emergency(string $message, array $context = []): void
    {
        $this->default->emergency($message, $context);
    }

    public function alert(string $message, array $context = []): void
    {
        $this->default->alert($message, $context);
    }

    public function critical(string $message, array $context = []): void
    {
        $this->default->critical($message, $context);
    }

    public function error(string $message, array $context = []): void
    {
        $this->default->error($message, $context);
    }

    public function warning(string $message, array $context = []): void
    {
        $this->default->warning($message, $context);
    }

    public function notice(string $message, array $context = []): void
    {
        $this->default->notice($message, $context);
    }

    public function info(string $message, array $context = []): void
    {
        $this->default->info($message, $context);
    }

    public function debug(string $message, array $context = []): void
    {
        $this->default->debug($message, $context);
    }

    public function log(LogLevel $level, string $message, array $context = []): void
    {
        $this->default->log($level, $message, $context);
    }

    public function withContext(array $context): self
    {
        $new = clone $this;
        $new->default = $this->default->withContext($context);
        return $new;
    }

    public function shareContext(array $context): void
    {
        $this->default->shareContext($context);
    }

    public function withoutContext(): void
    {
        $this->default->withoutContext();
    }

    public function flush(): void
    {
        $this->default->flush();
    }

    public function getDefaultLogger(): Logger
    {
        return $this->default;
    }

    private function createLogger(string $name): Logger
    {
        $logger = new Logger($name);
        $logger->setMinimumLevel($this->parseLevel($this->config['level'] ?? 'debug'));
        // Add default handler (stdout or file)
        $handlerConfig = $this->config['handlers'] ?? [
            ['type' => 'stdout', 'format' => 'line'],
        ];
        foreach ($handlerConfig as $cfg) {
            $handler = $this->createHandler($cfg, $name);
            if ($handler !== null) {
                $logger->addHandler($handler);
            }
        }
        return $logger;
    }

    private function parseLevel(string $level): LogLevel
    {
        return LogLevel::fromString($level);
    }

    /**
     * @param array<string, mixed> $cfg
     */
    private function createHandler(array $cfg, string $channel): ?HandlerInterface
    {
        $type = $cfg['type'] ?? 'stdout';
        $format = $cfg['format'] ?? 'line';
        $formatter = $format === 'json' ? new JsonFormatter() : new LineFormatter();
        return match ($type) {
            'stdout' => StreamHandler::toStdout($formatter),
            'stderr' => StreamHandler::toStderr($formatter),
            'file' => new FileHandler(
                $cfg['path'] ?? "/tmp/{$channel}.log",
                $formatter,
                $cfg['append'] ?? true,
            ),
            default => null,
        };
    }

    /**
     * driver
     */
    public function driver(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * extend
     */
    public function extend(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * getChannels
     */
    public function getChannels(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * stack
     */
    public function stack(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
}
