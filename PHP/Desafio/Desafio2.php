<?php include("./connection.php"); ?>  

<?php
session_start();
require 'config.php'; // Certifique-se de que este arquivo existe e tem a conexão PDO

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    die("Acesso negado. Faça login primeiro.");
}

// Obtém os dados do usuário logado
$id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT nome, email FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

// Se o usuário não for encontrado, evite erros
if (!$usuario) {
    die("Usuário não encontrado.");
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'] ?? '';

    // Validação básica
    if (empty($nome) || empty($email)) {
        echo "Nome e email são obrigatórios!";
    } else {
        try {
            $pdo->beginTransaction();
            
            // Atualiza nome e email
            $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
            $stmt->execute([$nome, $email, $id]);

            // Atualiza senha, se fornecida
            if (!empty($senha)) {
                $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("UPDATE usuarios SET senha = ? WHERE id = ?");
                $stmt->execute([$senha_hash, $id]);
            }
            
            $pdo->commit();
            echo "Perfil atualizado com sucesso!";
        } catch (PDOException $e) {
            $pdo->rollBack();
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Perfil</title>
</head>
<body>
    <h2>Atualizar Perfil</h2>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo htmlspecialchars($usuario['nome']); ?>" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($usuario['email']); ?>" required><br>
        
        <label for="senha">Nova Senha (opcional):</label>
        <input type="password" name="senha"><br>
        
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
