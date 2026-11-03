<?php

declare(strict_types=1);

namespace Tavaan\Engine\Log;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Log\Contracts\LogManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * LogManagerServiceProvider — ثبت سرویس‌های موتور LogManager.
 */
final class LogManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(LogManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new LogManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('log', $this->app->get(LogManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Log\Console\Log_tailCommand::class;
        $this->commands[] = \Tavaan\Engine\Log\Console\Log_clearCommand::class;
        $this->commands[] = \Tavaan\Engine\Log\Console\Log_statsCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            LogManagerInterface::class,
            'log',
        ];
    }
}