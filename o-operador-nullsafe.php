<?php
// Exemplo de classe
class Foo
{
    public function getBar()
    {
        return new Bar();
    }
}

class Bar
{
    public function getValue()
    {
        return "Hello World!";
    }
}

// Uso do operador nullsafe
$foo = null;
$value = $foo?->getBar()?->getValue();

var_dump($value);  // Saída: null (pois $foo é nulo)
