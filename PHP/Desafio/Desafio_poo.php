<?php include("./connection.php"); ?>  
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            max-width: 450px;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #218838;
        }
        header img {
            max-height: 250px;
            width: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<header class="text-center mb-4">
    <img src="estoque.jpg" alt="Imagem do Estoque">
</header>

<?php
// Verifica se os campos foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    try {
        // Prepara a consulta SQL
        $sql = "INSERT INTO produtos (nome, preco, quantidade_estoque) VALUES (:nome, :preco, :quantidade)";
        $stmt = $pdo->prepare($sql);

        // Associa os parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);

        // Executa a inserção
        if ($stmt->execute()) {
            echo "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Erro ao cadastrar o produto.</p>";
        }
    } catch (PDOException $e) {
        echo "<p style='color: red;'>Erro: " . $e->getMessage() . "</p>";
    }
}
?>

<div class="container">
    <h2>Cadastro de Produto</h2>
    <form action="" method="POST">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" class="form-control" required>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" class="form-control" required>

        <label for="quantidade">Quantidade em Estoque:</label>
        <input type="number" id="quantidade" name="quantidade" class="form-control" required>

        <button type="submit" class="btn btn-success w-100 mt-3">
            <i class="fas fa-box"></i> Cadastrar Produto
        </button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
