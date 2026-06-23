<?php

    function divisao ($dividendo, $divisor){
        
        try {
                if ($divisor == 0)

                {
                    throw new RangeException("O numero nao pode ser dividido por zero");
                }

                $resultado = $dividendo/ $divisor;

                echo "O resultado é: " . $resultado;
                
            }catch (Exception $e){

                echo "Exception:" . $e->getMessage();

            } finally{

                echo "<br>tratando Excecoes";

            }
        
       
    }

    divisao(10,0);