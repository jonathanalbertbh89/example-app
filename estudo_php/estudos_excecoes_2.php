<?php


        function divisao($dividendo, $divisor)
        {

            try {
                if ($divisor == 0) {
                    throw new RangeException("Divisão por zero não é permitida.");
                }
                echo $dividendo / $divisor . PHP_EOL;
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage() . PHP_EOL;
            } finally {
                echo "Operação de divisão concluída." . PHP_EOL;
            }
           
        }

        divisao(10, 0);