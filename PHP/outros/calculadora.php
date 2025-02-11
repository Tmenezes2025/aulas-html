<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Calculadora</title>
</head>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $operacao = $_POST["operacao"];

        switch($operacao){
            case "+":
                $result = $valor1 + $valor2;
                break;
            case "-":
                $result = $valor1 - $valor2;
                break;
            case "*":
                $result = $valor1 * $valor2;
                break;
            case "/":
                if($valor2!= 0){
                    $result = $valor1 / $valor2;
                } else {
                    $result = "Não é possível realizar divisão por zero.";
                }
                break;
            default:
                $result = "Operação inválida.";
        }
    }
?>

<body>
    <h1 class="text-center mt-4">Calculadora</h1>
    <?php
        if(isset($result)){
            echo "<div class='border-2 border-red-500 p-4'>Resultado: $result</div>";
        }
    ?>
    <form method="post" class="p-4">
        <div class="mb-4">
            <input class="border rounded-sm w-full p-2" type="number" name="valor1" id="">
        </div>
        <div class="mb-4">
            <input class="border rounded-sm w-full p-2" type="number" name="valor2" id="">
        </div>
        <div class="mb-4">
            <select name="operacao" class="border rounded-sm w-full p-2">
                <option value="+">Soma</option>
                <option value="-">Subtração</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
            </select>
        </div>
        <div class="mb-4">
            <input type="submit" value="Cadastrar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg">
        </div>
    </form>
</body>
</html>