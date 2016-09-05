<?php

namespace Foaas\Tests;

use Foaas\Exception as FoaasException;
use Foaas\Foaas;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit_Framework_TestCase;

class FoaasTest extends PHPUnit_Framework_TestCase
{
    /** @type string */
    protected $mockPath;

    /** @var \GuzzleHttp\Handler\MockHandler */
    protected $mockHandler;

    public function setUp()
    {
        $this->mockPath = __DIR__ . '/mock';

        // The mock FOAAS client returns the operations defined in
        // mock/operations.
        $this->mockHandler = new MockHandler([
            new Response(200, [], file_get_contents("{$this->mockPath}/operations")),
        ]);
    }

    public function testOverrideTheFuckingConfig()
    {
        $config = [
            'base_uri' => 'http://example.org/',
        ];

        $this->assertEquals($config['base_uri'], (new Foaas($config))->getConfig()['base_uri']);
    }

    public function testFuckAnArbitraryThingOkay()
    {
        $from = 'from';
        $this->mockHandler->append(new Response(200, [], file_get_contents("{$this->mockPath}/__something")));
        $foaas = new Foaas(['handler' => HandlerStack::create($this->mockHandler)]);

        $fuckSomething = $foaas->__call('clowns', [$from]);

        $this->assertEquals('Fuck clowns.', $fuckSomething->message);
        $this->assertEquals("- {$from}", $fuckSomething->subtitle);
    }

    public function testHowDoIHoldAllTheseArguments()
    {
        $foaas = new Foaas(['handler' => HandlerStack::create($this->mockHandler)]);

        $this->setExpectedException(FoaasException::class, 'Too many arguments!');
        $foaas->off('too', 'many', 'arguments');
    }

    public function testItBlowsUpWhenThereArentAnyCallFields()
    {
        $foaas = new Foaas(['handler' => HandlerStack::create($this->mockHandler)]);

        $this->setExpectedException(FoaasException::class, 'Missing the arguments: name, from');
        $foaas->off();
    }

    public function testCanCheckForAFuckingFoaasProblem()
    {
        // HTML responses generate an exception, as Foaas\Foaas expects JSON.
        $this->mockHandler->append(new Response(200, [], file_get_contents("{$this->mockPath}/__not-json")));
        $foaas = new Foaas(['handler' => HandlerStack::create($this->mockHandler)]);

        $this->setExpectedException(FoaasException::class, 'Oh fuck.');
        $foaas->__call('clowns', ['from']);
    }
}
