<?php

    namespace App\ContaPessoal;

    use App\Models\ContaBancaria;

    

    class ContaPessoal extends ContaBancaria {

        /**
         * @var \App\Models\ContaBancaria
         */
        protected $minhaConta;

        public function criarConta() {
            //--
        }
    }