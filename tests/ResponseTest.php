<?php

namespace Foaas\Tests;

use Foaas\Response;
use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
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
