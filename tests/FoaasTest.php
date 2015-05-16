<?php

namespace Foaas\Tests;

use Foaas\Foaas;
use GuzzleHttp\Subscriber\Mock;
use PHPUnit_Framework_TestCase;

class FoaasTest extends PHPUnit_Framework_TestCase
{
    /** @type string */
    protected $mockPath;

    /** @type \PHPUnit_Framework_MockObject_MockObject|Foaas */
    protected $foaas;

    public function setUp()
    {
        $this->mockPath = __DIR__ . '/mock';

        // The mock FOAAS client returns the operations defined in
        // mock/operations.
        $operationsMock = new Mock([
            file_get_contents("{$this->mockPath}/operations")
        ]);

        $mockFoaas = new Foaas;
        $mockFoaas->getEmitter()->attach($operationsMock);

        $this->foaas = $this->getMockBuilder('Foaas\\Foaas')
            ->setMethods(['operations'])
            ->getMock();

        $this->foaas->expects($this->any())
            ->method('operations')
            ->will($this->returnValue($mockFoaas->operations()));
    }

    public function testOverrideTheFuckingConfig()
    {
        $config = [
            'base_url' => 'http://example.org/',
        ];

        $this->assertEquals($config['base_url'], (new Foaas($config))->getBaseUrl());
    }

    public function testFuckAnArbitraryThingOkay()
    {
        $from = 'from';
        $mock = new Mock([
            file_get_contents("{$this->mockPath}/__something")
        ]);

        $this->foaas->getEmitter()->attach($mock);
        $fuckSomething = $this->foaas->__call('clowns', [$from]);

        $this->assertEquals('Fuck clowns.', $fuckSomething->message);
        $this->assertEquals("- {$from}", $fuckSomething->subtitle);
    }

    public function testHowDoIHoldAllTheseArguments()
    {
        $this->setExpectedException('Foaas\\Exception', 'Too many arguments!');
        $this->foaas->off('too', 'many', 'arguments');
    }

    public function testItBlowsUpWhenThereArentAnyCallFields()
    {
        $this->setExpectedException('Foaas\\Exception', 'Missing the arguments: name, from');
        $this->foaas->off();
    }

    public function testCanCheckForAFuckingFoaasProblem()
    {
        // HTML responses generate an exception, as Foaas\Foaas expects JSON.
        $mock = new Mock([
            file_get_contents("{$this->mockPath}/__not-json")
        ]);

        $this->foaas->getEmitter()->attach($mock);
        $this->setExpectedException('Foaas\\Exception', 'Oh fuck.');
        $this->foaas->__call('clowns', ['from']);
    }
}
