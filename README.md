Call Fuck Off As A Service in PHP
=================================
[![Build Status](https://travis-ci.org/klaude/foaas-php.png)](https://travis-ci.org/klaude/foaas-php)

Were you looking to leverage the cloud to tell someone to fuck themselves? Do you need to do it from PHP? Well fuck me! Look no further!

This library automates calls to [FOAAS](https://foaas.herokuapp.com/) (which is probably the best web service ever). I make no claims of ownership of FOAAS or to it's availability. What the fuck do you want from me?

Installation
------------
Use [Composer](http://getcomposer.org/)!

Add `"klaude/foaas": "dev-master"` to your project's `composer.json` file's require section:

```json
{
    "require": {
        "klaude/foaas": "dev-master"
    }
}
```

Next, add `require_once __DIR__ . '/vendor/autoload.php';` (replacing `__DIR__` with wherever your project's root is if you need to) to the beginning of your fucking script, then boom!

Usage
-----
It's easy as fuck. Just make a `Foaas\Foaas` object and fucking go nuts.

```php
$fuck = new Foaas\Foaas;

// "Fuck off, Joker. - Batman"
echo $fuck->off('Joker', 'Batman');

// "Fuck you, Harpo. - Groucho"
echo $fuck->you('Harpo', 'Groucho');

// "Fuck that. - Moses"
echo $fuck->that('Moses');

// "Fuck this. - Jesus H. Christ"
echo $fuck->this('Jesus H. Christ');

// "Fuck everything. - John F. Kennedy"
echo $fuck->everything('John F. Kennedy');

// "Everyone can go and fuck off. - Bumblebee"
echo $fuck->everyone('Bumblebee');

// "Hillary, go and take a flying fuck at a rolling donut. - Bill"
echo $fuck->donut('Hillary', 'Bill');

// "Wolverine, Thou clay-brained guts, thou knotty-pated fool, thou whoreson
// obscene greasy tallow-catch! - Professor X"
echo $fuck->shakespeare('Wolverine', 'Professor X');

// "Lucy, there aren't enough swear-words in the English language, so now I'll
// have to call you perkeleen vittupää just to express my disgust and
// frustration with this crap. - Charlie Brown"
echo $fuck->linus('Lucy', 'Charlie Brown');

// "Oh fuck off, just really fuck off you total dickface. Christ Lucy, you are
// fucking thick. - Ricki"
echo $fuck->king('Lucy', 'Ricki');

// "Well fuck me pink. - Simba"
echo $fuck->pink('Simba');

// "Fuck my life. - Gandhi"
echo $fuck->life('Gandhi');

// "Fuck me gently with a chainsaw, Jim. Do I look like Mother Teresa? - Dr.
// McCoy"
echo $fuck->chainsaw('Jim', 'Dr. McCoy');

// "Fuck you very much. - Abraham Lincoln"
echo $fuck->thanks('Abraham Lincoln');

// "I don't give a flying fuck. - Barack Obama"
echo $fuck->flying('Barack Obama') . "\n";

// "Fascinating story, in what chapter do you shut the fuck up? - Marie Curie"
echo $fuck->fascinating('Marie Curie') . "\n";

// "Fuck clowns." Seriously. Clowns are creepy.
// This example only retrieves the FOAAS message response, not the subtitle.
echo $fuck->__something('clowns', 'me')->message;
```

FOAAS responses are kept in a `Foaas\Response` object so you can access FOAAS' message and subtitle directly. Or you can fucking echo the response as a string if that's what floats your fucking boat. What the fuck do I care?
