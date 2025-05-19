<?php
    declare(strict_types=1);
    namespace App\Models;

    class ManipulacaoDeDataEHora {
        
    }

    $dataAtual = new \DateTime();

    $dataNascimento = new \DateTime('1989-01-24 00:00:00');

    $idade = $dataAtual->diff($dataNascimento);


    var_dump($idade);