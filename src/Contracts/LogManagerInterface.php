<?php

declare(strict_types=1);

namespace Tavaan\Engine\Log\Contracts;

/**
 * قرارداد LogManager.
 *
 * @see \Tavaan\Engine\Log\LogManager
 * @api 1.0
 */
interface LogManagerInterface
{
    /**
     * متد channel.
     *
     * @return mixed
     */
    public function channel(/* ... */): mixed;

    /**
     * متد stack.
     *
     * @return mixed
     */
    public function stack(/* ... */): mixed;

    /**
     * متد driver.
     *
     * @return mixed
     */
    public function driver(/* ... */): mixed;

    /**
     * متد extend.
     *
     * @return mixed
     */
    public function extend(/* ... */): mixed;

    /**
     * متد flush.
     *
     * @return mixed
     */
    public function flush(/* ... */): mixed;

    /**
     * متد getChannels.
     *
     * @return mixed
     */
    public function getChannels(/* ... */): mixed;
}