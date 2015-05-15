<?php

namespace Foaas;

/**
 * Oh fuck. Something broke.
 */
class Exception extends \Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct("Oh fuck. {$message}", $code, $previous);
    }
}
