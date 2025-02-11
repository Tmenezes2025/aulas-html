

<?php
$dsn ="mysql:host=localhost;dbname=connection";
$user = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $user, $password);
    echo "Conexão Realizada com Sucesso!";
    
} catch (PDOException $e) {
    echo "Error". $e->getMessage() ."";
}


       
   