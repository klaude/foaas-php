<?php

namespace Foaas;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Fuck off as a Service.
 *
 * Because fuck you. That's why. (Seriously, this is probably the best remote
 * service ever.)
 *
 * @method Response anyway(string $company, string $from) Who the fuck are you anyway, :company, why are you stirring up so much trouble, and, who pays you? - :from
 * @method Response asshole(string $from) Fuck you, asshole. - :from
 * @method Response awesome(string $from) This is Fucking Awesome. - :from
 * @method Response back(string $name, string $from) :name, back the fuck off. - :from
 * @method Response bag(string $from) Eat a bag of fucking dicks. - :from
 * @method Response ballmer(string $name, string $company, string $from) Fucking :name is a fucking pussy. I'm going to fucking bury that guy, I have done it before, and I will do it again. I'm going to fucking kill :company. - :from
 * @method Response bday(string $name, string $from) Happy Fucking Birthday, :name. - :from
 * @method Response because(string $from) Why? Because Fuck you, that's why. - :from
 * @method Response blackadder(string $name, string $from) :name, your head is as empty as a eunuch’s underpants. Fuck off! - :from
 * @method Response bm(string $name, string $from) Bravo mike, :name. - :from
 * @method Response bucket(string $from) Please choke on a bucket of cocks. - :from
 * @method Response bus(string $name, string $from) Christ on a bendy-bus, :name, don't be such a fucking faff-arse. - :from
 * @method Response bye(string $from) Fuckity bye! - :from
 * @method Response caniuse(string $tool, string $from) Can you use :tool? Fuck no! - :from
 * @method Response chainsaw(string $name, string $from) Fuck me gently with a chainsaw, :name. Do I look like Mother Teresa? - :from
 * @method Response cocksplat(string $name, string $from) Fuck off :name, you worthless cocksplat. - :from
 * @method Response cool(string $from) Cool story, Bro - :from
 * @method Response cup(string $from) How about a nice cup of shut the fuck up? - :from
 * @method Response dalton(string $name, string $from) :name: A fucking problem solving super-hero. - :from
 * @method Response deraadt(string $name, string $from) :name you are being the usual slimy hypocritical asshole... You may have had value ten years ago, but people will see that you don't anymore. - :from
 * @method Response diabetes(string $from) I'd love to stop and chat to you but I'd rather have type 2 diabetes. - :from
 * @method Response donut(string $name, string $from) :name, go and take a flying fuck at a rolling donut. - :from
 * @method Response dosomething(string $do, string $something, string $from) :do the fucking :something! - :from
 * @method Response equity(string $name, string $from) Equity only? Long hours? Zero Pay? Well :name, just sign me right the fuck up. - :from
 * @method Response everyone(string $from) Everyone can go and fuck off. - :from
 * @method Response everything(string $from) Fuck everything. - :from
 * @method Response family(string $from) Fuck you, your whole family, your pets, and your feces. - :from
 * @method Response fascinating(string $from) Fascinating story, in what chapter do you shut the fuck up? - :from
 * @method Response fewer(string $name, string $from) Go fuck yourself :name, you'll disappoint fewer people. - :from
 * @method Response field(string $name, string $from, string $reference) And :name said unto :from, "Verily, cast thine eyes upon the field in which I grow my fucks", and :from gave witness unto the field, and saw that it was barren. - :reference
 * @method Response flying(string $from) I don't give a flying fuck. - :from
 * @method Response ftfy(string $from) Fuck That, Fuck You - :from
 * @method Response fts(string $name, string $from) Fuck that shit, :name. - :from
 * @method Response fyyff(string $from) Fuck you, you fucking fuck. - :from
 * @method Response gfy(string $name, string $from) Golf foxtrot yankee, :name. - :from
 * @method Response give(string $from) I give zero fucks. - :from
 * @method Response greed(string $noun, string $from) The point is, ladies and gentleman, that :noun -- for lack of a better word -- is good. :noun is right. :noun works. :noun clarifies, cuts through, and captures the essence of the evolutionary spirit. :noun, in all of its forms -- :noun for life, for money, for love, knowledge -- has marked the upward surge of mankind - :from
 * @method Response horse(string $from) Fuck you and the horse you rode in on. - :from
 * @method Response immensity(string $from) You can not imagine the immensity of the FUCK I do not give. - :from
 * @method Response ing(string $name, string $from) Fucking fuck off, :name. - :from
 * @method Response jinglebells(string $from) Fuck you, fuck me, fuck your family. Fuck your father, fuck your mother, fuck you and me. - :from
 * @method Response keep(string $name, string $from) :name: Fuck off. And when you get there, fuck off from there too. Then fuck off some more. Keep fucking off until you get back here. Then fuck off again. - :from
 * @method Response keepcalm(string $reaction, string $from) Keep the fuck calm and :reaction! - :from
 * @method Response king(string $name, string $from) Oh fuck off, just really fuck off you total dickface. Christ :name, you are fucking thick. - :from
 * @method Response life(string $from) Fuck my life. - :from
 * @method Response linus(string $name, string $from) :name, there aren't enough swear-words in the English language, so now I'll have to call you perkeleen vittupää just to express my disgust and frustration with this crap. - :from
 * @method Response logs(string $from) Check your fucking logs! - :from
 * @method Response look(string $name, string $from) :name, do I look like I give a fuck? - :from
 * @method Response looking(string $from) Looking for a fuck to give. - :from
 * @method Response madison(string $name, string $from) What you've just said is one of the most insanely idiotic things I have ever heard, :name. At no point in your rambling, incoherent response were you even close to anything that could be considered a rational thought. Everyone in this room is now dumber for having listened to it. I award you no points :name, and may God have mercy on your soul. - :from
 * @method Response maybe(string $from) Maybe. Maybe not. Maybe fuck yourself. - :from
 * @method Response me(string $from) Fuck me. - :from
 * @method Response mornin(string $from) Happy fuckin' Mornin'! - :from
 * @method Response no(string $from) No fucks given. - :from
 * @method Response nugget(string $name, string $from) Well :name, aren't you a shining example of a rancid fuck-nugget. - :from
 * @method Response off(string $name, string $from) Fuck off, :name. - :from
 * @method Response {'off-with'}(string $behavior, string $from) Fuck off with :behavior - :from
 * @method Response outside(string $name, string $from) :name, why don't you go outside and play hide-and-go-fuck-yourself? - :from
 * @method Response particular(string $thing, string $from) Fuck this :thing in particular. - :from
 * @method Response pink(string $from) Well, Fuck me pink. - :from
 * @method Response problem(string $name, string $from) What the fuck is you problem :name? - :from
 * @method Response programmer(string $from) Fuck you, I'm a programmer, bitch! - :from
 * @method Response pulp(string $language, string $from) :language, motherfucker, do you speak it? - :from
 * @method Response question(string $from) To fuck off, or to fuck off (that is not a question) - :from
 * @method Response ratarse(string $from) I don't give a rat's arse. - :from
 * @method Response retard(string $from) You Fucktard! - :from
 * @method Response ridiculous(string $from) That's fucking ridiculous - :from
 * @method Response rtfm(string $from) Read the fucking manual! - :from
 * @method Response sake(string $from) For Fuck's sake! - :from
 * @method Response shakespeare(string $name, string $from) :name, Thou clay-brained guts, thou knotty-pated fool, thou whoreson obscene greasy tallow-catch! - :from
 * @method Response shit(string $from) Fuck this shit! - :from
 * @method Response shutup(string $name, string $from) :name, shut the fuck up. - :from
 * @method Response single(string $from) Not a single fuck was given. - :from
 * @method Response thanks(string $from) Fuck you very much. - :from
 * @method Response that(string $from) Fuck that. - :from
 * @method Response think(string $name, string $from) :name, you think I give a fuck? - :from
 * @method Response thinking(string $name, string $from) :name, what the fuck where you actually thinking? - :from
 * @method Response this(string $from) Fuck this. - :from
 * @method Response thumbs(string $name, string $from) Who has two thumbs and doesn't give a fuck? :name. - :from
 * @method Response too(string $from) Thanks, fuck you too. - :from
 * @method Response tucker(string $from) Come the fuck in or fuck the fuck off. - :from
 * @method Response waste(string $name, string $from) I don't waste my fucking time with your bullshit :name! - :from
 * @method Response what(string $from) What the fuck?!. - :from
 * @method Response xmas(string $name, string $from) Merry Fucking Christmas, :name. - :from
 * @method Response yoda(string $name, string $from) Fuck off, you must, :name. - :from
 * @method Response you(string $name, string $from) Fuck you, :name. - :from
 * @method Response zayn(string $from) Ask me if I give a motherfuck ?!! - :from
 * @method Response zero(string $from) Zero, thats the number of fucks I give. - :from
 * @method Response version() Get the FOAAS service version.
 *
 * @link http://foaas.com/
 * @link https://github.com/xenph/foaas
 */
