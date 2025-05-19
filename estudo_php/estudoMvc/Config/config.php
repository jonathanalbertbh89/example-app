<?php
    define("ROOT_PATH", __DIR__ . "/../");

    define("DATABASE_FILE", ROOT_PATH . "database.json");

    require_once ROOT_PATH . "Controller/BaseController.php";
    require_once ROOT_PATH . "Model/UserModel.php";

    $dados = DATABASE_FILE;

    echo $dados . PHP_EOL;