<?php

    function dividir($numero1, $numero2){
        if (!is_numeric($numero1) || !is_numeric($numero2)){
            throw new Exception("Ambos os valores precisam ser numeros.");
        } elseif ($numero2 == 0){
            throw new InvalidArgumentException("Erro: Nao e possivel dividir por zero.");
        }

        $resultado = $numero1 / $numero2;
        echo "Resultado da divisao:". $resultado. "<br>";
    }

    try {
        echo "Sucesso...<br>";
        dividir(10,2);
            
    } catch (Exception $e){
        echo "Catch pegou" . $e->getMessage() . "<br>";
    }

    try {
        echo "Pega o erro do zero... <br>";
        dividir(10,0);
            
    } catch (Exception $e){
        echo "Catch pegou" . $e->getMessage() . "<br>";
    }
    
    try {
        echo "Pega o erro do texto... <br>";
        dividir(10,"cinco");
            
    } catch (Exception $e){
        echo "Catch pegou" . $e->getMessage() . "<br>";
    }