class Foaas extends GuzzleClient
{
    /**
     * Are we gonna fucking shout it out or not?
     *
     * @var bool
     */
    protected $shouting = false;

    /**
     * We gonna insult someone in another language or what?
     *
     * @var string|null
     */
    protected $language;

    /**
     * Fuck. Better make an FOAAS call.
     *
     * @param array $config Overrides to the default config.
     */
    public function __construct(array $config = [])
    {
        $defaultConfig = [
            'base_uri' => 'https://foaas.herokuapp.com',
            'headers' => [
                'Accept' => 'application/json',
            ],
        ];

        parent::__construct(array_replace_recursive($defaultConfig, $config));
    }

    /**
     * Make a fucking FOAAS HTTP request.
     *
     * @throws Exception if you didn't pass enough arguments. Way to go, dingus.
     * @throws Exception if you fucked up and passed too many arguments.
     * @param string $method
     * @param array $args
     * @return Response
     */
    public function __call($method, $args)
    {
        $missingArguments = [];
        $tooManyArguments = false;
        $operations = $this->getOperations();

        // Make sure the right number of fields were passed in.
        // Custom FOAAS calls have :thing and :from fields
        $customCallArguments = ['from'];
        $requiredArguments = array_key_exists($method, $operations)
            ? $operations[$method]
            : $customCallArguments;

        $countDiff = count($args) - count($requiredArguments);

        // Figure out which arguments were missing or if there were too many
        // arguments.
        if ($countDiff < 0) {
            $missingArguments = array_splice($requiredArguments, count($args) * -1);
        } elseif ($countDiff > 0) {
            $tooManyArguments = true;
        }

        // Hey fucko, ya missed something.
        if (!empty($missingArguments)) {
            throw new Exception('Missing the arguments: ' . implode(', ', $missingArguments) . '.');
        }

        // How do I hold all these arguments?
        if ($tooManyArguments) {
            throw new Exception('Too many arguments!');
        }

        // Finally, make the damn FOAAS call.
        return $this->callFoaas('/' . $method . '/' . implode('/', $args));
    }

