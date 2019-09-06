# Call Fuck Off As A Service in PHP

[![Build Status](https://travis-ci.org/klaude/foaas-php.png)](https://travis-ci.org/klaude/foaas-php)
[![Latest Stable Version](https://poser.pugx.org/klaude/foaas-php/v/stable)](https://packagist.org/packages/klaude/foaas-php)
[![Latest Unstable Version](https://poser.pugx.org/klaude/foaas-php/v/unstable)](https://packagist.org/packages/klaude/foaas-php)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/klaude/foaas-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/klaude/foaas-php/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/klaude/foaas-php/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/klaude/foaas-php/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/63ce3ca8-730c-473a-8f73-dec32a7b7602/mini.png)](https://insight.sensiolabs.com/projects/63ce3ca8-730c-473a-8f73-dec32a7b7602)

Were you looking to leverage the cloud to tell someone to fuck themselves? Do you need to do it from PHP? Well fuck me! Look no further!

This library automates calls to [FOAAS](https://foaas.herokuapp.com/) (which is probably the best web service ever). I make no claims of ownership of FOAAS or to it's availability. What the fuck do you want from me?

## Installation
Use [Composer](http://getcomposer.org/)!

Run `composer require klaude/foaas` then add `require_once __DIR__ . '/vendor/autoload.php';` (replacing `__DIR__` with wherever your project's root is if you need to) to the beginning of your fucking script, then boom!

## Usage
It's easy as fuck. Just make a `Foaas\Foaas` object and fucking go nuts.

```php
$fuck = new Foaas\Foaas;

// "Fuck off, Joker. - Batman"
echo $fuck->off('Joker', 'Batman');

// "Fucking fuck off, Esienhower. - Kruschev"
echo $fuck->ing('Esienhower', 'Kruschev');

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

// This is Fucking Awesome. - 2Pac
echo $fuck->awesome('2Pac');

// Come the fuck in or fuck the fuck off. - Kim Kardashian
echo $fuck->tucker('Kim Kardashian');

// Please choke on a bucket of cocks. - Pope Francis
echo $fuck->bucket('Pope Francis');

// "Fuck clowns." Seriously. Clowns are creepy.
// This example only uses the FOAAS message response, not the subtitle.
echo $fuck->clowns('me')->message;
```

You get the idea! There are way more fucks available to give that should auto-complete in your fancypants IDE.

FOAAS responses are kept in a `Foaas\Response` object so you can access FOAAS' message and subtitle directly. Or you can fucking echo the response as a string if that's what floats your fucking boat. What the fuck do I care?

### Options

Call `shout()` on your `Foaas` object to shout it from the goddamn mountain! Shouting resets after the FOAAS call finishes. Heaven knows we don't want to annoy anyone when we're telling them to fuck off.

```php
// "FUCK OFF, JOKER. - BATMAN"
echo $fuck->shout()->off('Joker', 'Batman');
```

Okay Mr. Worldwide, call `in($language)` on your `Foaas` object with a valid [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) or [RFC 3066](https://www.ietf.org/rfc/rfc3066.txt) language codes to let a motherfucker have it in that language. Just like shouting, the language gets reset after the FOAAS call goes through.

```php
// All swearing should be in German.
//
// "Bitte ersticken Sie an einem Eimer mit Schwänzen.   - Papst Franziskus"
echo $fuck->in('de')->bucket('Pope Francis');

// Google translates this back as "Fucking especially this paper clip. - Captain America". Cool.
//
// 他妈的特别是这个纸夹。   - 美国队长
echo $fuck->in('zh')->particular('paper clip', 'Captain America');
```

You can combine them too! Hot damn!

```php
// ТРАХНИ ТЕБЯ ОЧЕНЬ СИЛЬНО.   - БЕРНИ САНДЕРС
echo $fuck->shout()->in('ru')->thanks('Bernie Sanders');
```
