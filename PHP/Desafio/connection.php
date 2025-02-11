

<?php
$dsn ="mysql:host=localhost;dbname=perfil_usuarios";
$user = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $user, $password);
    echo "";
    
} catch (PDOException $e) {
    echo "Error". $e->getMessage() ."";
}


       
   