<?php
    namespace App\Models;

    use App\Contracts\ContractContaBancaria;
    use App\Contracts\ContractOperacoesContaBancaria;

    class ContaBancaria implements ContractOperacoesContaBancaria, ContractContaBancaria
    {
        private string $banco;
        private string $agencia;
        private string $conta;
        private float $saldo;

        public function __construct(string $banco = '', string $agencia = '', string $conta = '', float $saldo = 0.0)
        {
            $this->banco = $banco;
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->saldo = $saldo;
        }
    
        public function depositar(float $valor): void
        {
            if ($valor > 0) {
                $this->saldo += $valor;
            }
        }
    
        public function sacar(float $valor): void
        {
            if ($valor > 0 && $this->saldo >= $valor) {
                $this->saldo -= $valor;
            }
        }
    
        public function consultarSaldo(): float
        {
            return $this->saldo;
        }

        public function getBanco(): string
        {
            return $this->banco;
        }
        public function setBanco(string $banco): void {
            $this->banco = $banco;
        }

        public function getAgencia(): string
        {
            return $this->agencia;
        }
        public function setAgencia(string $agencia): void {
            $this->agencia = $agencia;
        }

        public function getConta(): string
        {
            return $this->conta;
        }
        public function setConta(string $conta): void {
            $this->conta = $conta;
        }

        public function getSaldo(): float
        {
            return $this->saldo;
        }
        public function setSaldo(float $saldo): void {
            $this->saldo = $saldo;
        }
    }