<?php

    // Exceções são erros que podem ser tratados

    try {
        //code...
    } catch (Exception $e) {
        //throw $th; 
    } finally {
        // Executa sempre
    }


    //  warnning error
    //  notice error

    //  parse error
    //  fatal error

    // code review é o processo de revisão do código
    // design pattern é um padrão de projeto
    // codigo limpo é um código que é fácil de ler e entender
    // SOLID é um acrônimo que representa cinco princípios de design de software que são: Single Responsibility Principle, Open/Closed Principle, Liskov Substitution Principle, Interface Segregation Principle e Dependency Inversion Principle.
    // TDD é um acrônimo que representa três princípios de design de software que são: Test Driven Development, Behavior Driven Development e Domain Driven Design.

    // SPL - Standard PHP Library - biblioteca padrão do PHP para definir exceções
     
    // 1 - Throwable

    //     - Exception
    //         RuntimeException // problemmas causados em tempo de execução
    //             UnexpectedValueException
    //             UnderflowException
    //             RangeException
    //             OverflowException
    //             OutOfBoundsException

    //         LogicException // causado por exceções lógicas
    //             OutOfRangeException
    //             LengthException
    //             InvalidArgumentException
    //             DomainException
    //             BadFunctionCallException
    //             BadMethodCallException
    //     - Error
