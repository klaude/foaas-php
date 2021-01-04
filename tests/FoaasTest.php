<?php

namespace Foaas\Tests;

use Foaas\Exception as FoaasException;
use Foaas\Foaas;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class FoaasTest extends TestCase
{
    /** @var string */
    protected $mockPath;

    /** @var \GuzzleHttp\Handler\MockHandler */
    protected $mockHandler;

    public function setUp(): void
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
        $this->expectException(FoaasException::class);
        $this->expectExceptionMessage('Too many arguments!');

        $foaas = new Foaas(['handler' => HandlerStack::create($this->mockHandler)]);
        $foaas->off('too', 'many', 'arguments');
    }

    public function testItBlowsUpWhenThereArentAnyCallFields()
    {
        $this->expectException(FoaasException::class);
        $this->expectExceptionMessage('Missing the arguments: name, from');

        $foaas = new Foaas(['handler' => HandlerStack::create($this->mockHandler)]);
        $foaas->off();
    }

    public function testCanCheckForAFuckingFoaasProblem()
    {
        $this->expectException(FoaasException::class);
        $this->expectExceptionMessage('Oh fuck.');


        // HTML responses generate an exception, as Foaas\Foaas expects JSON.
        $this->mockHandler->append(new Response(200, [], file_get_contents("{$this->mockPath}/__not-json")));
        $foaas = new Foaas(['handler' => HandlerStack::create($this->mockHandler)]);
        $foaas->__call('clowns', ['from']);
    }

    public function provideMeSomeFuckingOptions()
    {
        return [
            'no fuckin options' => [false, null, ''],
            'just gonna be annoying and shout it' => [true, null, 'shoutcloud'],
            'lol fuck in Spanish' => [false, 'es', 'i18n=es'],
            'shout in German so they can hear me in fucking Frankfurt!' => [true, 'de', 'shoutcloud&i18n=de'],
        ];
    }

    /**
     * @dataProvider provideMeSomeFuckingOptions
     * @param bool $shouting
     * @param string $language
     * @param string $expectedQueryString
     * @throws \ReflectionException
     */
    public function testBuildMeTheGoddamnQueryString($shouting, $language, $expectedQueryString)
    {
        $foaas = new Foaas(['handler' => HandlerStack::create($this->mockHandler)]);

        if ($shouting) {
            $this->assertSame($foaas, $foaas->shout());
        }

        if ($language !== null) {
            $this->assertSame($foaas, $foaas->in($language));
        }

        $reflection = new ReflectionClass(get_class($foaas));
        $method = $reflection->getMethod('buildQueryString');
        $method->setAccessible(true);
        $actualQueryString = $method->invokeArgs($foaas, []);

        $this->assertEquals($expectedQueryString, $actualQueryString);
    }
}
