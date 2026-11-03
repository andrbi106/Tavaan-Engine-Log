<?php

declare(strict_types=1);

namespace Tavaan\Engine\Log\Contracts;

/**
 * قرارداد Logger.
 *
 * @see \Tavaan\Engine\Log\Logger
 * @api 1.0
 */
interface LoggerInterface
{
    /**
     * متد emergency.
     *
     * @return mixed
     */
    public function emergency(/* ... */): mixed;

    /**
     * متد alert.
     *
     * @return mixed
     */
    public function alert(/* ... */): mixed;

    /**
     * متد critical.
     *
     * @return mixed
     */
    public function critical(/* ... */): mixed;

    /**
     * متد error.
     *
     * @return mixed
     */
    public function error(/* ... */): mixed;

    /**
     * متد warning.
     *
     * @return mixed
     */
    public function warning(/* ... */): mixed;

    /**
     * متد notice.
     *
     * @return mixed
     */
    public function notice(/* ... */): mixed;

    /**
     * متد info.
     *
     * @return mixed
     */
    public function info(/* ... */): mixed;

    /**
     * متد debug.
     *
     * @return mixed
     */
    public function debug(/* ... */): mixed;

    /**
     * متد log.
     *
     * @return mixed
     */
    public function log(/* ... */): mixed;

    /**
     * متد withContext.
     *
     * @return mixed
     */
    public function withContext(/* ... */): mixed;

    /**
     * متد shareContext.
     *
     * @return mixed
     */
    public function shareContext(/* ... */): mixed;

    /**
     * متد withoutContext.
     *
     * @return mixed
     */
    public function withoutContext(/* ... */): mixed;
}