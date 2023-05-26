<?php
function processUserData($name, $age) {
   var_dump($name, $age ** 2);
}

// Chamada da função usando argumentos nomeados
processUserData(age: 25, name: "John");
