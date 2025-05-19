<?php
    namespace App\BancoDeDados;

use PDO;
use RuntimeException;

    /**
     * Classe utilizada é o PDO
     */

    try {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=testdb", "root", "rootpassword");
        echo "Conexão com o banco de dados estabelecida com sucesso!<br>";
        echo PHP_EOL;
    } catch (RuntimeException $e) {
        echo "Erro: " . $e;
        echo PHP_EOL;
    }
