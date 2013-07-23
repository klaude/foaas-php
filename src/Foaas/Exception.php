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
     */
    public function __construct($message = '', $code = 0)
    {
        parent::__construct("Oh fuck. {$message}", $code);
    }
}
