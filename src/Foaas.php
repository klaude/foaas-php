<?php

namespace Foaas;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Fuck off as a Service.
 *
 * Because fuck you. That's why. (Seriously, this is probably the best remote
 * service ever.)
 *
 * @method Response off(string $name, string $from) Fuck off, :name. - :from
 * @method Response you(string $name, string $from) Fuck you, :name. - :from
 * @method Response this(string $from) Fuck this. - :from
 * @method Response that(string $from) Fuck that. - :from
 * @method Response everything(string $from) Fuck everything. - :from
 * @method Response everyone(string $from) Everyone can go and fuck off. - :from
 * @method Response donut(string $name, string $from) :name, go and take a flying fuck at a rolling donut. - :from
 * @method Response shakespeare(string $name, string $from) :name, Thou clay-brained guts, thou knotty-pated fool, thou whoreson obscene greasy tallow-catch! - :from
 * @method Response linus(string $name, string $from) :name, there aren't enough swear-words in the English language, so now I'll have to call you perkeleen vittupää just to express my disgust and frustration with this crap. - :from
 * @method Response king(string $name, string $from) Oh fuck off, just really fuck off you total dickface. Christ :name, you are fucking thick. - :from
 * @method Response pink(string $from) Well, Fuck me pink. - :from
 * @method Response life(string $from) Fuck my life. - :from
 * @method Response chainsaw(string $name, string $from) Fuck me gently with a chainsaw, :name. Do I look like Mother Teresa? - :from
 * @method Response outside(string $name, string $from) :name, why don't you go outside and play hide-and-go-fuck-yourself? - :from
 * @method Response thanks(string $from) Fuck you very much. - :from
 * @method Response flying(string $from) I don't give a flying fuck. - :from
 * @method Response fascinating(string $from) Fascinating story, in what chapter do you shut the fuck up? - :from
 * @method Response madison(string $name, string $from) What you've just said is one of the most insanely idiotic things I have ever heard, :name. At no point in your rambling, incoherent response were you even close to anything that could be considered a rational thought. Everyone in this room is now dumber for having listened to it. I award you no points :name, and may God have mercy on your soul. - :from
 * @method Response cool(string $from) Cool story, Bro - :from
 * @method Response field(string $name, string $from, string $reference) And :name said unto :from, "Verily, cast thine eyes upon the field in which I grow my fucks", and :from gave witness unto the field, and saw that it was barren. - :reference
 * @method Response nugget(string $name, string $from) Well :name, aren't you a shining example of a rancid fuck-nugget. - :from
 * @method Response yoda(string $name, string $from) Fuck off, you must, :name. - :from
 * @method Response ballmer(string $name, string $company, string $from) Fucking :name is a fucking pussy. I'm going to fucking bury that guy, I have done it before, and I will do it again. I'm going to fucking kill :company. - :from
 * @method Response what(string $from) What the fuck?!. - :from
 * @method Response because(string $from) Why? Because Fuck you, that's why. - :from
 * @method Response tool(string $tool, string $from) Can you use :tool? Fuck no! - :from
 * @method Response bye(string $from) Fuckity bye! - :from
 * @method Response diabetes(string $from) I'd love to stop and chat to you but I'd rather have type 2 diabetes. - :from
 * @method Response bus(string $name, string $from) Christ on a bendy-bus, :name, don't be such a fucking faff-arse. - :from
 * @method Response xmas(string $name, string $from) Merry Fucking Christmas, :name. - :from
 * @method Response awesome(string $from) This is Fucking Awesome. - :from
 * @method Response tucker(string $from) Come the fuck in or fuck the fuck off. - :from
 * @method Response bucket(string $name, string $from) Please choke on a bucket of cocks. - :from
 * @method Response version() Get the FOAAS service version.
 *
 * @link http://foaas.com/
 * @link https://github.com/xenph/foaas
 */
class Foaas extends GuzzleClient
{
    /**
     * Fuck. Better make an FOAAS call.
     *
     * @param array $config Overrides to the default config.
     */
    public function __construct(array $config = [])
    {
        $defaultConfig = [
            'base_url' => 'https://foaas.herokuapp.com',
            'defaults' => [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ],
        ];

        parent::__construct(array_replace_recursive($defaultConfig, $config));
    }

    /**
     * Make a fucking FOAAS HTTP request.
     *
     * @throws Exception if you didn't pass enough arguments. Way to go, dingus.
     * @throws Exception if you fucked up and passed too many arguments.
     * @param string $name
     * @param array $arguments
     * @return Response
     */
    public function __call($name, array $arguments = [])
    {
        $missingArguments = [];
        $tooManyArguments = false;
        $operations = $this->getOperations();

        // Make sure the right number of fields were passed in.
        // Custom FOAAS calls have :thing and :from fields
        $customCallArguments = ['from'];
        $requiredArguments = in_array($name, array_keys($operations))
            ? $operations[$name]
            : $customCallArguments;

        $countDiff = count($arguments) - count($requiredArguments);

        // Figure out which arguments were missing or if there were too many
        // arguments.
        if ($countDiff < 0) {
            $missingArguments = array_splice($requiredArguments, count($arguments) * -1);
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
        return $this->callFoaas('/' . $name . '/' . implode('/', $arguments));
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
                function($field)
                {
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
        try {
            $response = $this->get($path)->json();
            return new Response($response['message'], $response['subtitle']);
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
        return $this->get('operations')->json();
    }
}
