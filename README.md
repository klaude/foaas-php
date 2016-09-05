Call Fuck Off As A Service in PHP
=================================

[![Build Status](https://travis-ci.org/klaude/foaas-php.png)](https://travis-ci.org/klaude/foaas-php)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/klaude/foaas-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/klaude/foaas-php/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/klaude/foaas-php/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/klaude/foaas-php/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/63ce3ca8-730c-473a-8f73-dec32a7b7602/mini.png)](https://insight.sensiolabs.com/projects/63ce3ca8-730c-473a-8f73-dec32a7b7602)

Were you looking to leverage the cloud to tell someone to fuck themselves? Do you need to do it from PHP? Well fuck me! Look no further!

This library automates calls to [FOAAS](https://foaas.herokuapp.com/) (which is probably the best web service ever). I make no claims of ownership of FOAAS or to it's availability. What the fuck do you want from me?

Installation
------------
Use [Composer](http://getcomposer.org/)!

Run `composer require klaude/foaas` then add `require_once __DIR__ . '/vendor/autoload.php';` (replacing `__DIR__` with wherever your project's root is if you need to) to the beginning of your fucking script, then boom!

Usage
-----
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
echo $fuck->flying('Barack Obama');

// "Fascinating story, in what chapter do you shut the fuck up? - Marie Curie"
echo $fuck->fascinating('Marie Curie');

// "What you've just said is one of the most insanely idiotic things I have
// ever heard, Doctor. At no point in your rambling, incoherent response were
// you even close to anything that could be considered a rational thought.
// Everyone in this room is now dumber for having listened to it. I award you
// no points Doctor, and may God have mercy on your soul. - Rose"
echo $fuck->madison('Doctor', 'Rose');

// Cool story, Bro - Joseph Stalin
echo $fuck->cool('Joseph Stalin');

// And Homer said unto Marge, "Verily, cast thine eyes upon the field in which I
// grow my fucks", and Marge gave witness unto the field, and saw that it was
// barren. - The Book of Fucks
echo $fuck->field('Homer', 'Marge', 'The Book of Fucks');

// Well Mary, aren't you a shining example of a rancid fuck-nugget. - Joseph
echo $fuck->nugget('Mary', 'Joseph');

// Fuck off, you must, Doc. - Marty
echo $fuck->yoda('Doc', 'Marty');

// Fucking Spacely is a fucking pussy. I'm going to fucking bury that guy, I
// have done it before, and I will do it again. I'm going to fucking kill
// Spacely Space Sprockets. - George Jetson
echo $fuck->ballmer('Spacely', 'Spacely Space Sprockets', 'George Jetson');

// What the fuck?!. - Applejack
echo $fuck->what('Applejack');

// Why? Because Fuck you, that's why. - Muad'dib
echo $fuck->because('Muad\'dib');

// Can you use fingers? Fuck no! - Ron Paul
echo $fuck->caniuse('fingers', 'Ron Paul');

// Fuckity bye! - Han Solo
echo $fuck->bye('Han Solo');

// I'd love to stop and chat to you but I'd rather have type 2 diabetes. - Worf
echo $fuck->diabetes('Worf');

// Christ on a bendy-bus, Sam, don't be such a fucking faff-arse. - Dean
echo $fuck->bus('Sam', 'Dean');

// Merry Fucking Christmas, Lars. - James
echo $fuck->xmas('Lars', 'James');

// Happy Fucking Birthday, Trapper. - Hawkeye
echo $fuck->bday('Trapper', 'Hawkeye');

// This is Fucking Awesome. - 2Pac
echo $fuck->awesome('2Pac');

// Come the fuck in or fuck the fuck off. - Kim Kardashian
echo $fuck->tucker('Kim Kardashian');

// Please choke on a bucket of cocks. - Pope Francis
echo $fuck->bucket('Pope Francis');

// Fuck you, your whole family, your pets, and your feces. - Bill Gates
echo $fuck->family('Bill Gates');

// Steve, shut the fuck up. - Woz
echo $fuck->shutup('Steve', 'Woz');

// Ask me if I give a motherfuck ?!! - The Hamburglar
echo $fuck->zayn('The Hamburglar');

// Keep the fuck calm and pound sand! - Captain America
echo $fuck->keepcalm('pound sand', 'Captain America');

// Eat the fucking paint chips! - Mister Rogers
echo $fuck->dosomething('Eat', 'paint chips', 'Mister Rogers');

// Happy fuckin' Mornin'! - Mark Zuckerberg
echo $fuck->mornin('Mark Zuckerberg');

// Who has two thumbs and doesn't give a fuck? Deez nuts. - Snoop
echo $fuck->thumbs('Deez nuts', 'Snoop');

// You Fucktard! - Bernie Sanders
echo $fuck->retard('Bernie Sanders');

// The point is, ladies and gentleman, that misery -- for lack of a better word
// -- is good. misery is right. misery works. misery clarifies, cuts through,
// and captures the essence of the evolutionary spirit. misery, in all of its
// forms -- misery for life, for money, for love, knowledge -- has marked the
// upward surge of mankind - Harry Potter
echo $fuck->greed('misery', 'Harry Potter');

// Bravo mike, Bert. - Ernie
echo $fuck->bm('Bert', 'Ernie');

// Golf foxtrot yankee, Janet. - LaToya
echo $fuck->gfy('Janet', 'LaToya');

// Fuck me. - Akira
echo $fuck->me('Akira');

// R2-D2, back the fuck off. - Han
echo $fuck->back('R2-D2', 'Han');

// Chun Li, you think I give a fuck?. - Cammy
echo $fuck->think('Chun Li', 'Cammy');

// moot: Fuck off. And when you get there, fuck off from there too. Then fuck off some more. Keep fucking off until you get back here. Then fuck off again. - Lowtax
echo $fuck->keep('moot', 'Lowtax');

// And not a single fuck was given. - Edward Snowden
echo $fuck->single('Edward Snowden');

// Lars, what the fuck were you actually thinking? - James
echo $fuck->thinking('Lars', 'James');

// Looking for a fuck to give. - Beyonce
echo $fuck->looking('Beyonce');

// No fucks given. - Splinter
echo $fuck->no('Splinter');

// I give zero fucks. - Elvis
echo $fuck->give('Elvis');

// Zero, thats the number of fucks I give. - Theo de Raadt
echo $fuck->zero('Theo de Raadt');

// Sindarin, motherfucker, do you speak it? - Elrond
echo $fuck->pulp('Sindarin', 'Elrond');

// For fuck's sake! - Michael Jordan
echo $fuck->sake('Michael Jordan');

// Fuck this pizza in particular. - Papa John
echo $fuck->particular('pizza', 'Papa John');

// Who the fuck are you anyway, Toys For Tots, why are you stirring up so much trouble, and, who pays you? - Kim Jong Un
echo $fuck->anyway('Toys For Tots', 'Kim Jong Un');

// Maybe. Maybe not. Maybe fuck yourself. - Bill Nye
echo $fuck->maybe('Bill Nye');

// Charles, your head is as empty as a eunuch’s underpants. Fuck off! - Margaret
echo $fuck->blackadder('Charles', 'Margaret');

// Fuck you and the horse you rode in on. - William Wallace
echo $fuck->horse('William Wallace');

// John you are being the usual slimy hypocritical asshole... You may have had value ten years ago, but people will see that you don't anymore. - Paul
echo $fuck->deraadt('John', 'Paul');

// What the fuck is you problem Scully? - Mulder
echo $fuck->problem('Scully', 'Mulder');

// Fuck off Maverick, you worthless cocksplat. - Goose
echo $fuck->cocksplat('Maverick', 'Goose');

// Thanks, fuck you too. - Stalin
echo $fuck->too('Stalin');

// Fuck off with a well balanced meal - Alex Trebek
echo $fuck->{'off-with'}('a well balanced meal', 'Alex Trebek');

// "Fuck clowns." Seriously. Clowns are creepy.
// This example only uses the FOAAS message response, not the subtitle.
echo $fuck->clowns('me')->message;
```

FOAAS responses are kept in a `Foaas\Response` object so you can access FOAAS' message and subtitle directly. Or you can fucking echo the response as a string if that's what floats your fucking boat. What the fuck do I care?
