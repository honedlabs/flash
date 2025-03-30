<?php

declare(strict_types=1);

namespace Honed\Flash\Facades;

use Honed\Flash\FlashFactory;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Honed\Flash\FlashFactory
 *
 * @method static \Honed\Flash\FlashFactory message(string|\Honed\Flash\Contracts\Message $message, string|null $type = null, int|null $duration = null) Flash a new message to the session.
 * @method static \Honed\Flash\FlashFactory success(string $message, int|null $duration = null) Flash a new success message to the session.
 * @method static \Honed\Flash\FlashFactory error(string $message, int|null $duration = null) Flash a new error message to the session.
 * @method static \Honed\Flash\FlashFactory info(string $message, int|null $duration = null) Flash a new info message to the session.
 * @method static \Honed\Flash\FlashFactory warning(string $message, int|null $duration = null) Flash a new warning message to the session.
 */
class Flash extends Facade
{
    /**
     * Get the root object behind the facade.
     *
     * @return \Honed\Flash\FlashFactory
     */
    public static function getFacadeRoot()
    {
        // @phpstan-ignore-next-line
        return parent::getFacadeRoot();
    }

    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return FlashFactory::class;
    }
}
