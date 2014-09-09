<?php

namespace Foaas\Tests;

use Guzzle\Tests\GuzzleTestCase;
use Foaas\Foaas;

class FoaasTest extends GuzzleTestCase
{
    protected $mockPath;
    protected $foaas;
    protected $testName = 'name';
    protected $testFrom = 'from';

    public function setUp()
    {
        $this->mockPath = dirname(dirname(__DIR__)) . '/mock';
        $this->foaas = new Foaas;
    }

    public function testOhFuckOff()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/off");
        $fuckOff = $this->foaas->off($this->testName, $this->testFrom);

        $this->assertEquals("Fuck off, {$this->testName}.", $fuckOff->message);
        $this->assertEquals("- {$this->testFrom}", $fuckOff->subtitle);
    }

    public function testHeyFuckYou()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/you");
        $fuckYou = $this->foaas->you($this->testName, $this->testFrom);

        $this->assertEquals("Fuck you, {$this->testName}.", $fuckYou->message);
        $this->assertEquals("- {$this->testFrom}", $fuckYou->subtitle);
    }

    public function testFuckThat()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/that");
        $fuckYou = $this->foaas->that($this->testFrom);

        $this->assertEquals('Fuck that.', $fuckYou->message);
        $this->assertEquals("- {$this->testFrom}", $fuckYou->subtitle);
    }

    public function testFuckThisToo()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/this");
        $fuckYou = $this->foaas->this($this->testFrom);

        $this->assertEquals('Fuck this.', $fuckYou->message);
        $this->assertEquals("- {$this->testFrom}", $fuckYou->subtitle);
    }

    public function testFuckEverything()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/everything");
        $fuckYou = $this->foaas->everything($this->testFrom);

        $this->assertEquals('Fuck everything.', $fuckYou->message);
        $this->assertEquals("- {$this->testFrom}", $fuckYou->subtitle);
    }

    public function testAndFuckEveryone()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/everyone");
        $fuckYou = $this->foaas->everyone($this->testFrom);

        $this->assertEquals('Fuck everyone.', $fuckYou->message);
        $this->assertEquals("- {$this->testFrom}", $fuckYou->subtitle);
    }

    public function testTakeAFlyingFuckAtADonutOrSomething()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/donut");
        $fuckDonut = $this->foaas->donut($this->testName, $this->testFrom);

        $this->assertEquals("{$this->testName}, go and take a flying fuck at a rolling donut.", $fuckDonut->message);
        $this->assertEquals("- {$this->testFrom}", $fuckDonut->subtitle);
    }

    public function testFuckYouLikeShakespeareWouldSay()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/shakespeare");
        $fuckShakespeare = $this->foaas->shakespeare($this->testName, $this->testFrom);

        $this->assertEquals(
            "{$this->testName}, Thou clay-brained guts, thou knotty-pated fool, thou whoreson obscene greasy tallow-catch!",
            $fuckShakespeare->message
        );
        $this->assertEquals("- {$this->testFrom}", $fuckShakespeare->subtitle);
    }

    public function testFuckYouLinuxNerd()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/linus");
        $fuckLinus = $this->foaas->linus($this->testName, $this->testFrom);

        $this->assertEquals(
            "{$this->testName}, there aren't enough swear-words in the English language, so now I'll have to call you perkeleen vittupää just to express my disgust and frustration with this crap.",
            $fuckLinus->message
        );
        $this->assertEquals("- {$this->testFrom}", $fuckLinus->subtitle);
    }

    public function testYouAreFuckingThick()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/king");
        $fuckKing = $this->foaas->king($this->testName, $this->testFrom);

        $this->assertEquals(
            "Oh fuck off, just really fuck off you total dickface. Christ {$this->testName}, you are fucking thick.",
            $fuckKing->message
        );
        $this->assertEquals("- {$this->testFrom}", $fuckKing->subtitle);
    }

    public function testFuckMePink()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/pink");
        $fuckPink = $this->foaas->pink($this->testFrom);

        $this->assertEquals('Well, Fuck me pink.', $fuckPink->message);
        $this->assertEquals("- {$this->testFrom}", $fuckPink->subtitle);
    }

    public function testFuckMyLife()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/life");
        $fuckLife = $this->foaas->life($this->testFrom);

        $this->assertEquals('Fuck my life.', $fuckLife->message);
        $this->assertEquals("- {$this->testFrom}", $fuckLife->subtitle);
    }

    public function testFuckMeGentlyWithAChainsaw()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/chainsaw");
        $fuckChainsaw = $this->foaas->chainsaw($this->testName, $this->testFrom);

        $this->assertEquals(
            "Fuck me gently with a chainsaw, {$this->testName}. Do I look like Mother Teresa?",
            $fuckChainsaw->message
        );
        $this->assertEquals("- {$this->testFrom}", $fuckChainsaw->subtitle);
    }

    public function testFuckYouVeryMuch()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/thanks");
        $fuckThanks = $this->foaas->thanks($this->testFrom);

        $this->assertEquals('Fuck you very much.', $fuckThanks->message);
        $this->assertEquals("- {$this->testFrom}", $fuckThanks->subtitle);
    }

    public function testFuckAnArbitraryThingOkay()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/__something");
        $fuckSomething = $this->foaas->__something('clowns', $this->testFrom);

        $this->assertEquals('Fuck clowns.', $fuckSomething->message);
        $this->assertEquals("- {$this->testFrom}", $fuckSomething->subtitle);
    }

    public function testCanCheckForAFuckingProblem()
    {
        // HTML responses generate an exception, as Foaas\Foaas expects JSON.
        $this->setMockResponse($this->foaas, "{$this->mockPath}/__not-json");

        try {
            $fuckErrors = $this->foaas->__something('clowns', $this->testFrom);
        } catch (\Exception $e) {
            $this->assertInstanceOf('Foaas\\Exception', $e);
            $this->assertStringStartsWith('Oh fuck.', $e->getMessage());
        }
    }

    public function testGiveAFlyingFuck()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/flying");
        $fuckFlying = $this->foaas->flying($this->testFrom);

        $this->assertEquals("I don't give a flying fuck.", $fuckFlying->message);
        $this->assertEquals("- {$this->testFrom}", $fuckFlying->subtitle);
    }

    public function testTellMeAFascinatingFuckingStory()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/fascinating");
        $fuckFascinating = $this->foaas->fascinating($this->testFrom);

        $this->assertEquals('Fascinating story, in what chapter do you shut the fuck up?.', $fuckFascinating->message);
        $this->assertEquals("- {$this->testFrom}", $fuckFascinating->subtitle);
    }

    public function testQuoteMeSomeFuckingBillyMadison()
    {
        $this->setMockResponse($this->foaas, "{$this->mockPath}/madison");
        $fuckMadison = $this->foaas->madison($this->testName, $this->testFrom);

        $this->assertEquals("What you've just said is one of the most insanely idiotic things I have ever heard, {$this->testName}. At no point in your rambling, incoherent response were you even close to anything that could be considered a rational thought. Everyone in this room is now dumber for having listened to it. I award you no points {$this->testName}, and may God have mercy on your soul.", $fuckMadison->message);
        $this->assertEquals("- {$this->testFrom}", $fuckMadison->subtitle);
    }
}
