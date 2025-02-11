<?php

// Exercicio 1 " Desafio"


$variavel = "Hello Mundo!";
echo $variavel;

?>


// Exercicio 2 " Calculadora simples"

$num1 = 5;

$num2 = 8;

echo "Soma: ".($num1 + $num2)."<br>";
$num1 = 15;

$num2 = 8;

$soma = $num1 + $num2;

$subtracao = $num1 - $num2;

$multiplicacao = $num1 * $num2;

$divisao = $num1 / $num2;

$resto = $num1 % $num2;

echo "Soma: $soma <br>";

echo "Subtracao: $subtracao <br>";

echo "Multiplicacao: $multiplicacao <br>";

echo "Divisao: $divisao <br>";

echo "Resto: $resto <br>";  

// Exercicio 3 "Declara uma variavel para armazenar a idade da pessoa

$idade = 18;

if($idade >= 18){
    echo "Você é maior de idade";
}else{
    echo "Você é menor de idade";
}

// Exercicio 4 " Numero par ou impar "

$numero = 10;

if($numero % 2 == 0){
    echo "O numero $numero é par";
}else{
    echo "O numero $numero é impar";
}

// Exercicio 5 " Calculadora de descontos"

$preco = 150;

$desconto = 0.2;

$preco_desconto = $preco * (1 - $desconto);

echo "Preço com desconto: $preco_desconto"; 



// Exercicio 6 " Pontuacao do Jogador que comeca com 100 e a cada vitoria ganha 20 e a cada derrota perde 15 "

$pontuacao = 100;

$vitorias = 3;

$derrotas = 2;

for($i = 0; $i < $vitorias; $i++){
    $pontuacao += 20;
}

for($i = 0; $i < $derrotas; $i++){
    $pontuacao -= 15;
}

echo "Pontuacao final: $pontuacao";

// Exercicio 7 "Crie um script que declare três variáveis para armazenar as notas de um aluno em três provas. Calcule a média dessas notas e exiba uma mensagem dizendo se o aluno foi aprovado ou reprovado. A média mínima para aprovação é 7.​"

$prova1 = 8;

$prova2 = 9;

$prova3 = 7;

$media = ($prova1 + $prova2 + $prova3) / 3;

if($media >= 7){
    echo "Aluno aprovado com média: $media";
}else{
    echo "Aluno reprovado com média: $media";
}


// Exercicio 8 "Login Simples​"

$login = "admin";

$senha = "123456";

if($login == "admin" && $senha == "123456"){
    echo "Login efetuado com sucesso!";
}else{
    echo "Login ou senha inválidos!";
}

// Exercicio 9 "Crie um script que exiba uma contagem regressiva de 10 até 0. Ao final da contagem, exiba a mensagem "Feliz Ano Novo!"."

for($i = 10; $i >= 0; $i--){
    echo "$i... ";
}

echo "Feliz Ano Novo!";


// Exercicio 10 "Crie um script que calcule a soma de todos os números pares de 1 a 100 e exiba o resultado​"

$soma = 0;

for($i = 2; $i <= 100; $i += 2){
    $soma += $i;
}

echo "Soma dos numeros pares de 1 a 100: $soma";


// Exercicio 11 "Crie um script que exiba a tabuada de multiplicação de um número dado (por exemplo, 5), de 1 a 10"

$numero = 5;

for($i = 1; $i <= 10; $i++){
    echo "$numero x $i = ".($numero * $i)."<br>";
}


// Exercicio 12 "Crie uma função chamada boasVindas que receba um nome como argumento e exiba a mensagem "Bem-vindo, [nome]!"

$nome = "Tiago";

function boasVindas($nome){
    echo "Bem-vindo, $nome!";
}

boasVindas("$nome");

//Exercicio 13 "Crie um array com 5 valores que representem os preços de produtos em uma loja. Escreva um script que calcule o total da compra (soma dos valores do array)"

$precos = [10, 20, 30, 40, 50];

$total = 0; = array    

foreach($precos as $preco){
    $total += $preco;
}

echo "Total da compra: $total";


// Exercicio 14 "Crie um array com uma lista de palavras. Escreva um script que filtre e exiba apenas as palavras que têm mais de 5 letras"

$palavras = ["cachorro", "gato", "elefante", "macaco", "panda", "coelho", "arara"];

$palavras_mais_de_cinco_letras = [];

foreach($palavras as $palavra){
    if(strlen($palavra) > 5){
        $palavras_mais_de_cinco_letras[] = $palavra;
    }
}

print_r($palavras_mais_de_cinco_letras);


//  Exercicio 15 "Crie um array associativo para armazenar as seguintes informações sobre um usuário: nome, idade e email. Exiba as informações desse usuário no formato:"

$usuario = [
    "nome" => "Tiago",
    "idade" => 25,
    "email" => "tiago@gmail.com"
];

echo "Nome: {$usuario['nome']}, Idade: {$usuario['idade']}, Email: {$usuario['email']}";


// exercicio 16 " Crie um array associativo para armazenar uma lista de três produtos. Cada produto deve ter um nome (chave) e um preço (valor). Exiba o nome e o preço de cada produto no formato"

