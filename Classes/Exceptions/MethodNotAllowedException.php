<?php

declare(strict_types=1);

namespace PictShare\Classes\Exceptions;

class MethodNotAllowedException extends \RuntimeException
{
    /**
     * MethodNotAllowedException constructor.
     *
     * @param string          $message
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct(string $message = '', int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}