    /**
     * Grab the stupid operations list from FOAAS and turn it into a operation
     * name => fields array for the calling code.
     *
     * @return array
     */
    protected function getOperations()
    {
        // Cache the FOAAS call names and required parameters.
        static $operations = [];

        if (!empty($operations)) {
            return $operations;
        }

        // Separate available operations into name/fields pairs.
        foreach ($this->operations() as $operation) {
            $operationName = explode('/', $operation['url'])[1];
            $fields = array_map(
                static function ($field) {
                    return $field['field'];
                },
                $operation['fields']
            );

            $operations[$operationName] = $fields;
        }

        return $operations;
    }

    /**
     * Make a fucking FOAAS HTTP request.
     *
     * @throws Exception if FOAAS is giving us shit.
     * @param string $path
     * @return Response
     */
    protected function callFoaas($path = '/')
    {
        $options = [];
        $queryString = $this->buildQueryString();

        if ($queryString !== '') {
            $options['query'] = $queryString;
        }

        try {
            $response = json_decode($this->request('GET', $path, $options)->getBody()->getContents(), true);

            // How the fuck did this happen? I'll tell how you it fuckin'
            // happened. FOAAS got a call with an unknown language for
            // translation and shit all over us. That's what.
            if (!array_key_exists('subtitle', $response) || $response['subtitle'] === ' undefined') {
                throw new Exception($response['message'], 400);
            }

            return new Response($response['message'], $response['subtitle']);
        } catch (Exception $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * Get a list of all the fucking available FOAAS operations.
     *
     * @return array
     */
    public function operations()
    {
        return json_decode($this->request('GET', 'operations')->getBody(), true);
    }

    /**
     * Okay we're gonna shout this one real fuckin' loud.
     *
     * @return self
     */
    public function shout()
    {
        $this->shouting = true;
        return $this;
    }

    /**
     * Fuck off in a language that's not English. Pinche cabrón.
     *
     * @param string|null $language
     * @return self
     */
    public function in($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Build an FOAAS query string from the dumbass little internal client bits.
     *
     * Call options are reset for the next FOAAS call. Because side effects like
     * this are the fucking shit.
     *
     * @return string
     */
    protected function buildQueryString()
    {
        $queryStringParts = [];

        if ($this->shouting) {
            $queryStringParts[] = 'shoutcloud';
            $this->shouting = false;
        }

        if ($this->language !== null) {
            $queryStringParts[] = "i18n={$this->language}";
            $this->language = null;
        }

        return implode('&', $queryStringParts);
    }
}
