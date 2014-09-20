<?php

namespace Foaas\Tests;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanInstantiateAFuckingResponse()
    {
        $response = new \Foaas\Response('my message', 'my subtitle');
        $this->assertInstanceOf('\\Foaas\\Response', $response);
        $this->assertEquals('my message', $response->message);
        $this->assertEquals('my subtitle', $response->subtitle);
    }

    public function testCanFuckingStringifyAResponse()
    {
        $response = new \Foaas\Response('my message', 'my subtitle');
        $this->assertEquals('my message my subtitle', "{$response}");
    }
}