$produtos = [
    "produto1" => 10.99,
    "produto2" => 15.99,
    "produto3" => 20.99
];

foreach($produtos as $nome => $preco){
    echo "Nome: $nome, Preço: R$ $preco <br>";
}

// exercicio 17 "Crie um array associativo que armazene as notas de 3 alunos em uma prova. As chaves do array devem ser os nomes dos alunos e os valores devem ser suas respectivas notas. Exiba uma lista com o nome de cada aluno e sua nota, e depois calcule e exiba a média das notas."

$notas = [
    "Aluno 1" => 8.5,
    "Aluno 2" => 9.0,
    "Aluno 3" => 7.8
];"

foreach($notas as $aluno => $nota){
    echo "Nome: $aluno, Nota: $nota <br>";
}

$somaNotas = 0;

foreach($notas as $nota){
    $somaNotas += $nota;
}

$mediaNotas = $somaNotas / count($notas);

echo "Média das notas: $mediaNotas";

// exercicio 18 "Crie um formulário simples que colete o nome e o e-mail de um usuário. Após o envio, exiba uma mensagem personalizada como; Olá [nome], agradecemos pelo seu contato. Responderemos para [e-mail] em breve.​"

<form action="#" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email"><br><br>
    
    <input type="submit" value="Enviar">
    
</form>

// exercicio 19 " "Formulário de Login: Tarefa: Crie um formulário de login que solicite um nome de usuário e uma senha. Ao enviar o formulário, exiba uma mensagem de boas-vindas caso o nome de usuário seja "admin" e a senha seja "1234". Caso contrário, exiba uma mensagem de erro"

<form action="#" method="post">
    <label for="nome_usuario">Nome de Usuário:</label>
    <input type="text" id="nome_usuario" name="nome_usuario"><br><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha"><br><br>
    
    <input type="submit" value="Login">
    
</form>

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome_usuario = $_POST["nome_usuario"];
    $senha = $_POST["senha"];
    
    if($nome_usuario == "admin" && $senha == "1234"){
        echo "Bem-vindo, admin!";
    }else{
        echo "Nome de usuário ou senha inválidos!";
    }
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// 01 - Desafio com POO : " Criar uma classe simples e instanciar objetos dela"

<?php

class Livro {
    private $titulo;
    private $autor;
    private $ano;

    public function __construct($titulo, $autor, $ano) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }

    public function exibirInformacoes() {
        echo "Título: {$this->titulo}, Autor: {$this->autor}, Ano: {$this->ano}\n";
    }
}

// Criando dois objetos da classe Livro
$livro1 = new Livro("Dom Quixote", "Miguel de Cervantes", 1605);
$livro2 = new Livro("1984", "George Orwell", 1949);

// Chamando o método exibirInformacoes para ambos os objetos
$livro1->exibirInformacoes();
$livro2->exibirInformacoes();

?>

// 02 - Desafio com POO : "Encapsulamento com atributos Privados"


<?php

class ContaBancaria {
    private $saldo;

    public function __construct() {
        $this->saldo = 0;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

// Criando um objeto da classe ContaBancaria
$conta = new ContaBancaria();

// Fazendo um depósito de 500
$conta->depositar(500);

// Exibindo o saldo
echo "Saldo: " . $conta->getSaldo() . "\n";

?>

// 03 - Desafio com POO : "criar relação de Herança entre classe"

<?php

class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Meu nome é {$this->nome} e tenho {$this->idade} anos.\n";
    }
}

class Estudante extends Pessoa {
    private $curso;

    public function __construct($nome, $idade, $curso) {
        parent::__construct($nome, $idade);
        $this->curso = $curso;
    }

    public function apresentar() {
        echo "Meu nome é {$this->nome}, tenho {$this->idade} anos e estudo {$this->curso}.\n";
    }
}

// Criando um objeto da classe Estudante
$estudante = new Estudante("Carlos", 21, "Engenharia");

// Chamando o método apresentar
$estudante->apresentar();

?>

// 04 - Desafio com POO : "Polimorfismo com método sobrescritos"


<?php

class Animal {
    public function fazerSom() {
        echo "O animal está fazendo um som.\n";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "O cachorro está latindo.\n";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "O gato está miando.\n";
    }
}

// Criando objetos das subclasses
$cachorro = new Cachorro();
$gato = new Gato();

// Chamando o método fazerSom para ambos
$cachorro->fazerSom();
$gato->fazerSom();

?>

// 05 - Desafio com POO : "Criar uma interface e implementá-la em classes diferentes"

<?php

interface FormaGeometrica {
    public function calcularArea();
    public function calcularPerimetro();
}

class Quadrado implements FormaGeometrica {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }

    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}

class Circulo implements FormaGeometrica {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->raio;
    }
}

// Criando objetos das classes Quadrado e Circulo
$quadrado = new Quadrado(4);
$circulo = new Circulo(3);

// Exibindo os cálculos
echo "Área do quadrado: " . $quadrado->calcularArea() . "\n";
echo "Perímetro do quadrado: " . $quadrado->calcularPerimetro() . "\n";
echo "Área do círculo: " . $circulo->calcularArea() . "\n";
echo "Perímetro do círculo: " . $circulo->calcularPerimetro() . "\n";

?>
