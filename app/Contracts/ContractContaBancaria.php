<?php
    declare(strict_types=1);

    namespace App\Contracts;

    interface ContractContaBancaria
    {
        public function getBanco(): string;
        public function setBanco(string $banco): void;

        public function getAgencia(): string;
        public function setAgencia(string $agencia): void;

        public function getConta(): string;
        public function setConta(string $conta): void;

        public function getSaldo(): float;
        public function setSaldo(float $saldo): void;
    }