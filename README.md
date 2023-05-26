# estudo-php8

# "Named Arguments" (Argumentos Nomeados)

Abaixo, três exemplos diferentes de como usar os "Named Arguments" (Argumentos Nomeados) no PHP 8:

Exemplo 1: Validação de dados em uma função com base no nome do argumento:
```php
function processUserData($name, $age) {
   // Processamento dos dados do usuário
}

// Chamada da função usando argumentos nomeados
processUserData(age: 25, name: "John");
```
Neste exemplo, os argumentos `name` e `age` são passados para a função `processUserData()` usando seus nomes como identificadores. Isso torna a chamada da função mais clara e menos propensa a erros, pois não depende da ordem dos argumentos.

Exemplo 2: Passagem de argumentos padrão usando argumentos nomeados:
```php
function sendEmail($recipient, $subject, $message, $cc = null, $bcc = null) {
   // Lógica para enviar o e-mail
}

// Chamada da função usando argumentos nomeados e argumento padrão
sendEmail(recipient: "john@example.com", subject: "Hello", message: "This is a test email");
```
Neste exemplo, a função `sendEmail()` aceita os argumentos `recipient`, `subject` e `message`. Os argumentos `cc` e `bcc` são opcionais e têm valores padrão. Ao usar argumentos nomeados, podemos especificar apenas os argumentos necessários, enquanto os argumentos opcionais usarão seus valores padrão.

Exemplo 3: Uso de argumentos nomeados para maior clareza em chamadas de função:
```php
function calculateTotal($price, $quantity, $discount = 0) {
   // Cálculo do total com desconto
}

// Chamada da função usando argumentos nomeados
calculateTotal(quantity: 5, price: 10, discount: 2);
```
Neste exemplo, a função `calculateTotal()` calcula o valor total com base no preço, quantidade e desconto. Ao usar argumentos nomeados, podemos especificar explicitamente qual valor corresponde a cada parâmetro, tornando a chamada da função mais legível e autoexplicativa.

Esses exemplos demonstram como os "Named Arguments" podem ser usados para melhorar a clareza, flexibilidade e manutenção do código em PHP 8.

```php
function foo(string $a, string $b, ?string $c) {
    echo "$a - $b - $c";
}
```

Em PHP, a sintaxe `?string` indica que o parâmetro `$c` é do tipo `string` ou pode ser `null`. Isso é conhecido como um tipo de união, onde o parâmetro pode aceitar um valor do tipo especificado ou pode ser nulo.

Neste exemplo, a função `foo()` recebe três parâmetros: `$a`, `$b` e `$c`. Os parâmetros `$a` e `$b` são do tipo `string`, o que significa que eles devem ser valores de string válidos. Já o parâmetro `$c` é do tipo `?string`, indicando que ele pode ser uma string ou nulo.

Ao chamar a função `foo()`, você pode passar um valor de string válido para `$c`, ou pode passar `null` se não houver um valor adequado para `$c`.

Aqui está um exemplo de chamada da função `foo()`:

```php
foo("Hello", "World", "Example");  // Saída: Hello - World - Example
```

Neste caso, a saída será "Hello - World - Example", pois todos os três argumentos são strings válidas.

E aqui está um exemplo onde o parâmetro `$c` é nulo:

```php
foo("Hello", "World", null);  // Saída: Hello - World -
```

Neste exemplo, a saída será "Hello - World -", onde `$c` está vazio, pois foi passado `null`.

A adição do operador `?` antes do tipo (`?string`) foi introduzida no PHP 7.1 e permite a definição explícita de tipos que podem ser nulos. Isso traz mais clareza e segurança ao lidar com valores opcionais.

# O operador nullsafe

O operador nullsafe é uma nova adição ao PHP 8 que permite acessar métodos e propriedades de objetos em cadeias de chamadas, mesmo quando um valor nulo (null) está presente em algum ponto da cadeia.

Antes do PHP 8, ao tentar acessar um método ou propriedade em uma cadeia de chamadas onde um dos objetos é nulo, um erro de "chamada de método em um objeto nulo" ou "propriedade de objeto nulo" seria lançado. Com o operador nullsafe, essa situação pode ser tratada de forma mais segura e conveniente.

O operador nullsafe é representado por `->?`. Ele é colocado imediatamente após a variável ou expressão que pode ser nula. Se essa expressão é nula, a cadeia de chamadas é interrompida e o resultado é nulo. Caso contrário, a chamada de método ou acesso à propriedade é realizada normalmente.

Aqui está um exemplo de uso do operador nullsafe:

```php
// Exemplo de classe
class Foo {
    public function getBar() {
        return new Bar();
    }
}

class Bar {
    public function getValue() {
        return "Hello World!";
    }
}

// Uso do operador nullsafe
$foo = null;
$value = $foo?->getBar()?->getValue();

echo $value;  // Saída: null (pois $foo é nulo)
```

Neste exemplo, a variável `$foo` é nula, mas a cadeia de chamadas `getBar()` e `getValue()` é executada de forma segura usando o operador nullsafe. Como resultado, a variável `$value` recebe o valor nulo.

O operador nullsafe é útil para evitar erros inesperados e facilitar a escrita de código mais conciso ao lidar com cadeias de chamadas que podem conter valores nulos.
