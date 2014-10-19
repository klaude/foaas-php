<?php

namespace Foaas\Tests;

use Foaas\Foaas;
use GuzzleHttp\Subscriber\Mock;

class FoaasTest extends \PHPUnit_Framework_TestCase
{
    /** @type string */
    protected $mockPath;

    /** @type Foaas */
    protected $foaas;

    /** @type string */
    protected $testName = 'name';

    /** @type string */
    protected $testFrom = 'from';

    public function setUp()
    {
        $this->mockPath = __DIR__ . '/mock';
        $this->foaas = new Foaas;
    }

    /**
     * Look at all these fucks I provide.
     *
     * @return array
     */
    public function provideFucks()
    {
        return [
            'oh fuck off' => [
                'off',
                "Fuck off, {$this->testName}.",
            ],
            'hey fuck you' => [
                'you',
                "Fuck you, {$this->testName}.",
            ],
            'fuck that' => [
                'that',
                'Fuck that.',
            ],
            'fuck this too' => [
                'this',
                'Fuck this.',
            ],
            'fuck everything' => [
                'everything',
                'Fuck everything.',
            ],
            'and fuck everyone' => [
                'everyone',
                'Fuck everyone.',
            ],
            'take a flying fuck at a donut or something' => [
                'donut',
                "{$this->testName}, go and take a flying fuck at a rolling donut.",
            ],
            'fuck you like Shakespeare would say' => [
                'shakespeare',
                "{$this->testName}, Thou clay-brained guts, thou knotty-pated fool, "
                    ."thou whoreson obscene greasy tallow-catch!",
            ],
            'fuck you, Linux nerd' => [
                'linus',
                "{$this->testName}, there aren't enough swear-words in the English language, "
                    . "so now I'll have to call you perkeleen vittupää just to express my disgust "
                    . "and frustration with this crap.",
            ],
            'you are fucking thick' => [
                'king',
                "Oh fuck off, just really fuck off you total dickface. Christ {$this->testName}, you are fucking thick.",
            ],
            'fuck me pink' => [
                'pink',
                'Well, Fuck me pink.',
            ],
            'fuck my life' => [
                'life',
                'Fuck my life.',
            ],
            'fuck me gently with a chainsaw' => [
                'chainsaw',
                "Fuck me gently with a chainsaw, {$this->testName}. Do I look like Mother Teresa?",
            ],
            'fuck you very much' => [
                'thanks',
                'Fuck you very much.',
            ],
            'give a flying fuck' => [
                'flying',
                "I don't give a flying fuck.",
            ],
            'tell me a fascinating fucking story' => [
                'fascinating',
                'Fascinating story, in what chapter do you shut the fuck up?.',
            ],
            'quote me some fucking billy madison' => [
                'madison',
                "What you've just said is one of the most insanely idiotic things I have ever heard, {$this->testName}. "
                    . "At no point in your rambling, incoherent response were you even close to anything that could be "
                    . "considered a rational thought. Everyone in this room is now dumber for having listened to it. "
                    . "I award you no points {$this->testName}, and may God have mercy on your soul.",
            ],
         ];
    }

    /**
     * @dataProvider provideFucks
     */
    public function testCanFuck($call, $expectedResponse)
    {
        $mock = new Mock([
            file_get_contents("{$this->mockPath}/{$call}")
        ]);

        $this->foaas->getEmitter()->attach($mock);
        $fuckOff = $this->foaas->$call($this->testName, $this->testFrom);

        $this->assertEquals($expectedResponse, $fuckOff->message);
        $this->assertEquals("- {$this->testFrom}", $fuckOff->subtitle);
    }


    public function testFuckAnArbitraryThingOkay()
    {
        $mock = new Mock([
            file_get_contents("{$this->mockPath}/__something")
        ]);

        $this->foaas->getEmitter()->attach($mock);
        $fuckSomething = $this->foaas->__something('clowns', $this->testFrom);

        $this->assertEquals('Fuck clowns.', $fuckSomething->message);
        $this->assertEquals("- {$this->testFrom}", $fuckSomething->subtitle);
    }

    public function testCanCheckForAFuckingProblem()
    {
        // HTML responses generate an exception, as Foaas\Foaas expects JSON.
        $mock = new Mock([
            file_get_contents("{$this->mockPath}/__not-json")
        ]);

        $this->foaas->getEmitter()->attach($mock);

        try {
            $this->foaas->__something('clowns', $this->testFrom);
        } catch (\Exception $e) {
            $this->assertInstanceOf('Foaas\\Exception', $e);
            $this->assertStringStartsWith('Oh fuck.', $e->getMessage());
        }
    }
}
