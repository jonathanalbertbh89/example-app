<?php
    declare(strict_types=1);

    namespace App\Models;

    use App\Contracts\ContractContaBancaria;
    use App\Contracts\ContractOperacoesContaBancaria;

    class ContaBancaria
    {

        /**
         * o bloco de comentário abaixo é um exemplo de declaração de tipo, utilizando antes da versão 7.4 do PHP
         * @var string
         * @var int
         * @var float
         * @var bool
         * @var array
         * @var object
         * @var mixed
         */

        /**
         * @var string
         */
        public string $banco;

        /**
         * @var string
         */
        public string $nomeTitular;

        /**
         * @var string
         */
        public string $numeroAgencia;

        /**
         * @var string
         */
        public string $numeroConta;

        /**
         * @var float
         */
        private float $saldo;

        public function __construct($banco, $nomeTitular , $numeroAgencia, $numeroConta, $saldo = 0.00) {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroAgencia = $numeroAgencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        }

        public function getSaldo() : float {
            return $this->saldo;
        }

        public function setSaldo(float $valor) : float {
            $this->saldo = $valor + $this->saldo;
            return $this->saldo;
        }
    }


    $conta = new ContaBancaria(
        'Banco do Brasil',
        'João da Silva',
        '1234-5',
        '67890-1',
        1000.00
    );

    var_dump($conta->getSaldo());

    var_dump($conta);