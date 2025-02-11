
// comentario de uma linha

/* --------------------------------

Comentário de múltiplas linhas


-------------------------------- */

$nome = "Tiago";
$string = "Isso é um texto de aprendizado"; 
$inteiros = 20;
$inteiros_negativos = -20;
$float = 20.5;
$boleanos = false;
$nulos = null;
$nulos_negativos = null;

echo $string;

// Operadores aritimeticos 

$soma = $inteiros + $inteiros_negativos;
$subtracao = $inteiros - $inteiros_negativos;
$multiplicacao = $inteiros * $inteiros_negativos;
$divisao = $inteiros / $inteiros_negativos;

echo "Soma: ". $soma. "<br>";

// Operadores de definição

$a = 10;
$b = 5;
$soma_definição = $a + $b;
$resto_divisao = $a % $b;
$resto_divisao_negativos = $a % $b;

//operadores logicos

$verdadeiro = true;
$falso = false;
$and = $verdadeiro && $falso;
$or = $verdadeiro || $falso;
$not =!$verdadeiro;

// Operadores de incremento

$incremento = $inteiros++;
$decremento = $inteiros--;

//operadores condicionais

$idade = 18;

if($idade >= 18){
    echo "Você é maior de idade";
}else{
    echo "Você é menor de idade";
}


//false ou true

$booleano = true;

if($booleano){
    echo "Verdadeiro";
}else{
    echo "Falso";
}

// Operadores de comparacao 

$comparacao_igual = $inteiros == $inteiros_negativos;
$comparacao_diferente = $inteiros!= $inteiros_negativos;
$comparacao_maior = $inteiros > $inteiros_negativos;
$comparacao_menor = $inteiros < $inteiros_negativos;
$comparacao_maior_igual = $inteiros >= $inteiros_negativos;

