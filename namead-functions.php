<?php

function foo(string $a, string $b, ?string $c) {
    echo "$a - $b - $c";
}


foo("Hello", "World", null);  // Saída: Hello - World - Example
