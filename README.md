Call Fuck Off As A Service in PHP
=================================

Were you looking to leverage the cloud to tell someone to fuck themselves? Do you need to do it from PHP? Well fuck me! Look no further!

This library automates calls to [FOAAS](https://foaas.herokuapp.com/) (which is probably the best web service ever). I make no claims of ownership of FOAAS or to it's availability. What the fuck do you want from me?

Installation
------------
I hope to have this up in packagist once I have the fucking niceties in place in the project. Until then git clone this fucker and put it into your fucking project yourself.

Usage
-----
It's easy as fuck. Just make a `Foaas\Foaas` object and fucking go nuts.

    $fuck = new Foaas\Foaas;

    // "Fuck off, Joker. - Batman"
    echo $fuck->off('Joker', 'Batman') . "\n";

    // "Fuck you, Harpo. - Groucho"
    echo $fuck->you('Harpo', 'Groucho') . "\n";

    // "Fuck that. - Moses"
    echo $fuck->that('Moses') . "\n";

    // "Fuck this. - Jesus H. Christ"
    echo $fuck->this('Jesus H. Christ') . "\n";

    // "Fuck everything. - John F. Kennedy"
    echo $fuck->everything('John F. Kennedy') . "\n";

    // "Everyone can go and fuck off. - Bumblebee"
    echo $fuck->everyone('Bumblebee') . "\n";

    // "Hillary, go and take a flying fuck at a rolling donut. - Bill"
    echo $fuck->donut('Hillary', 'Bill') . "\n";

    // "Wolverine, Thou clay-brained guts, thou knotty-pated fool, thou whoreson obscene greasy tallow-catch! - Professor X"
    echo $fuck->shakespeare('Wolverine', 'Professor X') . "\n";

    // "Lucy, there aren't enough swear-words in the English language, so now I'll have to call you perkeleen vittupää just to express my disgust and frustration with this crap. - Charlie Brown"
    echo $fuck->linus('Lucy', 'Charlie Brown') . "\n";

    // "Oh fuck off, just really fuck off you total dickface. Christ Lucy, you are fucking thick. - Ricki"
    echo $fuck->king('Lucy', 'Ricki') . "\n";

    // "Well fuck me pink. - Simba"
    echo $fuck->pink('Simba') . "\n";

    // "Fuck my life. - Gandhi"
    echo $fuck->life('Gandhi') . "\n";

    // "Fuck me gently with a chainsaw, Jim. Do I look like Mother Teresa? - Dr. McCoy"
    echo $fuck->chainsaw('Jim', 'Dr. McCoy') . "\n";

    // "Fuck you very much. - Abraham Lincoln"
    echo $fuck->thanks('Abraham Lincoln') . "\n";

    // "Fuck clowns." Seriously. Clowns are creepy.
    // This example only retrieves the FOAAS message response, not the subtitle.
    echo $fuck->__something('clowns', 'me')->message;

FOAAS responses are kept in a `Foaas\Response` object so you can access FOAAS' message and subtitle directly. Or you can fucking echo the response as a string if that's what floats your fucking boat. What the fuck do I care?
