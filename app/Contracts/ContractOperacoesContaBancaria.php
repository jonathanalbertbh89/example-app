<?php
    declare(strict_types=1);

    namespace App\Contracts;

    interface ContractOperacoesContaBancaria
    {
        public function depositar(float $valor): void;
        public function sacar(float $valor): void;
        public function consultarSaldo(): float;
    }