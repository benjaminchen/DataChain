# DataChain

## Purpose

Making data structural and easy to use.

## Usage

First instantiate DataChain with your data as a argument. Your data can be array, object, string, etc.

```
use Rde\DataChain;

$yourData = array(
    'a' => 'test',
    'b' => array(
        'c' => 'end'
    )
);

$dataChain = new DataChain($yourData);

// get dataChain object
$dataChain->a;

// get value of a, this will get 'test'
$dataChain->a->value();

// get multi layer value, this will get 'end'
$dataChain->b->c->value();

// When the key is not set, it will return dataChain object
$dataChain->a->d;

// When get the value of non-existent key will return null
$dataChain->a->d->value();
```
