<?php

use infobip\Conversions;
use infobip\Models;
use infobip\models\AbstractObject;
use infobip\ObjectArrayConversionRule;

require_once 'oneapi/client.php';

class Person extends AbstractObject {

    public $name;
    public $surname;
    public $aliases;

}

Models::register(
        'Person',
        array(
            new ObjectArrayConversionRule('Alias', 'aliases'),
        )
);

class Alias extends AbstractObject {

    public $alias;

}

Models::register('Alias');

$json = '{"surname": "bbb", "name": "aaa", "aliases": [{"alias": "qqqq"}, {"alias": "wwww"}, {"alias": "yyyy"}]}';

$result = Conversions::createFromJSON('Person', $json, false);

assert($result);
assert($result->surname == 'bbb');
assert(sizeof($result->aliases) == 3);
assert($result->aliases[1]->alias == 'wwww');
