<?php
  $numero = intval(fgets(STDIN));

  $soma = 0;
  
  for($i = 0; $i <= $numero; $i++){
    $result = $i / 3;
    
    if(!is_integer($result)){
      $soma = $soma + $i;
    }
  }

  echo 'Soma dos números de 1 a ' . $numero . ', exceto os divisíveis por 3: ' . $soma . PHP_EOL;
