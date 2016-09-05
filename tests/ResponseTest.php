<?php

namespace Foaas\Tests;

use Foaas\Response;
use PHPUnit_Framework_TestCase;

class ResponseTest extends PHPUnit_Framework_TestCase
{
    public function testCanInstantiateAFuckingResponse()
    {
        $response = new Response('my message', 'my subtitle');
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals('my message', $response->message);
        $this->assertEquals('my subtitle', $response->subtitle);
    }

    public function testCanFuckingStringifyAResponse()
    {
        $response = new Response('my message', 'my subtitle');
        $this->assertEquals('my message my subtitle', "{$response}");
    }
}
