<?php

namespace Foaas;

/**
 * A fucking FOAAS response.
 */
class Response
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $subtitle;

    /**
     * Make a fucking response, okay?
     *
     * @param string $message
     * @param string $subtitle
     */
    public function __construct($message, $subtitle)
    {
        $this->message = $message;
        $this->subtitle = $subtitle;
    }

    /**
     * You'd better be able to fucking print this response as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return "{$this->message} {$this->subtitle}";
    }
}
